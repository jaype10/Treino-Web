# 💰 Finans - Landing Page Financeira

> Uma página institucional moderna desenvolvida com Bootstrap, focada em design responsivo, componentes de interface prontos para o mercado e uma experiência de usuário voltada para conversão.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

## 📌 Sobre o Projeto

O **Finans** simula a landing page de um aplicativo de controle financeiro pessoal. O diferencial deste projeto é a aplicação prática do framework Bootstrap para agilizar o desenvolvimento, garantindo que o site seja 100% responsivo "out-of-the-box" e utilize componentes padronizados como barras de navegação fixas e sistemas de grid.

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Grid System:** Uso das classes de colunas do Bootstrap para criar layouts flexíveis que se adaptam a smartphones, tablets e desktops.
- **Componentes do Framework:** Implementação de `Navbar` (barra de navegação), `Jumbotron` (seção de destaque), `Cards` e `Buttons` estilizados.
- **Tipografia e Ícones:** Integração de fontes modernas e ícones para facilitar a leitura e a compreensão das funcionalidades.
- **Imagens Fluídas:** Uso de classes utilitárias para garantir que os assets visuais acompanhem o redimensionamento da tela.

## 🛠️ Tecnologias Utilizadas

- **Bootstrap 4:** Framework principal para layout e componentes.
- **HTML5:** Estrutura semântica para os blocos de conteúdo.
- **CSS3:** Customizações pontuais para alinhar a identidade visual às necessidades do projeto.

## 📂 Estrutura do Projeto

```text
Projeto-7-Finans/
├── index.html          # Estrutura principal com seções de benefícios
├── estilo.css          # Sobrescrita de estilos do Bootstrap e customizações
└── imagens/            # Ilustrações e mockups do aplicativo
```
## 🚀 Como Executar

1. Clone o repositório:
    ```Bash

    git clone [https://github.com/jaype10/Treino-Web.git](https://github.com/jaype10/Treino-Web.git)
    ```

2. Navegue até a pasta:
    ```Bash

    cd Treino-Web/Projeto-7-Finans
    ```

3. Abra o arquivo `index.html` em seu navegador.

## 🧠 Destaque Técnico: Flexibilidade do Grid

O uso correto do sistema de grid permite que o conteúdo mude de posição de acordo com a tela do usuário sem quebrar o layout:
```HTML

<div class="container">
    <div class="row">
        <div class="col-md-6 d-flex">
            <div class="align-self-center">
                <h1>Suas contas, descomplicadas</h1>
                <p>O Finans ajuda você a controlar suas despesas de forma simples.</p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="imagens/capa-mulher.png" class="img-fluid">
        </div>
    </div>
</div>
```
