<?php

namespace Gema\AdminBundle\Controller\Ejemplo;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
* @Route("/paginas", name="paginas")
*/
class PaginasController extends Controller
{
    /**
     * @Route("/planes", name="paginas_planes")
     * @Template()
     */
    public function planesAction()
    {
        return array();
    }

    /**
     * @Route("/faq", name="paginas_faq")
     * @Template()
     */
    public function faqAction()
    {
        return array();
    }

    /**
     * @Route("/galeria", name="paginas_galeria")
     * @Template()
     */
    public function galeriaAction()
    {
        return array();
    }

    /**
     * @Route("/reportes", name="paginas_reportes")
     * @Template()
     */
    public function reportesAction()
    {
        return array();
    }

    /**
     * @Route("/cuentausuario", name="paginas_cuentausuario")
     * @Template()
     */
    public function cuentausuarioAction()
    {
        return array();
    }

}
