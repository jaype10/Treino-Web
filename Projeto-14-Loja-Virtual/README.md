# 🛒 Projeto Loja Virtual (Consumo de API/JSON)

> Uma vitrine virtual dinâmica que utiliza PHP e AJAX para carregar conteúdos e detalhes de produtos sem a necessidade de recarregar a página.

![GitHub repo size](https://img.shields.io/github/repo-size/jaype10/Treino-Web?style=for-the-badge)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![AJAX](https://img.shields.io/badge/Library-AJAX-blue?style=for-the-badge)

## 📌 Sobre o Projeto

A **Loja Virtual** foca na experiência do usuário (UX) ao implementar a navegação assíncrona. Em vez de múltiplas páginas HTML estáticas, o projeto utiliza um motor de carregamento que busca informações no servidor e as injeta dinamicamente no DOM.

### ⚙️ Funcionalidades e Conceitos Aplicados:
- **Requisições Assíncronas (AJAX):** Uso do objeto `XMLHttpRequest` ou `Fetch` para carregar seções da loja (Home, Carrinho, Detalhes do Produto) de forma instantânea.
- **Backend como Provedor de Dados:** Scripts PHP que processam solicitações e devolvem fragmentos de HTML ou dados necessários para a interface.
- **Manipulação de DOM:** Atualização dinâmica de containers específicos (`divs`) baseada na interação do usuário.
- **Interface Responsiva:** Layout adaptável para diferentes dispositivos utilizando o grid do Bootstrap.

## 🛠️ Tecnologias Utilizadas

- **PHP 8+** para lógica de servidor.
- **JavaScript (Vanilla/AJAX)** para comportamento assíncrono.
- **Bootstrap 4** para estilização e componentes de UI.
- **CSS3** para efeitos de hover e transições.

## 📂 Estrutura do Projeto

```text
Projeto-14-Loja-Virtual/
├── index.php               # Estrutura principal (Shell da aplicação)
├── home.php                # Fragmento da vitrine de produtos
├── ajuda.php               # Seção de suporte ao cliente
├── carrinho.php            # Gerenciamento de itens selecionados
└── js/                     # Scripts de controle de navegação AJAX
```
## 🚀 Como Executar

Por depender de processamento PHP para o carregamento dos fragmentos, é necessário um ambiente de servidor local.

1. Clone o repositório:
```Bash

    git clone [https://github.com/jaype10/Treino-Web.git](https://github.com/jaype10/Treino-Web.git)
```

2. Navegue até a pasta:
```Bash

    cd Treino-Web/Projeto-14-Loja-Virtual
```

3. Inicie o servidor embutido do PHP:
```Bash

    php -S localhost:8080
```

4. Acesse `http://localhost:8080` no seu navegador.

## 🧠 Destaque Técnico: Navegação sem Refresh

O coração deste projeto é a função que gerencia a troca de conteúdo sem interromper a sessão do usuário ou recarregar recursos desnecessários:
```JavaScript

// Exemplo conceitual da lógica AJAX utilizada
function carregarPagina(url) {
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open('GET', url);

    xmlHttp.onreadystatechange = () => {
        if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
            document.getElementById('container-principal').innerHTML = xmlHttp.responseText;
        }
    }
    xmlHttp.send();
}
``
