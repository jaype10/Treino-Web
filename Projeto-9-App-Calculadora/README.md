# 🧮 Calculadora Funcional (JavaScript)

> Um aplicativo de calculadora totalmente funcional desenvolvido com JavaScript puro, focado em lógica de programação, manipulação de DOM e tratamento de expressões matemáticas.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)

## 📌 Sobre o Projeto

O **Projeto 9** é um exercício fundamental de interatividade. O objetivo foi criar uma interface que se comporte exatamente como uma calculadora física, lidando com a entrada sequencial de números, seleção de operadores e a entrega do resultado final por meio da função `eval()` do JavaScript, garantindo precisão e agilidade.

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Captura de Eventos:** Uso de ouvintes de eventos para identificar cliques em números e operadores.
- **Lógica de Concatenação:** Gerenciamento de strings para formar os números e expressões dentro do visor da calculadora.
- **Processamento de Expressões:** Utilização de lógica condicional para distinguir entre comandos de ação (como limpar o visor) e comandos de cálculo.
- **Design de Interface:** Layout organizado utilizando tabelas ou flexbox para replicar o design padrão de calculadoras modernas.

## 🛠️ Tecnologias Utilizadas

- **HTML5:** Estrutura do visor e dos botões.
- **CSS3:** Estilização visual para criar profundidade nos botões e clareza no visor de resultados.
- **JavaScript (Vanilla):** O "cérebro" da aplicação, responsável por toda a lógica de cálculo.

## 📂 Estrutura do Projeto

```text
Projeto-9-App-Calculadora/
├── index.html          # Estrutura dos botões e visor
├── estilo.css          # Design e posicionamento dos elementos
└── (script interno)    # Lógica JavaScript integrada ou externa
```
## 🚀 Como Executar

1. Clone o repositório:
    ```Bash

    git clone [https://github.com/jaype10/Treino-Web.git](https://github.com/jaype10/Treino-Web.git)
    ```

2. Navegue até a pasta:
    ```Bash

    cd Treino-Web/Projeto-9-App-Calculadora
    ```

3. Abra o arquivo `index.html` em seu navegador.

## 🧠 Destaque Técnico: Lógica de Operação

A calculadora utiliza uma função centralizada para processar as entradas, diferenciando números de operadores e executando a lógica de cálculo apenas quando solicitado:
```JavaScript

function calcular(tipo, valor) {
    if (tipo === 'acao') {
        if (valor === 'c') {
            document.getElementById('resultado').value = '' // Limpar visor
        }
        if (valor === '+' || valor === '-' || valor === '*' || valor === '/' || valor === '.') {
            document.getElementById('resultado').value += valor
        }
        if (valor === '=') {
            var valor_campo = eval(document.getElementById('resultado').value)
            document.getElementById('resultado').value = valor_campo
        }
    } else if (tipo === 'valor') {
        document.getElementById('resultado').value += valor
    }
}
```
