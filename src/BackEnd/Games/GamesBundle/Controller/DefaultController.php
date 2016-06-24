<?php

namespace BackEnd\Games\GamesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BackEndGamesGamesBundle:Default:index.html.twig', array('name' => $name));
    }
}
