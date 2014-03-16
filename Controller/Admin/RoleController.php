<?php

namespace Gema\AdminBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
* @Route("/role", name="role")
*/
class RoleController extends Controller
{
    /**
     * @Route("/acciones", name="role_acciones")
     * @Template()
     */
    public function accionesAction()
    {
        return array();
    }

    /**
     * @Route("/funcionalidades", name="role_funcionalidades")
     * @Template()
     */
    public function funcionalidadesAction()
    {
        return array();
    }

    /**
     * @Route("/galeria", name="role_galeria")
     * @Template()
     */
    public function galeriaAction()
    {
        return array();
    }

    /**
     * @Route("/reportes", name="role_reportes")
     * @Template()
     */
    public function reportesAction()
    {
        return array();
    }

    /**
     * @Route("/cuentausuario", name="role_cuentausuario")
     * @Template()
     */
    public function cuentausuarioAction()
    {
        return array();
    }

}
