# 📝 App Lista de Tarefas

> Uma aplicação CRUD completa desenvolvida em PHP para gestão de tarefas, utilizando o padrão de arquitetura de camadas e persistência em banco de dados MySQL via PDO.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

## 📌 Sobre o Projeto

O **App Lista de Tarefas** permite o gerenciamento total do ciclo de vida de uma tarefa: criação, visualização, edição, marcação de conclusão e exclusão. O projeto foi desenhado com foco em segurança e organização de código, separando a lógica de negócio do acesso direto via web.

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Operações CRUD:** Implementação completa de Criar, Ler, Atualizar e Deletar registros.
- **PHP Data Objects (PDO):** Uso de PDO para conexões seguras, prevenindo ataques de SQL Injection através de *prepared statements*.
- **Arquitetura em Camadas:** Divisão clara entre a interface (View), os modelos de dados (Model) e a lógica de controle (Service/Controller).
- **Segurança de Diretórios:** Scripts sensíveis de conexão e manipulação de banco residem fora do diretório público.
- **Manipulação Dinâmica com JS:** Uso de JavaScript no front-end para criar campos de edição em tempo real sem recarregar a página.

## 🛠️ Tecnologias Utilizadas

- **PHP 8+**
- **MySQL:** Banco de dados relacional.
- **Bootstrap 4:** Design e componentes de interface.
- **Font Awesome:** Ícones para ações de edição, exclusão e conclusão.

## 📂 Estrutura do Projeto

```text
Projeto-16-App-Lista-Tarefas/
├── public/                 # Arquivos acessíveis pelo navegador
│   ├── index.php           # Visualização de tarefas pendentes
│   ├── nova_tarefa.php     # Formulário de cadastro
│   ├── todas_tarefas.php   # Listagem geral
│   └── tarefa_controller.php # Ponto de entrada das requisições
└── scripts_privados/       # Lógica protegida (fora da pasta pública)
    ├── tarefa.model.php    # Definição da classe Tarefa
    ├── tarefa.service.php  # Lógica de negócio (CRUD)
    ├── tarefa_controller.php # Controle de fluxo
    └── conexao.php         # Configuração do PDO
```
## 🚀 Como Executar

1. Clone o repositório.

2. Importe o arquivo SQL (se disponível) ou crie a tabela tb_tarefas com os campos: `id`, `id_status`, `tarefa`, `data_cadastrado`.

3. Configure as credenciais do seu banco de dados em scripts_privados/conexao.php.

4. Aponte seu servidor web (Apache/Nginx) para a pasta public/.

## 🧠 Destaque Técnico: Prepared Statements

O uso do PDO garante que a aplicação seja resiliente e segura contra manipulações de entrada de dados:
```PHP

// Trecho do tarefa.service.php
public function inserir() {
    $query = 'insert into tb_tarefas(tarefa)values(:tarefa)';
    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
    $stmt->execute();
}
``
