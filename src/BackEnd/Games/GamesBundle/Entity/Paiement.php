<?php

namespace BackEnd\Games\GamesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Paiement
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
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Paiement", type="date")
     */
    private $datePaiement;

    /**
     * @var float
     *
     * @ORM\Column(name="Montant", type="float")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="Num_Recu", type="string", length=50)
     */
    private $numRecu;

    /**
     * @var string
     *
     * @ORM\Column(name="Type_Paiement", type="string", length=50)
     */
    private $typePaiement;


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
     * Set datePaiement
     *
     * @param \DateTime $datePaiement
     * @return Paiement
     */
    public function setDatePaiement($datePaiement)
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    /**
     * Get datePaiement
     *
     * @return \DateTime 
     */
    public function getDatePaiement()
    {
        return $this->datePaiement;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Paiement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set numRecu
     *
     * @param string $numRecu
     * @return Paiement
     */
    public function setNumRecu($numRecu)
    {
        $this->numRecu = $numRecu;

        return $this;
    }

    /**
     * Get numRecu
     *
     * @return string 
     */
    public function getNumRecu()
    {
        return $this->numRecu;
    }

    /**
     * Set typePaiement
     *
     * @param string $typePaiement
     * @return Paiement
     */
    public function setTypePaiement($typePaiement)
    {
        $this->typePaiement = $typePaiement;

        return $this;
    }

    /**
     * Get typePaiement
     *
     * @return string 
     */
    public function getTypePaiement()
    {
        return $this->typePaiement;
    }
}
