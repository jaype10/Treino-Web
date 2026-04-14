🦟 Game Mata-Mosquito

    Um jogo de agilidade desenvolvido em JavaScript puro que explora a manipulação dinâmica do DOM, controle de tempo e eventos de redimensionamento de janela.
---
📌 Sobre o Projeto

Este projeto faz parte do meu aprendizado em desenvolvimento web e foca na criação de uma engine de jogo simples rodando diretamente no navegador. O objetivo do jogador é eliminar os mosquitos que surgem aleatoriamente na tela antes que o tempo se esgote ou que ele perca suas 3 vidas.

---
🕹️ Mecânicas Implementadas:

    Cálculo de Área Dinâmica: O jogo detecta o tamanho da janela em tempo real para garantir que os elementos surjam apenas dentro da área visível.

    Níveis de Dificuldade: Ajuste da velocidade de spawn (Normal, Difícil e Chuck Norris).

    Sistema de Vidas: Controle de estado através da troca dinâmica de imagens de corações (cheio vs. vazio).

    Cronômetro de Vitória: Sistema de contagem regressiva que define a condição de vitória do jogador.

---

🛠️ Tecnologias Utilizadas

    HTML5 & CSS3: Estruturação e estilização visual.

    JavaScript (Vanilla): Toda a lógica do jogo, timers (setInterval) e manipulação de classes CSS.

    Bootstrap 4: Utilizado para agilizar o layout responsivo e componentes de interface.

---

📂 Estrutura de Arquivos
Plaintext

Projeto-10-AppGame-MataMosquito/
├── index.html          # Tela inicial com seleção de dificuldade
├── app.html            # Palco principal do jogo
├── jogo.js             # Engine principal (lógica de spawn, colisões e vidas)
├── estilo.css          # Estilizações customizadas e animações (espelhamento)
├── vitoria.html        # Feedback de fim de jogo positivo
└── game_over.html      # Feedback de fim de jogo negativo

---

🚀 Como Executar

    Clone o repositório:
    Bash

    git clone https://github.com/jaype10/Treino-Web.git

    Navegue até a pasta:
    Bash

    cd Treino-Web/Projeto-10-AppGame-MataMosquito

    Abra o arquivo index.html em seu navegador de preferência.

---

🧠 Lógica Destacada

No arquivo jogo.js, o destaque vai para a função de posicionamento randômico, que evita que o elemento seja criado fora das bordas da tela devido ao seu próprio tamanho:
JavaScript

var posicaoX = Math.floor(Math.random() * largura) - 90
var posicaoY = Math.floor(Math.random() * altura) - 90

posicaoX = posicaoX < 0 ? 0 : posicaoX
posicaoY = posicaoY < 0 ? 0 : posicaoY
