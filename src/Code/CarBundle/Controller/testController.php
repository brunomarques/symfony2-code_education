<?php

namespace Code\CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class testController extends Controller
{
    /**
     * @Route("teste")
     * @Template()
     */
    public function indexAction()
    {
        return array(
                // ...
            );    }

}
