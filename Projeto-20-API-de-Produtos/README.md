# 📦 API de Produtos (PHP REST API)

> Uma API RESTful desenvolvida em PHP puro para fornecer dados de produtos em formato JSON, simulando um serviço de backend para integração com aplicações externas.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![JSON](https://img.shields.io/badge/Format-JSON-lightgrey?style=for-the-badge&logo=json)
![Postman](https://img.shields.io/badge/Tools-Postman-FF6C37?style=for-the-badge&logo=postman)

## 📌 Sobre o Projeto

O **Projeto 20** foca na entrega de dados (Data Delivery). Em vez de renderizar HTML, o servidor processa as informações e as devolve em um formato agnóstico (JSON), permitindo que qualquer cliente (React, Vue, Flutter ou mesmo um script Python) consuma essas informações.

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Endpoints REST:** Estruturação de rotas para acesso aos recursos de produtos.
- **Manipulação de Cabeçalhos (Headers):** Uso da função `header('Content-Type: application/json')` para informar ao cliente o formato da resposta.
- **Interação com Banco de Dados:** Uso de PDO para buscar registros de forma segura.
- **Serialização de Dados:** Transformação de arrays e objetos PHP em strings JSON via `json_encode`.
- **CORS (Cross-Origin Resource Sharing):** Noções de permissão para que domínios diferentes possam realizar requisições à API.

## 🛠️ Tecnologias Utilizadas

- **PHP 8+**
- **PDO (MySQL):** Para gestão e recuperação dos dados de produtos.
- **JSON:** Formato de intercâmbio de dados.
- **Postman/Insomnia:** (Recomendado) Para testes de endpoints.

## 📂 Estrutura do Projeto

```text
Projeto-20-API-de-Produtos/
├── index.php           # Ponto de entrada que retorna a lista de produtos
├── db_connect.php      # Configuração da conexão com o banco de dados
├── Produto.php         # Classe de modelo para representação do objeto
└── produtos.sql        # Script para criação da tabela e carga de dados
```
## 🚀 Como Executar

1. Clone o repositório.

2. Configure seu banco de dados MySQL e execute o arquivo `.sql`.

3. Ajuste as credenciais em `db_connect.php`.

4. Inicie o servidor PHP:
    ```Bash

    php -S localhost:8080
    ```

5. Acesse `http://localhost:8080` para ver a resposta em JSON.

## 🧠 Destaque Técnico: Resposta da API

O diferencial deste projeto é a entrega limpa de dados, essencial para arquiteturas modernas de microsserviços:
```PHP

// Exemplo de como a API entrega os dados
header('Content-Type: application/json');

$produtos = $query->fetchAll(PDO::FETCH_ASSOC);

if ($produtos) {
    echo json_encode($produtos);
} else {
    http_response_code(404);
    echo json_encode(["erro" => "Nenhum produto encontrado"]);
}
``
