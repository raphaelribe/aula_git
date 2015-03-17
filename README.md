 Corre��o em 08/03/2015 - Instru��es para o projeto 1 da aula - git

- - -

**1)CONFIGURA��ES PARA O REPOSITORIO LOCAL:**

Criei uma pasta para o meu projeto no pc local com o nome de: "aula_git". Entrei na pasta e usei os seguintes comandos:

a) git config --global user.name "Raphael Ribeiro Gomes"

b) git config --global user.email "raphaelribe@gmail.com"

c) git config --global ui.color TRUE

d) git config --global --list

obs: meu reposit�rio est� todo configurado com os comandos listados acima

**2) PROCESSO DE CRIA��O DOS PRIMEIROS ARQUIVOS:**

Ap�s a configura��o do meu repositorio local, criei quatro arquivos.php com o comando touch. Usei o seguinte comando para adicionar os cinco arquivos de uma vez na "staging area". Ap�s adicionar esses arquivos, visualizei o status do git e fiz um comit de cada arquivos. Segue abaixo o comando utilizados nesta etapa do item 2:

a) git add index.php produtos.php quemsomos.php contato.php menu.php

b) git status

c) git commit -m "" --> feito em cada arquivo que criei

d) git log --> visualizei os commits que fiz


**3) DEFINI��O DE BRANCH PARA O PROJETO:**

Precisei criar uma branch para o meu projeto e incluir altera��es em todos os arquivos. Segue os comandos:

a) git checkout -b "script" 

b) git checkout script --> Ap�s a cria��o dessa branch "script" fiz um acesso nela com esse comando.

c) git add menu.php

d) git commit -m "MENSAGEM"


**4) USANDO O MERGE:**

Finalizado o meu arquivo menu.php, que teria um menu dos links para acesso as outras p�ginas, alterei cada arquivo para inserir um include do arquivo: "menu.php", depois comitei todos e fiz um merge da branch script para a master. Segue os comandos:

a) commit -m "Inserindo menu.php" --> Inseri o comando do php =include_once no arquivo: "menu.php" e depois comitei todos.

b) git checkout master 

c) git merge script --> Na branch master fiz um merge da branch: "script" 


**5) PUBLICANDO PROJETO NO REPOSIT�RIO GITHUB --> https://github/raphaelribe :**

Criei uma chave privada para enviar meu projeto para o github e depois fiz um push. Segue os comandos para tais procedimentos:

a) ssh-keygen -t rsa -C "raphaelribe@gmail" --> Gerei a minha chave.

b) clip < ~/.ssh/id_rsa.pub --> Copiei a chave p�blica com esse comando e depois colei no github.com/raphaelribe, em op��es do key-gen

c) git push origin master --> Enviei todo o meu projeto para o reposit�rio, tudo ok.

**6) Inserindo 1 release do projeto

a)alterei todos os arquivos da p�gina, inserindo um texto em cada:
git add --> fiz esse comando para adicionar todos os meus arquivos no 2 est�gico

git commit -m "mensagem alterando os textos em todas as p�ginas"  --> fiz esse commit informando da inser��o do conte�dos em todas as p�ginas

git push origin master


**TESTE) AMBIENTE DE TESTE**

Somente para testes e treinos, criei um outro usuario no github com um email alternativo> "raphaelrgomes". Na minha conta: "raphaelribe" inseri o usuario: "raphaelrgomes" como colaborador. Segue os comandos testados:

a) git clone https://github.com/raphaelribe --> Clonei esse reposit�rio no novo usu�rio criado: raphaelrgomes.ucb@gmail.com

b) git add arquivo --> colocando na "staging area"

c) git commit -m "Alterando o arquivo " --> Alterei um arquivo no meu projeto com esse usu�rio colaborador.

d) git blame arquivo --> Com esse arquivo visualizei as pessoas que fizeram altera��es no arquivo. Visualizei que �ltima altera��o foi realizada pelo novo usu�rio: raphaelrgomes

e) git push origin master 
