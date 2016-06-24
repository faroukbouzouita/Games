<?php
// src/Acme/UserBundle/Entity/User.php

namespace User\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class Utilisateur extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    protected $tel;
    
       /**
     * @var string
     *
     * @ORM\Column(name="adr", type="string", length=255)
     */
    protected $adr;
    
       /**
     * @var boolean
     *
     * @ORM\Column(name="abonne", type="boolean")
     */
    protected $abonne;

    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
}