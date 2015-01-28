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
        1.6 Agree? yes
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
    7. Realizou-se o git commit dos arquivos já existes que sofreram alterações
    8. Realizou-se o git add da pasta Code dentro de src
    9. Realizou-se o git push
    10. Criou-se mais uma tag: 0.2.0
    11. Realizou-se o push da tag


Versão 0.3.0
------------

1) Objetivo
-----------
O objetivo desta versão é criar duas entidades (Carro e Fabricante), persistir os dados e exibí-los na tela (Dados salvos no BD).


2) Passos
---------
    1. Com o Bundle CarBundle criado, foi gerado as entidades exigidas (Carro e Fabricante) com o seguinte comando:
        app/console generate:doctrine:entities Code/CarBundle/Entity/Carro e
        app/console generate:doctrine:entities Code/CarBundle/Entity/Fabricante
    2. Criou-se as variáveis e seus respectivos getters e setters
        2.1 Como estamos trabalhando com annotation, foi configurado as annotations das respectivas variáveis
        2.2 Para utilizar estas annotations foi preciso inserir 'use Doctrine\ORM\Mapping as ORM;'
    3. Logo em seguida, foi gerado o dump destas duas entidades:
        app/console doctrine:schema:update --dump-sql --> para exibir a query na tela e
        app/console doctrine:schema:update --force --> para executar as querys existentes
    4. Depois disso, foi criado duas actions addCarroAction e addFabricanteAction para a inserção via tela no controller CarController, ainda automática, dos dados. Foi criado um código simples de inserção.
        4.1 Foi criado uma rota simples, sendo o tamplate o mesmo da versão snterior
            /addFabricante
            /addCarro
        4.2 A título de estudo, foi criado uma view para cada rota especificada e, também, criou-se um retorno para mostrara listagem de dados inseridos
    5. Criou-se um repositório para criação de uma query personalizada e esta, poder ser utilizada na indexAction do controlador CarController
        5.1 Foi utilizado a dql apenas por familiaridade com a sql comum
        5.2 Foi feito um extends para permitir a utilização das queryes personalizadas e das já existentes
            extends EntityRepository
        5.2 Foi inserido na annotation entity da entidade Carro
            @ORM\Entity(repositoryClass="Code\CarBundle\Entity\CarroRepository")
    6. Na action indexAction, o código antigo foi comentado e deixado lá apenas para comparação do que foi realizado
        6.1 Foi criado um entity manager 
        6.2 Com o entity manager cirado realizou-se a chamada da entidade Carro
        6.3 Com a entidade participando do processo chamou-se a função getCarroFabricanteAll() que lista os carros com seus respectivos fabricantes, como no modelo da versão anterior, mas com algumas mudanças que são a inserção da cor e do ano do carro
    7. Realizou-se o git commit dos arquivos já existes que sofreram alterações
    8. Realizou-se o git add da pasta Code dentro de src
    9. Realizou-se o git push
    10. Criou-se mais uma tag: 0.3.0
    11. Realizou-se o push da tag


Autor
-----
    Bruno Marques
    ti.brunomarques@gmail.com


IDE
---
Brackets - sprint 1 versão experimental 1.1.0-15558
