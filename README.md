*** Correçã - Instruções para o projeto 1 da aula - git ***

**1)CONFIGURAÇÕES PARA O REPOSITORIO LOCAL:**

Criei uma pasta para o meu projeto no pc local com o nome de: "aula_git". Entrei na pasta e usei os seguintes comandos:

a) git config --global user.name "Raphael Ribeiro Gomes"

b) git config --global user.email "raphaelribe@gmail.com"

c) git config --global ui.color TRUE

d) git config --global --list

obs: meu repositório está todo configurado com os comandos listados acima

**2) PROCESSO DE CRIAÇÃO DOS PRIMEIROS ARQUIVOS**

Após a configuração do meu repositorio local, criei quatro arquivos.php com o comando touch. Usei o seguinte comando para adicionar os cinco arquivos de uma vez na "staging area". Após adicionar esses arquivos, visualizei o status do git e fiz um comit de cada arquivos. Segue abaixo o comando utilizados nesta etapa do item 2:

a) git add index.php produtos.php quemsomos.php contato.php menu.php

B) git status

b) git commit -m "" --> feito em cada arquivo que criei

c) git log --> visualizei os commits que fiz


**3) DEFINIÇÃO DE BRANCH PARA O PROJETO:**

Precisei criar uma branch para o meu projeto e incluir alterações em todos os arquivos. Segue os comandos para tal procedimento:

a) git checkout -b "script" 

b) git checkout script --> Após a criação dessa bransh "script" acessei essa branch para criar o arquivo "menu.php"

c) git add menu.php

d) git commit -m ""


**4) USANDO O MERGE:**

Finalizado o meu arquivo menu.php, que teria um menu dos links para acesso as outras páginas, abri cada arquivo para inserir um include do arquivo: "menu.php", depois comitei todos e fiz um merge da branch script para a master. Segue os comandos:

a) commit -m "Inserindo menu.php" --> Inseri o comando do php:include_once no arquivo: "menu.php" e depois comitei todos.

b) git checkout master 

c) git merge script --> Na branch master fiz um merge da branch: "script" 


**5) PUBLICANDO PROJETO NO REPOSITÓRIO GITHUB --> raphaelribe:**

Criei uma chave privada para enviar meu projeto para o github e depois fiz um push. Segue os comandos para tais procedimentos:

a) ssh-keygen -t rsa -C "raphaelribe@gmail" --> Gerei a minha chave.

b) clip < ~/.ssh/id_rsa.pub --> Copiei a chave pública com esse comando e depois colei no github.com/raphaelribe, em opções do key-gen

c) git push origin master --> Enviei todo o meu projeto para o repositório, tudo ok.


**TESTE) AMBIENTE DE TESTE**

Somente para testes e treinos, criei um outro usuario no github com um email alternativo> "raphaelrgomes". Na minha conta: "raphaelribe" inseri o usuario: "raphaelrgomes" como colaborador. Segue os comandos testados:

a) git clone https://github.com/raphaelribe --> Clonei esse repositório no novo usuário criado: raphaelrgomes.ucb@gmail.com

b) git commit -m "Alterando o arquivo " --> b) Alterei um arquivo no meu projeto com esse usuário colaborador.

c) git blame arquivo --> Com esse arquivo visualizei as pessoas que fizeram alterações no arquivo. Visualizei que última alteração foi realizada pelo novo usuário: raphaelrgomes

d) git push origin master 
