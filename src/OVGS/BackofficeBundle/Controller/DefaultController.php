<?php

namespace OVGS\BackofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OVGSBackofficeBundle:Default:index.html.twig', array());
    }
}
