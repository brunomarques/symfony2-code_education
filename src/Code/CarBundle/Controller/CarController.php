<?php

namespace Code\CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Code\CarBundle\Entity\Fabricante;
use Code\CarBundle\Entity\Carro;

class CarController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        /*$marcaModelo = ["BMW"=>"120iA",
        				"CITROEN"=>"AIRCROSS TENDANCE",
        				"Chevrolet"=>"ASTRA ADVANTAGE",
    					"VolksWagen"=>"GOL",
    					"TOYOTA"=>"Corolla",
    					"PORSCHE"=>"911 Turbo Cabriolet"];

         return ['lista' => $marcaModelo];*/

        $em = $this->getDoctrine()->getManager();

        $repo = $em->getRepository("Code\CarBundle\Entity\Carro");
        $carros = $repo->getCarroFabricanteAll();

        return ['carros' => $carros];
    }

    /**
     * @Route("/addFabricante")
     * @Template()
     */
    public function addFabricanteAction(){
        $fabricante = new Fabricante();
        //$fabricante->setNome('BMW');
        //$fabricante->setNome('CITROEN');
        //$fabricante->setNome('CHEVROLET');
        //$fabricante->setNome('VOLKSWAGEN');
        //$fabricante->setNome('TOYOTA');
        //$fabricante->setNome('PORSCHE');
        //$fabricante->setNome('FIAT');
        //$fabricante->setNome('MERCEDES');
        //$fabricante->setNome('JAC MOTORS');
        //$fabricante->setNome('FERRARI');
        $fabricante->setNome('LAMBORGINI');

        $em = $this->getDoctrine()->getManager();
        $em->persist($fabricante);
        $em->flush();

        $repo = $em->getRepository("CodeCarBundle:Fabricante");
        $fabricantes = $repo->findAll();

        return ['fabricantes' => $fabricantes];
    }

    /**
     * @Route("/addCarro")
     * @Template()
     */
    public function addCarroAction(){
        $carro = new Carro();
        /*$carro->setModelo('120iA');
        $carro->setFabricante('3');
        $carro->setAno('2009');
        $carro->setCor('prata');

        $carro->setModelo('AIRCROSS TENDANCE');
        $carro->setFabricante('4');
        $carro->setAno('2010');
        $carro->setCor('vermelho');

        $carro->setModelo('ASTRA ADVANTAGE');
        $carro->setFabricante('5');
        $carro->setAno('2009');
        $carro->setCor('azul');

        $carro->setModelo('GOL');
        $carro->setFabricante('6');
        $carro->setAno('2013');
        $carro->setCor('branco');

        $carro->setModelo('Corolla');
        $carro->setFabricante('7');
        $carro->setAno('2014');
        $carro->setCor('preto');

        $carro->setModelo('911 Turbo Cabriolet');
        $carro->setFabricante('1');
        $carro->setAno('2015');
        $carro->setCor('amarelo');*/

        $carro->setModelo('Palio Fire');
        $carro->setFabricante('9');
        $carro->setAno('2015');
        $carro->setCor('verde');

        $em = $this->getDoctrine()->getManager();
        $em->persist($carro);
        $em->flush();

        $repo = $em->getRepository("CodeCarBundle:Carro");
        $carros = $repo->findAll();

        return ['carros' => $carros];
    }
}
