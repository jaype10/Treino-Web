# 🏛️ Museu Nacional - Site Institucional

> Um projeto focado na estruturação de um portal cultural, explorando técnicas de layout fluído, estilização de menus verticais e organização de conteúdo multimídia.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

## 📌 Sobre o Projeto

O site do **Museu Nacional** foi desenvolvido para consolidar o conhecimento em layouts que utilizam áreas de navegação lateral e áreas de conteúdo dinâmico. O desafio principal foi criar uma interface que parecesse institucional e confiável, utilizando uma paleta de cores sóbria e uma tipografia clássica, além de gerenciar elementos como mapas e calendários de eventos.

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Layout Fluído:** Uso de larguras em porcentagem ou containers flexíveis para garantir que a estrutura se comporte bem em diferentes resoluções.
- **Menu de Navegação Vertical:** Implementação de uma barra lateral de navegação com estados de interação (hover) e estilização de listas.
- **Organização de Seções:** Separação clara entre "Exposições", "Pesquisa" e "Acervo", utilizando técnicas de agrupamento de elementos (divs).
- **Estilização de Formulários e Botões:** Criação de componentes de interface consistentes com a identidade visual do museu.

## 🛠️ Tecnologias Utilizadas

- **HTML5:** Marcação estrutural para garantir a hierarquia da informação.
- **CSS3:** Posicionamento, estilização de fontes, bordas e gerenciamento de backgrounds.

## 📂 Estrutura do Projeto

```text
Projeto-6-Museu-Nacional/
├── index.html          # Página inicial com destaques
├── estilo.css          # Regras de layout e design visual
└── imagens/            # Assets de exposições e acervo
```
## 🚀 Como Executar

1. Clone o repositório:
    ```Bash

    git clone [https://github.com/jaype10/Treino-Web.git](https://github.com/jaype10/Treino-Web.git)
    ```

2. Navegue até a pasta:
    ```Bash

    cd Treino-Web/Projeto-6-Museu-Nacional
    ```

3. Abra o arquivo `index.html` em seu navegador.

## 🧠 Destaque Técnico: Navegação Lateral Estilizada

Diferente dos projetos anteriores com menus horizontais, este projeto foca na usabilidade de menus verticais, comuns em portais com muitas categorias:
```CSS

/* Exemplo de estilização do menu lateral */
nav ul {
    list-style: none;
    padding: 0;
}

nav ul li a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: #726d5d;
    border-bottom: 1px solid #e8e8e8;
}

nav ul li a:hover {
    background: #f3f3f3;
    color: #b9c54e;
}
```
