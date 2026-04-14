# 💻 Tecblog - Blog de Tecnologia

> Um projeto de blog institucional desenvolvido para praticar a estruturação de layouts complexos, organização de conteúdo em colunas e estilização de interfaces ricas em texto.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

## 📌 Sobre o Projeto

O **Tecblog** simula um portal de notícias de tecnologia. O desafio principal deste projeto foi a criação de um layout com "sidebar" (barra lateral) e área de conteúdo principal, garantindo que ambos se alinhem corretamente e mantenham a fluidez visual. 

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Layout de Duas Colunas:** Implementação de uma estrutura clássica com área de postagens e barra lateral para navegação/links extras.
- **Normalização de Estilos:** Prática de "reset" de CSS para garantir consistência entre diferentes navegadores.
- **Estilização de Menus:** Criação de uma barra de navegação horizontal com efeitos de interação.
- **Hierarquia de Texto:** Organização de títulos, subtítulos e parágrafos para maximizar a legibilidade de artigos longos.

## 🛠️ Tecnologias Utilizadas

- **HTML5:** Para a marcação estrutural e semântica do blog.
- **CSS3:** Para o gerenciamento de cores, bordas, fontes e o posicionamento dos blocos de conteúdo.

## 📂 Estrutura do Projeto

```text
Projeto-3-Tecblog/
├── index.html          # Estrutura principal do blog
├── estilo.css          # Folha de estilo com definições de layout
└── imagens/            # Assets visuais e capas dos posts
```
## 🚀 Como Executar

1. Clone o repositório:
    ```Bash

    git clone [https://github.com/jaype10/Treino-Web.git](https://github.com/jaype10/Treino-Web.git)
    ```

2. Navegue até a pasta:
    ```Bash

    cd Treino-Web/Projeto-3-Tecblog
    ```

   3. Abra o arquivo `index.html` em seu navegador.

## 🧠 Destaque Técnico: Organização de Layout

O Tecblog utiliza uma técnica de centralização e divisão de áreas que é a base para muitos sites modernos:
```CSS

/* Exemplo de estrutura de colunas */
#conteudo-principal {
    width: 660px;
    float: left;
}

#barra-lateral {
    width: 240px;
    float: right;
}

.postagem {
    padding: 20px;
    margin-bottom: 20px;
    background: white;
}
```
