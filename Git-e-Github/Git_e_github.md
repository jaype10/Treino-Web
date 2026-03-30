# Controle de versão com Git & Conceitos importantes

## O que é um controle de versão?
É uma técnica que nos permite salvar os diferentes estágios do código, o que torna fácil alternar entre versões.

## E onde o Git entra?
É uma ferramenta para trabalhar com controle de versão.
- Git
- SVN (existem outras ferramentas de controle de versão porém o git corrigiu os problemas do SVN)

## O que é o GIT?
É o sistema de controle de versão mais **utilizado do mundo** atualmente.
- Desempenho
  - operações otimizadas para ter alto desempenho.
- Segurança
  - Todos os objetos do git são protegidos como criptografia
- Código aberto
  - É um projeto de código aberto

## Git é a mesma coisa que GITHUB?
Não, **Github** e similares como **Gitlab** e **Bitbucket**, são provedores que usam o git, fornecendo uma interface visual, além de armazenamento na nuvem para os projetos.
- Git = É como se fosse o motor de um carro
- Github, Gitlab,Bitbucket = É como se fosse o restante do carro.

## Como trabalhar com o GIT?
Antes de começarmos a trabalhar com o GIT é importante conhecer algumas coisas:
- Repositório
  É onde o código será armazenado, normalmente um repositório(repo) está associado a um projeto
- Adicionar arquivos
- Commit
- Push / Pull
- branch

## O que é um Branch?
Os repositórios utilizam branch(ramificações) para criar "ramos" de desenvolvimento.
Nessas ramificações podemos criar diferentes recursos que depois serão mesclados.

## Comandos básicos para terminal
Saber como utilizar alguns comandos básicos para o terminal é bem importante, veja alguns:
- cd(Change Directory) -> Muda o local do diretório atual, para isso utilize: `cd <caminho>`
- ls(list) -> Lista o que está dentro do diretório. ex:`ls -al //(lista arquivos ocultos)`
- clear(limpar) -> Limpa o terminal (no windows,powershell ou cmd, é `cls`)

## Como criar um repositório
Criando um repositório o git irá gerar alguns arquivos necessários que ficarão em uma pasta oculta chamada **.git**

### Comandos GIT
`git init` 
Verifique o status usando: `git status`

Utilize o `git add <file>` para incluir o que será commitado, pode usar também o `git add *` ou `git add .` para adicionar todos os arquivos.

O comando `git remote add <nome> <remote-url>` serve para adicionar um repositório destino, sincronizando com o seu projeto.

O comando `git commit` "comitará/salvará" o código 
`git commit -m 'exemplo de mensagem'` o *-m* significa que o commit conterá uma mensagem. Útil para informar alterações.

## Configurando Chave SSH
O Secure Shell Protocol (SSH) é um protocolo de rede criptográfica para operar serviços de rede como segurança em uma rede não segura.

### Procurando chaves SSH existentes
1. Abra o terminal
2. Digite `ls -al ~/.ssh` para ver se existem chaves SSH
  ```bash
  ls -al ~/.ssh 
  # Lista se existem arquivos **dentro** da sua pasta .ssh
  ```
3. Cheque se o seu diretório está mostrando alguma chave **publica**. Por padrão os nomes de chaves são:
  - *id_rsa.pub*
  - *id_ecdsa.pub*
  - *id_ed25519.pub*
**Dica:** Se você receber um erro que o **~/.ssh** não existe, então não existem chaves SSH no diretório padrão.

### Gerando uma nova chave SSH
1. No terminal, cole o texto abaixo, substituindo pelo seu email.
```bash
  ssh-keygen -t ed25519 -C "SEU-EMAIL@EXEMPLO.com"
```
**Nota:** Ao gerar sua ssh-keygen não é obrigatório o uso de senha, mas é **Recomendado**.

### Adicionando a nova chave SSH a sua conta no Github
1. Copie sua chave SSH **publica** 
Windows (git bash):
```bash
  clip < ~/.ssh/id_ed25519.pub
  # Copia o conteúdo do seu arquivo *id_ed25519.pub
```
Linux:
```bash
  cat ~/.ssh/id_ed25519.pub
  # Depois de mostrar o conteúdo da chave publica, selecione e copie(CTRL + SHIFT + C)
```
2. No site do Github vá em Configurações(settings) e procure por "Chaves SSH e GPG"(*SSH and GPG keys*)
3. Clique em nova chave SSH (*New SSH key*)
4. Dê um nome a sua chave e cole o conteúdo de sua chave SSH publica.

## Clonando projeto com o GIT
Clonar o projeto com o git é você trazer o projeto do repositório para a sua máquina. Para clonar o projeto, você **não** pode telo em sua maquina, é como se você trouxesse o backup na nuvem para a memória do seu computador.
```bash
  git clone git@github:<endereço-do-repositorio-github>/<arquivo>.git

  # Ou caso você queira apenas clonar os arquivos sem que crie uma pasta.
  git clone git@github:<endereço-do-repositorio-github>/<arquivo>.git .
```
**Nota:** você não precisa utilizar o comando `git init` quando está clonando um projeto.
**Nota:** não se esqueça de navegar até a pasta que você quer que o projeto fique ex: `cd ~/Documentos/`

## Subindo alterações para o Github
Ele sincroniza o projeto na sua maquina com o repositório, **atualizando o ultimo**.
Com o `git push` (empurrar) você consegue subir as alterações do seu computador para o Github.
Você também pode especificar a branch com o complemento: `git push -u <remote> <branch>`

## Baixando alterações do projeto com Git Pull
Com o `git pull` (puxar) você consegue baixar alterações qeu podem ter acontecido no projeto, para que você trabalhe co o projeto atualizado.

## Sincronizando projeto com o Github
Resumo de comandos partindo da ideia de que você vai passar o projeto do seu computador para um repositório limpo.
```bash
  git init
  git add . # ou git add *
  git commit -m "<mensagem>"
  git branch -M main
  git remote add origin '<origem do repo>'
  git push -u origin main
```
