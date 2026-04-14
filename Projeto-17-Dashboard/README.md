# 📊 Dashboard Administrativo (App Dashboard)

> Uma interface administrativa dinâmica para monitoramento de indicadores (KPIs), utilizando PHP, AJAX e integração com banco de dados MySQL para fornecer dados em tempo real.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

## 📌 Sobre o Projeto

O **App Dashboard** simula um painel de controle corporativo onde o usuário pode filtrar informações (como vendas, despesas e contatos) por período. A aplicação utiliza requisições assíncronas para buscar métricas no servidor sem a necessidade de atualizar a página, garantindo agilidade na análise de dados.

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Consumo Dinâmico de Indicadores:** Cálculo de métricas como "Número de Vendas", "Total de Vendas", "Clientes Ativos" e "Despesas" diretamente via SQL.
- **Integração AJAX:** Atualização dos cards de estatísticas de forma assíncrona ao alterar os filtros de período.
- **Padrão de Camadas:** Separação entre os arquivos de visualização (HTML/JS) e a lógica de processamento de dados (PHP/PDO).
- **Backend Orientado a Objetos:** Uso de classes e métodos para organizar as consultas ao banco de dados de maneira escalável.

## 🛠️ Tecnologias Utilizadas

- **PHP 8+:** Processamento de dados e conexão PDO.
- **MySQL:** Armazenamento de registros de vendas e clientes.
- **JavaScript (Vanilla/AJAX):** Controle da interface e requisições assíncronas.
- **Bootstrap 4:** Layout responsivo e estilização dos cards de métricas.

## 📂 Estrutura do Projeto

```text
Projeto-17-Dashboard/
├── index.html              # Shell da aplicação (Menu e Containers)
├── app.js                  # Lógica de controle AJAX e manipulação de DOM
├── app.php                 # Ponto de entrada do Backend
├── conexao.php             # Configurações de conexão PDO
├── dashboard.service.php   # Lógica de negócio (Queries SQL)
└── scripts_sql/            # (Opcional) Scripts para criação da base de dados
```
## 🚀 Como Executar

1. Clone o repositório.

2. Certifique-se de ter um banco de dados MySQL rodando com as tabelas necessárias (Vendas, Clientes, etc.).

3. Configure as credenciais de acesso em `conexao.php`.

4. Inicie seu ambiente PHP (Apache/Nginx ou `php -S localhost:8080`).

5. Acesse `index.html` e utilize os filtros para visualizar os dados.

## 🧠 Destaque Técnico: Agregação de Dados via SQL

Para otimizar o desempenho, o Dashboard utiliza funções de agregação do MySQL, retornando apenas o valor necessário para o front-end:
```PHP

// Exemplo de lógica no DashboardService
public function getTotalVendas() {
    $query = 'select SUM(total) as total_vendas from tb_vendas where data_venda between :data_inicio and :data_fim';
    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
    $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
}
```
