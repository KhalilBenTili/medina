<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="FK_Commande_User", columns={"id"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCommande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCommande", type="datetime", nullable=true)
     */
    private $datecommande;

    /**
     * @var string
     *
     * @ORM\Column(name="typeCommande", type="string", length=254, nullable=true)
     */
    private $typecommande;

    /**
     * @var string
     *
     * @ORM\Column(name="modePayementCommande", type="string", length=254, nullable=true)
     */
    private $modepayementcommande;

    /**
     * @var float
     *
     * @ORM\Column(name="totalPrixCommande", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalprixcommande;

    /**
     * @var string
     *
     * @ORM\Column(name="etatCommande", type="string", length=254, nullable=true)
     */
    private $etatcommande;



    /**
     * Get idcommande
     *
     * @return integer
     */
    public function getIdcommande()
    {
        return $this->idcommande;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Commande
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set datecommande
     *
     * @param \DateTime $datecommande
     *
     * @return Commande
     */
    public function setDatecommande($datecommande)
    {
        $this->datecommande = $datecommande;

        return $this;
    }

    /**
     * Get datecommande
     *
     * @return \DateTime
     */
    public function getDatecommande()
    {
        return $this->datecommande;
    }

    /**
     * Set typecommande
     *
     * @param string $typecommande
     *
     * @return Commande
     */
    public function setTypecommande($typecommande)
    {
        $this->typecommande = $typecommande;

        return $this;
    }

    /**
     * Get typecommande
     *
     * @return string
     */
    public function getTypecommande()
    {
        return $this->typecommande;
    }

    /**
     * Set modepayementcommande
     *
     * @param string $modepayementcommande
     *
     * @return Commande
     */
    public function setModepayementcommande($modepayementcommande)
    {
        $this->modepayementcommande = $modepayementcommande;

        return $this;
    }

    /**
     * Get modepayementcommande
     *
     * @return string
     */
    public function getModepayementcommande()
    {
        return $this->modepayementcommande;
    }

    /**
     * Set totalprixcommande
     *
     * @param float $totalprixcommande
     *
     * @return Commande
     */
    public function setTotalprixcommande($totalprixcommande)
    {
        $this->totalprixcommande = $totalprixcommande;

        return $this;
    }

    /**
     * Get totalprixcommande
     *
     * @return float
     */
    public function getTotalprixcommande()
    {
        return $this->totalprixcommande;
    }

    /**
     * Set etatcommande
     *
     * @param string $etatcommande
     *
     * @return Commande
     */
    public function setEtatcommande($etatcommande)
    {
        $this->etatcommande = $etatcommande;

        return $this;
    }

    /**
     * Get etatcommande
     *
     * @return string
     */
    public function getEtatcommande()
    {
        return $this->etatcommande;
    }
}
