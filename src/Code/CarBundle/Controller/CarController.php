<?php

namespace Code\CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CarController extends Controller
{
    /**
     * @Route("/lista-de-carros")
     * @Template()
     */
    public function indexAction()
    {
        $marcaModelo = ["BMW"=>"120iA", 
        				"CITROEN"=>"AIRCROSS TENDANCE",
        				"Chevrolet"=>"ASTRA ADVANTAGE",
    					"VolksWagen"=>"GOL",
    					"TOYOTA"=>"Corolla",
    					"PORSCHE"=>"911 Turbo Cabriolet"];
        return ['lista' => $marcaModelo];
    }

}
