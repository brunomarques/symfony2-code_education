Code Education - Frameworks
===========================

Symfony 2 (Versão atual 2.6)
----------------------------

Esta versão do projeto é a primeira etapa do desenvolvimento do sistema de gerenciamento de veículos.


1) Objetivo
-----------

O objetivo desta etapa é fazer exibir na tela, por exemplo, 'O carro: BMW X3 correu!'.


2) Passos
---------
    1. Criou-se um pasta pra armazenar o Symfony
    2. Foi realizado o downlod da última versão do Symfony
        - php composer.phar create-project symfony/framework-standard-edition symfony/
    3. Criou-se a action runAction para que pudesse receber dois parametros da URL e gerar a impressão 'O carro: MARCA MODELO correu!'
    4. Executou-se o git init
    5. Realizou-se o git add
    6. Realizou-se o git commit
    7. Foi configurado o origin
    8. Foi criado o repositório no Git Hub
    9. Realizou-se o git push


3) Observações
--------------
1. Ao baixar o Symfony, foi observado que ele já possui um arquivo .gitignore já "negando" a paricipação  das pastas cache/ logs/e vendors/ nos comandos git add, git commit e git push.
2. Foi uilizado a função upper do twig pra que a exibição do modelo e da marca seja feita em caixa alta.


4) Autor
--------
    Bruno Marques
    ti.brunomarques@gmail.com


5) IDE
------
Brackets - sprint 1 versão experimental 1.1.0-15558
