<?php

namespace BackEnd\Requete\RequeteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BackEndRequeteRequeteBundle:Default:index.html.twig', array('name' => $name));
    }
}
