<?php

namespace FrontEnd\GamesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $type = $em->getRepository('BackEndGamesGamesBundle:Plateforme')->findAll();

        $jeu1 = $em->getRepository('BackEndGamesGamesBundle:Jeu')->findBy(array('plateformId' => '1'), null, 6);
        $jeu2 = $em->getRepository('BackEndGamesGamesBundle:Jeu')->findBy(array('plateformId' => '2'), null, 6);
        $jeu3 = $em->getRepository('BackEndGamesGamesBundle:Jeu')->findBy(array('plateformId' => '3'), null, 6);
        $jeu4 = $em->getRepository('BackEndGamesGamesBundle:Jeu')->findBy(array('plateformId' => '4'), null, 6);

        $jeubest1 = $em->getRepository('BackEndGamesGamesBundle:Jeu')->findBy(array('plateformId' => '1'), array('note' => 'DESC'), 4);
        $jeubest2 = $em->getRepository('BackEndGamesGamesBundle:Jeu')->findBy(array('plateformId' => '2'), array('note' => 'DESC'), 4);
        $jeubest3 = $em->getRepository('BackEndGamesGamesBundle:Jeu')->findBy(array('plateformId' => '3'), array('note' => 'DESC'), 4);
        $sliders = $em->getRepository('BackEndGamesGamesBundle:Jeu')->findBy(array('slider' => '1'), null, 4);

        return $this->render('FrontEndGamesBundle:Default:index.html.twig',array("jeu1"=>$jeu1,"jeu2"=>$jeu2,"jeu3"=>$jeu3,"jeu4"=>$jeu4,"sliders"=>$sliders,"jeubest1"=>$jeubest1,"jeubest2"=>$jeubest2,"jeubest3"=>$jeubest3));
    }

    public function ByPlateformeAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $games=$em->getRepository('BackEndGamesGamesBundle:Jeu')->findByplateformId($id);
        $requete = $this->get('request');
        $typesjeux=$em->getRepository('BackEndGamesGamesBundle:TypeJeu')->findAll();
        $etatsjeux=$em->getRepository('BackEndRequeteRequeteBundle:EtatJeu')->findAll();


        $meubles  = $this->get('knp_paginator')->paginate($games, $requete->query->get('page', 1),6);
        return $this->render('FrontEndGamesBundle:SearchGames:SearchByPlateforme.html.twig',array("games"=>$games,"types"=>$typesjeux,"etats"=>$etatsjeux));


    }
    
     public function showpanierheaderAction()
    { 
        $session = $this->getRequest()->getSession();
    $em = $this->getDoctrine()->getManager();
   $nbr=  count($session->get('panier'));
        if (!$session->has('panier')) 
        {$session->set('panier', array());
        $panier=null;
        $produits="";
        }
else {
    $panier=$session->get('panier');
    $produits = $em->getRepository('BackEndMeubleBundle:Produit')->findArray(array_keys($panier));
   
     }
         //var_dump(array_keys($panier));
//die();
            
      
         return $this->render('FrontEndMeubleBundle:Pannier:contenupanier.html.twig',array("meubles"=>$produits,"nbr"=>$nbr,'panier' => $session->get('panier') ));
   
        
    }
    public function ajouterPannierAction($id)
    {
        $session = $this->getRequest()->getSession();
      
        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');
        
        if (array_key_exists($id, $panier)) {
            if ($this->getRequest()->query->get('qte') != null) $panier[$id] = $this->getRequest()->query->get('qte');
            $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
        } else {
            if ($this->getRequest()->query->get('qte') != null)
                $panier[$id] = $this->getRequest()->query->get('qte');
            else
            {
            $panier[$id] = 1;}
            
            $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        }
            
        $session->set('panier',$panier);
        
        
        return $this->redirect($this->generateUrl('front_end_games_showpannier'));
    }
     public function supprimerPannierAction($id)
    {
    
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier');
        
        if (array_key_exists($id, $panier))
        {
            unset($panier[$id]);
            $session->set('panier',$panier);
            $this->get('session')->getFlashBag()->add('success','Article supprimé avec succès');
        }

        return $this->redirect($this->generateUrl('front_end_meuble_showpannier'));
    }
  
    public function showpannierAction()
    {
        $session = $this->getRequest()->getSession();
        if (!$session->has('panier')) $session->set('panier', array());
//var_dump($session->get('panier'));
//die();
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('BackEndGamesGamesBundle:Jeu')->findArray(array_keys($session->get('panier')));
        
        return $this->render('FrontEndGamesBundle:Pannier:Pannier.html.twig', array('produits' => $produits,
                                                                                             'panier' => $session->get('panier')));
    }
}
