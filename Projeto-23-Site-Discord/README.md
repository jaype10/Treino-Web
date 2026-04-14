# 🎮 Discord Landing Page Clone

> Uma reconstrução fiel e moderna da página inicial do Discord, focada em design responsivo, fidelidade visual e estruturação de componentes front-end.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![UI/UX](https://img.shields.io/badge/Design-UI%2FUX-blueviolet?style=for-the-badge)

## 📌 Sobre o Projeto

Este projeto faz parte de uma fase de atualização técnica, onde o objetivo foi aplicar as melhores práticas de CSS moderno para replicar uma das interfaces mais conhecidas da web. O foco principal foi o desafio de alinhar elementos complexos e garantir que a experiência de usuário fosse idêntica à original.

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Flexbox & Grid Layout:** Uso intensivo de técnicas modernas de alinhamento para estruturar as seções de herói (Hero Section) e funcionalidades.
- **Identidade Visual (Branding):** Aplicação rigorosa da paleta de cores e tipografia oficial do Discord.
- **Responsividade Total:** Adaptação do layout para diferentes breakpoints, garantindo que o site seja navegável em dispositivos móveis.
- **Hover Effects & Interatividade:** Implementação de estados de hover e transições suaves em botões e links de navegação.

## 🛠️ Tecnologias Utilizadas

- **HTML5:** Estrutura semântica de alta qualidade.
- **CSS3:** Estilização avançada, incluindo o uso de variáveis CSS para manter a consistência das cores.
- **Google Fonts:** Integração da tipografia específica para o projeto.

## 📂 Estrutura do Projeto

```text
Projeto-23-Site-Discord/
├── index.html          # Estrutura da Landing Page
├── estilo.css          # Estilização completa e media queries
└── imagens/            # Assets e ilustrações originais
```
## 🚀 Como Executar

Por ser um projeto puramente front-end, basta abrir o arquivo principal:

1. Clone o repositório:
    ```Bash

    git clone [https://github.com/jaype10/Treino-Web.git](https://github.com/jaype10/Treino-Web.git)
```

2. Navegue até a pasta:
    ```Bash

    cd Treino-Web/Projeto-23-Site-Discord
```

3. Abra o arquivo `index.html` em seu navegador.

## 🧠 Destaque Técnico: Hero Section

A seção principal de um site como o Discord exige um controle preciso sobre o posicionamento de imagens de fundo e texto centralizado para criar o impacto visual desejado:
```CSS

.hero-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    background-color: #404eed; /* Cor oficial Discord */
    padding: 100px 20px;
}
```
