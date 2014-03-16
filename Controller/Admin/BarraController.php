<?php

namespace Gema\AdminBundle\Controller\Admin;

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
    public function subnavbarAction($a = null)
    {
        $redirect = $this->getRequest()->server->get('REDIRECT_URL');
        $active ="";
        if(strstr($redirect, '/admin/'))$active = 'home';
        if(strstr($redirect, 'usuario'))$active = 'usuario';
        if(strstr($redirect, 'role'))$active = 'role';
        
//        var_dump($redirect);
        
        return array('active' =>$active);
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
    
    /**
     * @Route("/sidebar/extrainfo")
     * @Template("GemaAdminBundle:Admin\Barra\Sidebar:extrainfo.html.twig")
     */
    public function extrainfoSidebarAction()
    {
        return array('mensaje' => "soy un mensaje del controller 'extrainfoSidebar'.");
    }
   
}
