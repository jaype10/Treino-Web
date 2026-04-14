# 📧 App Send Mail

> Uma aplicação funcional para envio de e-mails em tempo real, integrando front-end dinâmico com o back-end PHP através da biblioteca PHPMailer via protocolo SMTP.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![PHPMailer](https://img.shields.io/badge/Library-PHPMailer-green?style=for-the-badge)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

## 📌 Sobre o Projeto

O **Send Mail** é um projeto que resolve o desafio de enviar mensagens diretamente de uma interface web para uma caixa de entrada real. Ele foi estruturado para garantir que as credenciais e a lógica de envio fiquem protegidas, simulando um ambiente de produção seguro.

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Integração com PHPMailer:** Implementação robusta de envio de e-mails utilizando servidores SMTP (como Gmail, Outlook ou Mailtrap).
- **Segurança de Diretórios:** Organização dos scripts sensíveis fora do diretório público (`public_html` / `web`), prevenindo a exposição de lógica do servidor.
- **Tratamento de Estados:** Páginas de feedback dinâmicas que informam ao usuário o sucesso ou a falha do envio.
- **Validação de Inputs:** Verificação básica de campos para garantir que o destinatário, assunto e mensagem sejam processados corretamente.

## 🛠️ Tecnologias Utilizadas

- **PHP 8+**
- **PHPMailer:** Biblioteca padrão da indústria para envio de e-mails.
- **Bootstrap 4:** Interface limpa e responsiva.
- **Protocolo SMTP:** Para comunicação segura com servidores de e-mail.

## 📂 Estrutura do Projeto

```text
Projeto-13-App-Send-Mail/
├── index.php               # Interface principal (Formulário)
├── processa_envio.php      # Script público (Ponto de entrada)
├── scripts_protegidos/     # Lógica core fora do acesso direto via URL
│   └── processa_envio.php  # Processamento SMTP real com PHPMailer
└── assets/                 # Imagens de status (Sucesso/Erro)
```
## 🚀 Como Executar

Este projeto requer o Composer para gerenciar a dependência do PHPMailer e um servidor local (XAMPP, Laragon ou PHP Built-in).

1. Clone o repositório:
```Bash

    git clone [https://github.com/jaype10/Treino-Web.git](https://github.com/jaype10/Treino-Web.git)
```

2. Instale as dependências:
```Bash

    composer install
```

3. Configure as credenciais de SMTP no arquivo de processamento.

4. Inicie o servidor:
```Bash

    php -S localhost:8080
```

## 🧠 Destaque Técnico: Abstração de Envio

O uso do PHPMailer permite lidar com exceções de rede e autenticação de forma muito mais segura que a função nativa mail() do PHP:
```PHP

// Exemplo de configuração de segurança aplicada
$mail->isSMTP();
$mail->Host       = 'smtp.exemplo.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'seu-email@exemplo.com';
$mail->Password   = 'sua-senha-app';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = 587;
``
