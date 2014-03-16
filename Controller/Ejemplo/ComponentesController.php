<?php

namespace Gema\AdminBundle\Controller\Ejemplo;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
* @Route("/componentes", name="componentess")
* 
*/
class ComponentesController extends Controller
{
    /**
     * @Route("/elementos", name="componentes_elementos")
     * @Template()
     */
    public function elementosAction()
    {
        return array();
    }

    /**
     * @Route("/validacion", name="componentes_validacion")
     * @Template()
     */
    public function validacionAction()
    {
        return array();
    }

    /**
     * @Route("/jqueryUI", name="componentes_jqueryui")
     * @Template()
     */
    public function jqueryUIAction()
    {
        return array();
    }

    /**
     * @Route("/charts", name="componentes_charts")
     * @Template()
     */
    public function chartsAction()
    {
        return array();
    }

    /**
     * @Route("/notificaciones", name="componentes_notificaciones")
     * @Template()
     */
    public function notificacionesAction()
    {
        return array();
    }

}
