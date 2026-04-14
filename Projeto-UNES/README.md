# 🎓 UNES - Site Universitário (HTML Base)

> Um projeto fundamental focado exclusivamente na estruturação semântica de páginas web utilizando HTML5, tabelas para layout e organização de conteúdo institucional.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![Status](https://img.shields.io/badge/Status-Concluído-success?style=for-the-badge)

## 📌 Sobre o Projeto

O **UNES** é um site institucional para uma universidade fictícia. O objetivo central deste projeto foi dominar a marcação HTML sem depender de CSS externo para o layout principal, utilizando o sistema de tabelas (`table`, `tr`, `td`) para organizar cabeçalhos, menus, áreas de conteúdo e rodapés.

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Estruturação por Tabelas:** Uso de tabelas para criar o esqueleto do site, controlando larguras e alinhamentos diretamente nos atributos HTML.
- **Navegação entre Páginas:** Implementação de links internos para conectar as seções de Home, Quem Somos e Contato.
- **Mídias e Conteúdo:** Inserção e formatação básica de imagens, listas (`ul`/`li`) e textos informativos.
- **Formulários Básicos:** Criação de campos de entrada para simular uma área de contato ou interesse.

## 🛠️ Tecnologias Utilizadas

- **HTML5:** Utilizado para toda a estrutura e conteúdo, focando na compreensão das tags fundamentais antes da introdução ao CSS avançado.

## 📂 Estrutura do Projeto

```text
Projeto-UNES/
├── index.html          # Página principal (Home)
├── quem-somos.html     # Página institucional
├── contato.html        # Página de contato com formulário
└── imagens/            # Assets visuais (logo e banners)
```
## 🚀 Como Executar

Por ser um projeto puramente estático em HTML, não requer instalação de dependências ou servidores.

1. Clone o repositório:
    ```Bash

    git clone [https://github.com/jaype10/Treino-Web.git](https://github.com/jaype10/Treino-Web.git)
    ```

2. Navegue até a pasta:
    ```Bash

    cd Treino-Web/Projeto-UNES
    ```

3. Abra o arquivo `index.html` diretamente em qualquer navegador.

## 🧠 Destaque Técnico: O Alicerce da Web

Trabalhar com layouts baseados em tabelas é um excelente exercício para entender como o navegador calcula espaços e hierarquias de elementos:
```HTML

<table border="0" width="900" align="center">
    <tr>
        <td height="89"><img src="imagens/logo.png"></td>
        <td align="right">
            <a href="index.html">Home</a> | 
            <a href="quem-somos.html">Quem somos</a> | 
            <a href="contato.html">Contato</a>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <h2>Sobre a universidade</h2>
            <p>Conteúdo institucional aqui...</p>
        </td>
    </tr>
</table>
```
