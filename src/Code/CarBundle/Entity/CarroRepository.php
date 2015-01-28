<?php

namespace Code\CarBundle\Entity;

use Doctrine\ORM\EntityRepository;

class CarroRepository extends EntityRepository {

    public function getCarroFabricanteAll(){
        $dql = 'SELECT
                    c.modelo,
                    f.nome,
                    c.ano,
                    c.cor
                  FROM
                    CodeCarBundle:Carro c
                    INNER JOIN CodeCarBundle:Fabricante f WITH c.fabricante = f.id';

        return $this
            -> getEntityManager()
            -> createQuery($dql)
            -> getResult()
        ;
    }

}