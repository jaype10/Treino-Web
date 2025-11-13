<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//classe dashboard
class Dashboard {

  public $data_inicio;
  public $data_fim;
  public $numeroVendas;
  public $totalVendas;
  public $clientesAtivos;
  public $clientesInativos;
  public $totalReclamacoes;
  public $totalElogios;
  public $totalSugestoes;
  public $totalDespesas;

  public function __get($atributo) {
    return $this->$atributo;
  }

  public function __set($atributo, $valor) {
    $this->$atributo = $valor;
    return $this;
  }

}

# classe de conexão bd
class Conexao {
  private $host = 'localhost';
  private $dbname = 'dashboard';
  private $user = 'root';
  private $pass = '';

  public function conectar() {
    try{
      // define charset no DSN e habilita exceptions para facilitar o tratamento de erro
      $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
      $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
      ];

      $conexao = new PDO($dsn, $this->user, $this->pass, $options);

      return $conexao;
    } catch (PDOException $e) {
      // Em ambiente de produção não exponha mensagens sensíveis
      error_log('Conexao DB erro: ' . $e->getMessage());
      throw $e; // relança para permitir tratamento mais acima
    }
  }
}

# classe (model)
class Bd{
  private $conexao;
  private $dashboard;

  public function __construct(Conexao $conexao, Dashboard $dashboard) {
    $this->conexao = $conexao->conectar();
    $this->dashboard = $dashboard;
  }

  public function getNumeroVendas() {
    $query = '
      SELECT
        COUNT(*) AS numero_vendas
      FROM 
        tb_vendas 
      WHERE 
        data_venda BETWEEN :data_inicio and :data_fim';
    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
    $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
  }

  public function getTotalVendas() {
    $query = '
      SELECT
        SUM(total) AS total_vendas
      FROM 
        tb_vendas 
      WHERE
        data_venda BETWEEN :data_inicio and :data_fim';
    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
    $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
  }

  # DESAFIO função para pegar o numero de clientes clientesAtivos
  public function getClientesAtivos() {
    $query = '
      SELECT
        COUNT(*) AS total_clientes_ativos
      FROM 
        tb_clientes
      WHERE
        cliente_ativo = 1';
    $stmt = $this->conexao->prepare($query);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ)->total_clientes_ativos;
  }

  # DESAFIO função para pegar o numero de clientes inativos
  public function getClientesInativos() {
    $query = '
      SELECT
          COUNT(*) AS total_clientes_inativos
      FROM 
        tb_clientes
      WHERE
        cliente_ativo = 0';
    $stmt = $this->conexao->prepare($query);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ)->total_clientes_inativos;
  }
  
  # DESAFIO função para pegar o numero de reclamações
  public function getReclamacoes(){
    $query = '
     SELECT
       COUNT(*) AS total_reclamacoes
     FROM
       tb_contatos
     WHERE
       tipo_contato = 1';
    $stmt = $this->conexao->prepare($query);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ)->total_reclamacoes;
  }

  # DESAFIO função para pegar o numero de elogios
  public function getElogios(){
    $query = '
     SELECT
       COUNT(*) AS total_elogios
     FROM
       tb_contatos
     WHERE
       tipo_contato = 2';
    $stmt = $this->conexao->prepare($query);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ)->total_elogios;
  }

  # DESAFIO função para pegar o numero de sugestões
  public function getSugestoes(){
    $query = '
     SELECT
       COUNT(*) AS total_sugestoes
     FROM
       tb_contatos
     WHERE
       tipo_contato = 3';
    $stmt = $this->conexao->prepare($query);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ)->total_sugestoes;
  }

  # DESAFIO função para pegar o numero de despesas
  public function getDespesas() {
    $query='
      SELECT
        COUNT(*) AS total_despesas
      FROM
        tb_despesas
      WHERE
        data_despesa BETWEEN :data_inicio AND :data_fim
    ';
    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
    $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ)->total_despesas;
  }
  
}

// lógica do script
try {
  header('Content-Type: application/json; charset=utf-8');

  $dashboard = new Dashboard();
  $conexao = new Conexao();

  // validação simples do parâmetro competencia (espera YYYY-MM)
  $competencia_raw = isset($_GET['competencia']) ? trim($_GET['competencia']) : '';
  if (empty($competencia_raw) || !preg_match('/^\d{4}-\d{2}$/', $competencia_raw)) {
    http_response_code(400);
    echo json_encode(['error' => 'Parâmetro "competencia" inválido. Use YYYY-MM.']);
    exit;
  }

  $competencia = explode('-', $competencia_raw);
  $ano = (int) $competencia[0];
  $mes = (int) $competencia[1];

  // valida mês e ano minimamente
  if ($mes < 1 || $mes > 12 || $ano < 1900) {
    http_response_code(400);
    echo json_encode(['error' => 'Competência inválida (mês/ano).']);
    exit;
  }

  $dias_do_mes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

  $dashboard->__set('data_inicio', sprintf('%04d-%02d-01', $ano, $mes));
  $dashboard->__set('data_fim', sprintf('%04d-%02d-%02d', $ano, $mes, $dias_do_mes));

  $bd = new Bd($conexao, $dashboard);

  // garante tipos e valores padrão quando query retorna NULL
  $dashboard->__set('numeroVendas', (int) $bd->getNumeroVendas());
  $dashboard->__set('totalVendas', (float) $bd->getTotalVendas());
  $dashboard->__set('clientesAtivos', (int) $bd->getClientesAtivos());
  $dashboard->__set('clientesInativos', (int) $bd->getClientesInativos());
  $dashboard->__set('totalReclamacoes', (int) $bd->getReclamacoes());
  $dashboard->__set('totalElogios', (int) $bd->getElogios());
  $dashboard->__set('totalSugestoes', (int) $bd->getSugestoes());
  $dashboard->__set('totalDespesas', (int) $bd->getDespesas());


  echo json_encode($dashboard);
  exit;

} catch (Exception $e) {
  // retorna erro em JSON e registra no log do servidor
  error_log('Erro app.php: ' . $e->getMessage());
  http_response_code(500);
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode(['error' => 'Erro interno no servidor.']);
  exit;
}
?>
