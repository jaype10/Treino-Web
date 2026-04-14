# 🛠️ App Help Desk

> Um sistema de gerenciamento de chamados técnico desenvolvido em PHP, focado em autenticação de usuários, níveis de acesso e persistência de dados em arquivos de sistema.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

## 📌 Sobre o Projeto

O **Help Desk** é uma aplicação funcional que simula um sistema de suporte técnico. Ele permite a abertura de chamados categorizados e a consulta de registros baseada no perfil do usuário (Administrador vs. Usuário Comum).

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Autenticação de Usuários:** Sistema de login com verificação de credenciais.
- **Segurança (Backend):** Implementação de scripts de validação (`validador_acesso.php`) em todas as páginas protegidas para evitar acesso via URL.
- **Controle de Perfil:** - **ADM:** Visualiza todos os chamados abertos no sistema.
  - **User:** Visualiza apenas os chamados criados por ele mesmo.
- **Manipulação de Arquivos (I/O):** Uso das funções `fopen`, `fwrite` e `explode` para gravar e ler os chamados em um arquivo `.hd` de forma estruturada.
- **Tratamento de Erros:** Captura de parâmetros via `GET` para exibir mensagens de erro amigáveis ao usuário.

## 🛠️ Tecnologias Utilizadas

- **PHP 8+:** Lógica de processamento e gerenciamento de sessões.
- **Bootstrap 4:** Interface responsiva e componentes de formulário.
- **CSS3:** Customizações de layout e estilização de cards.

## 📂 Estrutura do Projeto

```text
Projeto-12-App-Help-Desk/
├── index.html              # Tela de login
├── home.php                # Painel principal pós-login
├── abrir_chamado.php       # Formulário de registro
├── consultar_chamado.php   # Listagem de chamados com filtros de perfil
├── registra_chamado.php    # Script de processamento (I/O)
├── valida_login.php        # Lógica de autenticação
└── validador_acesso.php    # Middleware de segurança
```

## 🚀 Como Executar

Como este projeto utiliza PHP, você precisará de um servidor local (como Apache ou PHP Built-in Server).

1. Clone o repositório:
```Bash

    git clone [https://github.com/jaype10/Treino-Web.git](https://github.com/jaype10/Treino-Web.git)
```

2. Navegue até a pasta:
```Bash

    cd Treino-Web/Projeto-12-App-Help-Desk
```

3. Inicie o servidor PHP:
```Bash

    php -S localhost:8080
``

4. Acesse `http://localhost:8080` no seu navegador.

## 🧠 Destaque Técnico: Segurança de Sessão

O projeto utiliza um sistema de validação simples, porém eficaz, para proteger as páginas:
```PHP

// validador_acesso.php
session_start();

if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    header('Location: index.php?login=erro2');
}
```
