# 🎌 Classificação de Animes

> Uma aplicação web interativa para listagem e filtragem de animes, focada em organização de conteúdo, manipulação de arrays e interface responsiva.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)

## 📌 Sobre o Projeto

O **Projeto 22** é uma plataforma de exibição de animes onde o usuário pode visualizar títulos, notas e descrições. O foco técnico aqui é a capacidade de renderizar componentes de interface de forma organizada a partir de uma base de dados (ou estrutura de objetos) e permitir que o usuário navegue entre diferentes classificações.

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Renderização de Listas:** Organização de elementos em grid para uma visualização clara e moderna.
- **Categorização de Dados:** Separação de títulos por gênero ou nota, facilitando a busca por conteúdos específicos.
- **Interface Visual Dinâmica:** Uso de CSS para criar cards atraentes, com foco em imagens de capa e tipografia legível.
- **Responsividade:** Layout adaptável para que a lista de animes possa ser consultada tanto em desktops quanto em dispositivos móveis.

## 🛠️ Tecnologias Utilizadas

- **HTML5:** Estrutura semântica para os cards e seções.
- **CSS3:** Estilização avançada, utilizando Flexbox ou Grid para o posicionamento dos animes.
- **JavaScript (Vanilla):** Lógica para manipulação de exibição e interatividade básica.

## 📂 Estrutura do Projeto

```text
Projeto-22-Classificacao-de-Animes/
├── index.html          # Página principal com a galeria de animes
├── estilo.css          # Estilizações, animações de hover e grid
└── (assets/imagens)    # Capas e ícones utilizados no projeto
```
## 🚀 Como Executar

1. Clone o repositório:
    ```Bash

    git clone [https://github.com/jaype10/Treino-Web.git](https://github.com/jaype10/Treino-Web.git)
    ```

2. Navegue até a pasta:
    ```Bash

    cd Treino-Web/Projeto-22-Classificacao-de-Animes
    ```

3. Abra o arquivo `index.html` em seu navegador.

## 🧠 Destaque Técnico: Organização de Componentes

Neste projeto, a atenção foi voltada para a criação de uma interface limpa onde o conteúdo é o protagonista. A estrutura de cards permite que a aplicação seja facilmente escalável para consumir dados de uma API externa no futuro.
```HTML

<div class="anime-card">
    <img src="capa-do-anime.jpg" alt="Nome do Anime">
    <div class="info">
        <h3>Nome do Anime</h3>
        <span class="nota">⭐⭐⭐⭐⭐</span>
        <p>Breve sinopse sobre a obra...</p>
    </div>
</div>
```
