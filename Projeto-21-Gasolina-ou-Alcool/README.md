# ⛽ App Gasolina ou Álcool

> Uma calculadora utilitária desenvolvida para dispositivos móveis que auxilia na escolha do combustível mais vantajoso economicamente, baseando-se na relação de eficiência de 70% entre o álcool e a gasolina.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![Mobile First](https://img.shields.io/badge/Design-Mobile--First-green?style=for-the-badge)

## 📌 Sobre o Projeto

O **Projeto 21** é uma aplicação web voltada para o uso mobile que resolve um dilema comum em postos de combustível. A aplicação recebe os preços de ambos os combustíveis e, através de um cálculo matemático, indica qual deles oferece o melhor custo-benefício no momento.

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Lógica Condicional:** Implementação da regra de negócio: `Preço do Álcool / Preço da Gasolina`. Se o resultado for >= 0.7, a gasolina é mais vantajosa.
- **Design Responsivo (Mobile-First):** Interface otimizada para telas pequenas, garantindo usabilidade rápida "na ponta dos dedos" durante o abastecimento.
- **Manipulação de DOM:** Captura de valores de inputs e atualização dinâmica do resultado na tela sem refresh.
- **Sanitização de Dados:** Tratamento de strings e conversão para números flutuantes (`parseFloat`) para garantir cálculos precisos.

## 🛠️ Tecnologias Utilizadas

- **HTML5:** Estrutura de formulário simples e eficiente.
- **CSS3:** Estilização focada em legibilidade e botões de fácil clique em telas touch.
- **JavaScript (Vanilla):** Motor de cálculo e lógica de exibição de resultados.

## 📂 Estrutura do Projeto

```text
Projeto-21-Gasolina-ou-Alcool/
├── index.html          # Interface do usuário (Inputs e Botões)
├── estilo.css          # Layout mobile-first e estilização visual
└── script.js           # Lógica de cálculo e validação
```
## 🚀 Como Executar

1. Clone o repositório:
    ```Bash

    git clone [https://github.com/jaype10/Treino-Web.git](https://github.com/jaype10/Treino-Web.git)
    ```

2. Navegue até a pasta:
    ```Bash

    cd Treino-Web/Projeto-21-Gasolina-ou-Alcool
    ```

3. Abra o arquivo index.html em seu navegador ou emule uma visualização de dispositivo móvel (F12 > Toggle Device Toolbar).

## 🧠 Destaque Técnico: A Regra dos 70%

O código traduz uma fórmula matemática de mercado para uma experiência de usuário simplificada:
```JavaScript

function calcularMelhorPreco() {
    let precoAlcool = document.getElementById('alcool').value
    let precoGasolina = document.getElementById('gasolina').value

    if (precoAlcool != '' && precoGasolina != '') {
        let resultado = precoAlcool / precoGasolina

        if (resultado >= 0.7) {
            document.getElementById('resultado').innerHTML = "Melhor utilizar Gasolina"
        } else {
            document.getElementById('resultado').innerHTML = "Melhor utilizar Álcool"
        }
    }
}
``
