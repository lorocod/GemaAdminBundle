<?php

namespace Gema\AdminBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
* @Route("/usuario", name="admin_usuario")
* 
*/
class UsuarioController extends Controller
{
    /**
     * @Route("/nuevo", name="usuario_nuevo")
     * @Template()
     */
    public function nuevoAction()
    {
        return array();
    }

    /**
     * @Route("/validacion", name="usuario_validacion")
     * @Template()
     */
    public function validacionAction()
    {
        return array();
    }

    /**
     * @Route("/jqueryUI", name="usuario_jqueryui")
     * @Template()
     */
    public function jqueryUIAction()
    {
        return array();
    }

    /**
     * @Route("/charts", name="usuario_charts")
     * @Template()
     */
    public function chartsAction()
    {
        return array();
    }

    /**
     * @Route("/notificaciones", name="usuario_notificaciones")
     * @Template()
     */
    public function notificacionesAction()
    {
        return array();
    }

}
