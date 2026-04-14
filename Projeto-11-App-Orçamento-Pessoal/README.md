💰 App Orçamento Pessoal

    Aplicação web para gestão financeira pessoal que utiliza armazenamento local para persistência de dados e uma lógica robusta de filtragem de registros.

📌 Sobre o Projeto

O Orçamento Pessoal permite que o usuário cadastre despesas categorizadas (alimentação, educação, lazer, etc.) e visualize esses dados de forma organizada. O grande diferencial técnico aqui é a implementação de um sistema de "banco de dados" simulado no navegador.
⚙️ Funcionalidades e Conceitos Aplicados:

    Persistência com LocalStorage: Os dados não se perdem ao atualizar a página, utilizando uma camada de abstração (classe Bd) para gerenciar o JSON.

    Programação Orientada a Objetos (POO): Uso de classes JavaScript para representar Despesas e a lógica de banco de dados.

    Validação de Dados: Sistema que verifica se todos os campos obrigatórios foram preenchidos antes da gravação.

    Filtros Inteligentes: Motor de busca que permite filtrar despesas por ano, mês, dia, tipo ou descrição de forma combinada.

    Feedback Visual: Uso de Modais do Bootstrap para confirmar sucesso ou erro nas operações.

🛠 Tecnologias Utilizadas

    HTML5 & CSS3

    JavaScript ES6+: (Classes, Arrow Functions, LocalStorage, Array Methods como filter).

    Bootstrap 4: Design responsivo e componentes de interface.

    Font Awesome: Ícones para melhor experiência de usuário.

📂 Estrutura do Projeto
Plaintext

Projeto-11-App-Orçamento-Pessoal/
├── index.html          # Cadastro de novas despesas
├── consulta.html       # Visualização e filtragem de registros
├── app.js              # Lógica core (Classes Despesa e Bd)
├── estilo.css          # Ajustes finos de layout
└── (assets)            # Imagens e bibliotecas externas

🚀 Como Executar

    Clone o repositório:
    Bash

    git clone https://github.com/jaype10/Treino-Web.git

    Navegue até a pasta:
    Bash

    cd Treino-Web/Projeto-11-App-Orçamento-Pessoal

    Abra o arquivo index.html no seu navegador.

🧠 Destaque Técnico: A Lógica de Filtro

O trecho abaixo demonstra como a aplicação lida com múltiplos critérios de busca de forma elegante:
JavaScript

// Exemplo da lógica de filtragem dinâmica
pesquisar(despesa) {
    let despesasFiltradas = Array()
    despesasFiltradas = this.recuperarTodosRegistros()

    if(despesa.ano != '') {
        despesasFiltradas = despesasFiltradas.filter(d => d.ano == despesa.ano)
    }
    // ... repete para os demais campos
    return despesasFiltradas
}
