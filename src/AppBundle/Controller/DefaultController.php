<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/{nome}", name="homepage")
     */
    public function indexAction($nome)
    {
        return $this->render('AppBundle:default:index.html.twig', ["nome" => $nome]);
    }

    /**
     * @Route("run/{marca}/{modelo}", name="projeto1")
     */
    public function runAction($marca, $modelo)
    {
        return $this->render('AppBundle:default:run.html.twig', ["marca" => $marca, "modelo" => $modelo]);
    }
}
