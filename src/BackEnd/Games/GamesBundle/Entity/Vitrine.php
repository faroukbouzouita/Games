<?php

namespace BackEnd\Games\GamesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vitrine
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Vitrine
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;
    
 /**
     * @ORM\OneToOne(targetEntity="User\UserBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")
     */
    private $utilisateur;

    
    /**
     * @ORM\OneToMany(targetEntity="BackEnd\Games\GamesBundle\Entity\Jeu", mappedBy="vitrine")
     */
    private $jeux;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Vitrine
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }
    function getUtilisateur() {
        return $this->utilisateur;
    }

    function getJeux() {
        return $this->jeux;
    }

    function setUtilisateur($utilisateur) {
        $this->utilisateur = $utilisateur;
    }

    function setJeux($jeux) {
        $this->jeux = $jeux;
    }


}
