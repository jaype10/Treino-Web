# 🐦 Twitter Clone (PHP MVC)

> Uma rede social funcional inspirada no Twitter, desenvolvida seguindo o padrão de arquitetura MVC (Model-View-Controller) para garantir escalabilidade e organização de código.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

## 📌 Sobre o Projeto

Este projeto simula as principais funcionalidades de uma rede social microblogging. Ele foca na estrutura de software robusta, utilizando um mini-framework MVC customizado para separar as rotas da lógica de negócio e da interface.

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Padrão de Arquitetura MVC:** Separação rígida entre Modelos (lógica de dados), Visões (interface) e Controladores (gerenciamento de fluxo).
- **Sistema de Autenticação Seguro:** Cadastro e login com criptografia de senhas via `password_hash`.
- **Relacionamentos N:N (Followers):** Lógica complexa de banco de dados para gerenciar quem segue quem e como isso afeta a timeline.
- **Timeline Dinâmica:** Exibição de tweets apenas do usuário e de quem ele segue, ordenados cronologicamente.
- **Sistema de Busca:** Pesquisa de usuários por nome com opção de seguir/parar de seguir em tempo real.
- **Contadores de Estatísticas:** Exibição dinâmica de número de tweets, seguidores e seguindo.

## 🛠️ Tecnologias Utilizadas

- **PHP 8+** (utilizando Orientação a Objetos e Namespaces).
- **MySQL:** Banco de dados relacional para usuários, tweets e seguidores.
- **Bootstrap 4:** Estilização da interface inspirada no design original do Twitter.
- **PDO:** Conexão segura e manipulação de dados.

## 📂 Estrutura do Projeto

```text
Projeto-19-Twitterclone/
├── App/
│   ├── Controllers/    # Lógica de controle (AppController, AuthController, etc)
│   ├── Models/         # Classes de representação de dados (Usuario, Tweet)
│   ├── Views/          # Templates HTML/PHP
│   ├── Connection.php  # Configuração do banco de dados (Singleton)
│   └── Route.php       # Definição das rotas da aplicação
├── public/             # Diretório público (index.php, CSS, JS, Imagens)
└── vendor/             # Dependências via Composer
```
## 🚀 Como Executar

1. Clone o repositório.

2. Certifique-se de ter o Composer instalado e execute `composer install`.

3. Importe o script SQL para criar as tabelas `usuarios`, `tweets` e `usuarios_seguidores`.

4. Configure as credenciais do banco em `App/Connection.php`.

5. Configure um servidor virtual (vhost) apontando para a pasta `public/` ou utilize o servidor embutido do PHP dentro da pasta `public`:
    ```Bash

    php -S localhost:8080
    ```

## 🧠 Destaque Técnico: Relacionamento de Seguidores

O coração deste projeto é a query de recuperação da timeline, que utiliza subqueries ou joins para filtrar os tweets relevantes:
```SQL

SELECT 
    t.id, t.id_usuario, u.nome, t.tweet, DATE_FORMAT(t.data, '%d/%m/%Y %H:%i') as data 
FROM 
    tweets as t
    LEFT JOIN usuarios as u ON (t.id_usuario = u.id)
WHERE 
    t.id_usuario = :id_usuario
    OR t.id_usuario IN (SELECT id_usuario_seguindo FROM usuarios_seguidores WHERE id_usuario = :id_usuario)
ORDER BY 
    t.data DESC
``
