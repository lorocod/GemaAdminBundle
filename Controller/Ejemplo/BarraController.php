<?php

namespace Gema\AdminBundle\Controller\Ejemplo;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/barra")¡
 */

class BarraController extends Controller
{
    /**
     * @Route("/navbar")
     * @Template()
     */
    public function navbarAction()
    {
        return array();
    }

    /**
     * @Route("/subnavbar")
     * @Template()
     */
    public function subnavbarAction()
    {
        return array();
    }
    /**
     * @Route("/extra")
     * @Template()
     */
    public function extraAction()
    {
        return array();
    }
    /**
     * @Route("/footer")
     * @Template()
     */
    public function footerAction()
    {
        return array();
    }

}
