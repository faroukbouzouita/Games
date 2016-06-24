<?php

namespace BackEnd\Games\GamesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jeu
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Jeu
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
     * @var string
     *
     * @ORM\Column(name="id_jeu", type="string", length=255)
     */
    private $idJeu;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="Note", type="integer")
     */
    private $note;

    /**
   
     * @ORM\ManyToOne(targetEntity="BackEnd\Games\GamesBundle\Entity\TypeJeu")
     * @ORM\JoinColumn(name="typeid", referencedColumnName="id")
     * 
     */
   
    private $typeJeu;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer")
     */
    private $stock;

    /**
     * @ORM\ManyToOne(targetEntity="BackEnd\Games\GamesBundle\Entity\Plateforme")
     * @ORM\JoinColumn(name="plateformId", referencedColumnName="id")
     * 
     */
    private $plateformId;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=255)
     */
    private $annee;

     /**
     * @ORM\ManyToOne(targetEntity="BackEnd\Requete\RequeteBundle\Entity\EtatJeu")
     * @ORM\JoinColumn(name="etatjeu", referencedColumnName="id")
     * 
     */
    private $etatJeu;
    
    /**
     * @var string
     *
     * @ORM\Column(name="etatdescription", type="string", length=255)
     */
    private $descriptionetat;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;
    /**
     * @var string
     *
     * @ORM\Column(name="photoslider", type="string", length=255)
     */
    private $photoslider;
    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=255)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="slider", type="string", length=255)
     */
    private $slider;

   /**
     * @ORM\ManyToOne(targetEntity="BackEnd\Games\GamesBundle\Entity\Vitrine", inversedBy="jeux")
     * @ORM\JoinColumn(name="vitrine_id", referencedColumnName="id")
     * 
     */
    private $vitrine;
    
      
    /**
     * @ORM\OneToMany(targetEntity="BackEnd\Requete\RequeteBundle\Entity\Demande_Vente_Echange", mappedBy="jeu")
     */
    private $demandes;
      /**
     * @ORM\OneToMany(targetEntity="BackEnd\Requete\RequeteBundle\Entity\Demande_Vente_Echange", mappedBy="jeu_echange")
     */
    private $demandes_echange;
    
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
     * Set idJeu
     *
     * @param string $idJeu
     * @return Jeu
     */
    public function setIdJeu($idJeu)
    {
        $this->idJeu = $idJeu;

        return $this;
    }

    /**
     * Get idJeu
     *
     * @return string 
     */
    public function getIdJeu()
    {
        return $this->idJeu;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Jeu
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Jeu
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return Jeu
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set typeJeu
     *
     * @param string $typeJeu
     * @return Jeu
     */
    public function setTypeJeu($typeJeu)
    {
        $this->typeJeu = $typeJeu;

        return $this;
    }

    /**
     * Get typeJeu
     *
     * @return string 
     */
    public function getTypeJeu()
    {
        return $this->typeJeu;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Jeu
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set plateformId
     *
     * @param string $plateformId
     * @return Jeu
     */
    public function setPlateformId($plateformId)
    {
        $this->plateformId = $plateformId;

        return $this;
    }

    /**
     * Get plateformId
     *
     * @return string 
     */
    public function getPlateformId()
    {
        return $this->plateformId;
    }

    /**
     * Set annee
     *
     * @param string $annee
     * @return Jeu
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string 
     */
    public function getAnnee()
    {
        return $this->annee;
    }


    /**
     * Set photo
     *
     * @param string $photo
     * @return Jeu
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return Jeu
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @return string
     */
    public function getPhotoslider()
    {
        return $this->photoslider;
    }

    /**
     * @param string $photoslider
     */
    public function setPhotoslider($photoslider)
    {
        $this->photoslider = $photoslider;
    }

    /**
     * @return string
     */
    public function getSlider()
    {
        return $this->slider;
    }

    /**
     * @param string $slider
     */
    public function setSlider($slider)
    {
        $this->slider = $slider;
    }
    function getEtatJeu() {
        return $this->etatJeu;
    }

    function getDescriptionetat() {
        return $this->descriptionetat;
    }

    function setEtatJeu($etatJeu) {
        $this->etatJeu = $etatJeu;
    }

    function setDescriptionetat($descriptionetat) {
        $this->descriptionetat = $descriptionetat;
    }
    function getVitrine() {
        return $this->vitrine;
    }

    function setVitrine($vitrine) {
        $this->vitrine = $vitrine;
    }

    function getDemandes() {
        return $this->demandes;
    }

    function setDemandes($demandes) {
        $this->demandes = $demandes;
    }



}
