<?php

namespace Karis\OrderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KarisOrderBundle:Default:index.html.twig', array('name' => $name));
    }
}
