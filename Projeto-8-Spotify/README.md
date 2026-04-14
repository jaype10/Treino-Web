# 🎵 Spotify Clone - Landing Page

> Uma reconstrução fiel da página inicial do Spotify, explorando o potencial do Bootstrap para criar interfaces modernas, responsivas e visualmente impactantes.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

## 📌 Sobre o Projeto

O **Projeto 8** foca na estética do Spotify, um dos maiores players do mercado de streaming. O desafio técnico foi replicar o layout de "seção única" com scroll suave, utilizando o sistema de grid do Bootstrap e personalizando o CSS para alcançar a paleta de cores vibrante e a tipografia característica da marca.

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Navbar Customizada:** Criação de uma barra de navegação transparente que se adapta ao scroll e mantém a legibilidade.
- **Backgrounds Gradientes:** Uso de CSS3 para replicar os degradês icônicos do Spotify.
- **Tipografia Responsiva:** Ajuste preciso de fontes para manter o impacto visual em telas de todos os tamanhos.
- **Organização por Seções:** Divisão clara entre chamadas de marketing (Hero), recursos do serviço e rodapé informativo.

## 🛠️ Tecnologias Utilizadas

- **Bootstrap 4:** Para agilizar o desenvolvimento do grid e componentes.
- **HTML5:** Estrutura semântica para os blocos de conteúdo.
- **CSS3:** Customizações avançadas para sobrepor o estilo padrão do framework e garantir a identidade visual da marca.

## 📂 Estrutura do Projeto

```text
Projeto-8-Spotify/
├── index.html          # Estrutura principal da página
├── estilo.css          # Personalização de cores, fontes e backgrounds
└── imagens/            # Assets visuais (logotipos e capas)
```
## 🚀 Como Executar

1. Clone o repositório:
    ```Bash

    git clone [https://github.com/jaype10/Treino-Web.git](https://github.com/jaype10/Treino-Web.git)
    ```

2. Navegue até a pasta:
    ```Bash

    cd Treino-Web/Projeto-8-Spotify
    ```

3. Abra o arquivo `index.html` em seu navegador.

## 🧠 Destaque Técnico: Transparência e Camadas

Um dos pontos altos do design do Spotify é a integração da navegação com o conteúdo de fundo:
```CSS

/* Exemplo de customização da navegação transparente */
.navbar-transparente {
    background: rgba(0, 0, 0, 0.6);
    padding: 15px 0px;
}

.custom-nav-link {
    color: white !important;
    text-transform: uppercase;
    font-weight: 700;
}

.custom-nav-link:hover {
    color: #1db954 !important; /* Verde Spotify */
}
```
