# 📍 App Pesquisa de Endereço (ViaCEP API)

> Aplicação front-end que utiliza requisições assíncronas (AJAX) para consumir a API pública ViaCEP, realizando a busca automática de logradouros a partir de um CEP.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![AJAX](https://img.shields.io/badge/Tecnologia-AJAX-blue?style=for-the-badge)
![API](https://img.shields.io/badge/API-ViaCEP-orange?style=for-the-badge)

## 📌 Sobre o Projeto

Este projeto demonstra a capacidade de integrar serviços de terceiros em uma aplicação web. Ao digitar um CEP válido, o sistema preenche automaticamente os campos de endereço (rua, bairro, cidade e estado), melhorando a experiência do usuário e evitando erros de digitação.

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Consumo de API REST:** Uso de AJAX para realizar chamadas `GET` ao endpoint da ViaCEP.
- **Manipulação de JSON:** Tratamento da resposta da API (objeto JSON) para extrair e injetar dados em campos específicos do formulário.
- **Eventos de Input:** Gatilho de busca acionado assim que o campo de CEP perde o foco (`onblur`).
- **UX (User Experience):** Automatização de preenchimento, reduzindo o tempo de interação do usuário com formulários de cadastro.

## 🛠️ Tecnologias Utilizadas

- **HTML5 & CSS3:** Estrutura e estilização.
- **JavaScript (Vanilla AJAX):** Lógica de comunicação com o serviço externo.
- **Bootstrap 4:** Layout responsivo e alinhamento de formulários.

## 📂 Por que apenas um arquivo?

Ao contrário de aplicações que dependem de um backend próprio (como PHP), este projeto funciona como um **Consumer de API**. Toda a lógica reside no lado do cliente (browser), que faz a requisição diretamente para o servidor da ViaCEP e atualiza o DOM sem a necessidade de processamento local ou recarregamento de página.

## 🚀 Como Executar

Por ser um projeto puramente front-end, você pode executá-lo diretamente:

1. Clone o repositório:
   ```bash
   git clone [https://github.com/jaype10/Treino-Web.git](https://github.com/jaype10/Treino-Web.git)
   ```
2. Navegue até a pasta:
    ```Bash

    cd Treino-Web/Projeto-15-App-Pesquisa-Endereço
    ```

3. Abra o arquivo `index.html` em qualquer navegador moderno.

## 🧠 Destaque Técnico: A Requisição AJAX

O trecho abaixo destaca como o JavaScript gerencia a comunicação com a API externa:
```JavaScript

function getDadosEnderecoPorCEP(cep) {
    let url = '[https://viacep.com.br/ws/](https://viacep.com.br/ws/)' + cep + '/json/'
    let xmlHttp = new XMLHttpRequest()
    xmlHttp.open('GET', url)

    xmlHttp.onreadystatechange = () => {
        if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
            let dadosJSONText = xmlHttp.responseText
            let dadosJSONObj = JSON.parse(dadosJSONText)

            document.getElementById('endereco').value = dadosJSONObj.logradouro
            // ... preenchimento dos demais campos
        }
    }
    xmlHttp.send()
}
```
