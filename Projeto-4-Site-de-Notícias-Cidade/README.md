# 📰 Site de Notícias Cidade

> Um portal de notícias institucional desenvolvido para explorar layouts complexos de múltiplas colunas, técnicas avançadas de posicionamento CSS e organização de conteúdo em larga escala.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

## 📌 Sobre o Projeto

O **Notícias Cidade** simula um jornal digital completo. O desafio técnico aqui foi gerenciar um layout de três colunas, garantindo que o conteúdo principal fosse o destaque, enquanto as colunas laterais serviam para navegação, destaques e mídias. Foi um exercício fundamental de **Box Model** e controle de fluxos (`floats` e `clears`).

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Layout de Três Colunas:** Estruturação avançada com uma coluna lateral esquerda (navegação), coluna central (notícias principais) e coluna lateral direita (entrevistas/vídeos).
- **Componentização de Blocos:** Criação de classes CSS reutilizáveis para "caixas" de notícias, garantindo um padrão visual em todo o site.
- **Navegação Temática:** Menu estilizado para diferentes editorias (Brasil, Mundo, Economia, etc.).
- **Gestão de Imagens e Texto:** Equilíbrio entre mídias visuais e conteúdo textual para manter o portal escaneável para o leitor.

## 🛠️ Tecnologias Utilizadas

- **HTML5:** Estrutura semântica para cabeçalhos, colunas e áreas de conteúdo.
- **CSS3:** Gerenciamento de cores, bordas personalizadas, tipografia e o complexo sistema de posicionamento das colunas.

## 📂 Estrutura do Projeto

```text
Projeto-4-Site-de-Notícias-Cidade/
├── index.html          # Página principal (Home)
├── brasil.html         # Editoria nacional
├── mundo.html          # Editoria internacional
├── estilo.css          # Lógica de layout e design visual
└── imagens/            # Assets de notícias e ilustrações
```
## 🚀 Como Executar

1. Clone o repositório:
    ```Bash

    git clone [https://github.com/jaype10/Treino-Web.git](https://github.com/jaype10/Treino-Web.git)
    ```

2. Navegue até a pasta:
    ```Bash

    cd Treino-Web/Projeto-4-Site-de-Notícias-Cidade
    ```

3. Abra o arquivo `index.html` em seu navegador.

## 🧠 Destaque Técnico: Controle de Colunas

O segredo deste projeto está na precisão matemática do CSS para manter as três colunas alinhadas dentro do container principal:
```CSS

/* Estrutura simplificada do layout de 3 colunas */
#container { width: 750px; margin: 0 auto; }

#lateral { width: 180px; float: left; }

#primario { width: 270px; float: left; margin: 0 0 0 5px; }

#secundario { width: 270px; float: left; margin: 0 0 0 5px; }

/* Técnica para limpar o float e manter o rodapé no lugar */
#rodape { clear: both; padding: 10px; background: #fff; }
```
