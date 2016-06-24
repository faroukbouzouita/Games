<?php

namespace BackEnd\Requete\RequeteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Demande_Vente_Echange
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
     * @ORM\ManyToOne(targetEntity="BackEnd\Requete\RequeteBundle\Entity\TypeEchange")
     * @ORM\JoinColumn(name="typeechange", referencedColumnName="id")
     * 
     */
    private $typeEchange;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_jeu", type="string", length=255)
     */
    private $nomJeu;

    /**
     * @var string
     *
     * @ORM\Column(name="annee_jeu", type="string", length=255)
     */
    private $anneeJeu;

    /**
     * @ORM\ManyToOne(targetEntity="BackEnd\Requete\RequeteBundle\Entity\EtatJeu")
     * @ORM\JoinColumn(name="etatjeu", referencedColumnName="id")
     * 
     */
    private $etatJeu;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_validation", type="string", length=255)
     */
    private $etatValidation;
    /**
     * @var string
     *
     * @ORM\Column(name="date_requete", type="string", length=255)
     */
    private $date_requete;

    // ...
    /**
     * @ORM\ManyToOne(targetEntity="BackEnd\Games\GamesBundle\Entity\Jeu", inversedBy="demandes")
     * @ORM\JoinColumn(name="jeu_demande", referencedColumnName="id")
     */
    private $jeu;
    
       // ...
    /**
     * @ORM\ManyToOne(targetEntity="BackEnd\Games\GamesBundle\Entity\Jeu")
     * @ORM\JoinColumn(name="jeu_echange", referencedColumnName="id")
     */
    private $jeu_echange;
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
     * Set typeEchange
     *
     * @param string $typeEchange
     * @return Demande
     */
    public function setTypeEchange($typeEchange)
    {
        $this->typeEchange = $typeEchange;

        return $this;
    }

    /**
     * Get typeEchange
     *
     * @return string 
     */
    public function getTypeEchange()
    {
        return $this->typeEchange;
    }

    /**
     * Set nomJeu
     *
     * @param string $nomJeu
     * @return Demande
     */
    public function setNomJeu($nomJeu)
    {
        $this->nomJeu = $nomJeu;

        return $this;
    }

    /**
     * Get nomJeu
     *
     * @return string 
     */
    public function getNomJeu()
    {
        return $this->nomJeu;
    }

    /**
     * Set anneeJeu
     *
     * @param string $anneeJeu
     * @return Demande
     */
    public function setAnneeJeu($anneeJeu)
    {
        $this->anneeJeu = $anneeJeu;

        return $this;
    }

    /**
     * Get anneeJeu
     *
     * @return string 
     */
    public function getAnneeJeu()
    {
        return $this->anneeJeu;
    }

    /**
     * Set etatJeu
     *
     * @param string $etatJeu
     * @return Demande
     */
    public function setEtatJeu($etatJeu)
    {
        $this->etatJeu = $etatJeu;

        return $this;
    }

    /**
     * Get etatJeu
     *
     * @return string 
     */
    public function getEtatJeu()
    {
        return $this->etatJeu;
    }

    /**
     * Set etatValidation
     *
     * @param string $etatValidation
     * @return Demande
     */
    public function setEtatValidation($etatValidation)
    {
        $this->etatValidation = $etatValidation;

        return $this;
    }

    /**
     * Get etatValidation
     *
     * @return string 
     */
    public function getEtatValidation()
    {
        return $this->etatValidation;
    }
    
    
    function getDate_requete() {
        return $this->date_requete;
    }

    function setDate_requete($date_requete) {
        $this->date_requete = $date_requete;
    }

 
    
}
