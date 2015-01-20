Code Education - Frameworks
===========================

Symfony 2 (Versão atual 2.6)
----------------------------

Desenvolvimento do sistema de gerenciamento de veículos.


Versão 0.1.3
------------

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


Versão 0.2.0
------------

1) Objetivo
-----------

O objetivo desta versão é exibir uma lista de marcas e modelos de veículos após criação de um Bundle novo.


2) Passos
---------
    1. Criou-se um bundle novo com o comando app/conole generate:bundle
        1.1 namespace: Code/CarBundle
        1.2 Bundle Name: CodeCarBundle
        1.3 Target Directory: endereço da pasta SRC (padrão)
        1.4 Configuration Format: annotation
        1.5 Directory Structure: sim para criar automaricamente
        1.6 Agrre? yes
        1.7 Kernel Update? yes
        1.8 Routing update? yes
    2. Alterou-se o prefix de routing.yml para /cars/
    3. Criou-se uma classe de controller com o comando app/console generate:controller
        3.1 Informou-se o nome do controller comoCodeCarBundle:Car
        3.2 Informou-se o tipo de rota: annotation
        3.3 Informou-se o tipo de template: twig
        3.4 Informou-se o nome de somente uma action: indexAction
        3.5 Informou-se o nome da rota: lista-de-carros
        3.6 O template name foi mantido como padrão
        3.7 Confirmou-se a criação do controller
    4. Foi criado um array com as marcas e modelos de veículo
    5. Foi utilizado em index.html.twig na View/Car a função {% for key,value in lista %} para fazer o laço e exibir todas as marcas / modelos.
    6. Foram feitas algumas alterações em base.html.twig para inserir o css do bootstrap somente para tratamento de layout
    7. Realizou-se o git commit dos arquivos ja existes que sofreram alterações
    8. Realizou-se o git add da pasta Code dentro de src
    9. Realizou-se o git push
    10. Criou-se mais uma tag: 0.2.0
    11. Realizou-se o push da tag

Autor
-----
    Bruno Marques
    ti.brunomarques@gmail.com


IDE
---
Brackets - sprint 1 versão experimental 1.1.0-15558
