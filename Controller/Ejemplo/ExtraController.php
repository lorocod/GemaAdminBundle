<?php

namespace Gema\AdminBundle\Controller\Ejemplo;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
/*
 * @Route("/extra", name="extra")
 */
class ExtraController extends Controller
{
    /**
     * @Route("/login", name="extra_login")
     * @Template()
     */
    public function loginAction()
    {
        return array();
    }

    /**
     * @Route("/registro", name="extra_registro")
     * @Template()
     */
    public function registroAction()
    {
        return array();
    }

    /**
     * @Route("/error", name="extra_error")
     * @Template()
     */
    public function errorAction()
    {
        return array();
    }

}
