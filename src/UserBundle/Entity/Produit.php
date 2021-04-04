<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idBoutique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idboutique;

    /**
     * @var integer
     *
     * @ORM\Column(name="idProduit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="nomProduit", type="string", length=254, nullable=true)
     */
    private $nomproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="tailleProduit", type="string", length=254, nullable=true)
     */
    private $tailleproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="matiereProduit", type="string", length=254, nullable=true)
     */
    private $matiereproduit;

    /**
     * @var float
     *
     * @ORM\Column(name="prixProduit", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixproduit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateExpoProduit", type="datetime", nullable=true)
     */
    private $dateexpoproduit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateExpirationProduit", type="datetime", nullable=true)
     */
    private $dateexpirationproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="urlImgProduit", type="string", length=254, nullable=true)
     */
    private $urlimgproduit;

    /**
     * @var float
     *
     * @ORM\Column(name="promotionProduit", type="float", precision=10, scale=0, nullable=true)
     */
    private $promotionproduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="qteDispoProduit", type="integer", nullable=true)
     */
    private $qtedispoproduit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="validite_produit", type="boolean", nullable=true)
     */
    private $validiteProduit;



    /**
     * Set idboutique
     *
     * @param integer $idboutique
     *
     * @return Produit
     */
    public function setIdboutique($idboutique)
    {
        $this->idboutique = $idboutique;

        return $this;
    }

    /**
     * Get idboutique
     *
     * @return integer
     */
    public function getIdboutique()
    {
        return $this->idboutique;
    }

    /**
     * Set idproduit
     *
     * @param integer $idproduit
     *
     * @return Produit
     */
    public function setIdproduit($idproduit)
    {
        $this->idproduit = $idproduit;

        return $this;
    }

    /**
     * Get idproduit
     *
     * @return integer
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * Set nomproduit
     *
     * @param string $nomproduit
     *
     * @return Produit
     */
    public function setNomproduit($nomproduit)
    {
        $this->nomproduit = $nomproduit;

        return $this;
    }

    /**
     * Get nomproduit
     *
     * @return string
     */
    public function getNomproduit()
    {
        return $this->nomproduit;
    }

    /**
     * Set tailleproduit
     *
     * @param string $tailleproduit
     *
     * @return Produit
     */
    public function setTailleproduit($tailleproduit)
    {
        $this->tailleproduit = $tailleproduit;

        return $this;
    }

    /**
     * Get tailleproduit
     *
     * @return string
     */
    public function getTailleproduit()
    {
        return $this->tailleproduit;
    }

    /**
     * Set matiereproduit
     *
     * @param string $matiereproduit
     *
     * @return Produit
     */
    public function setMatiereproduit($matiereproduit)
    {
        $this->matiereproduit = $matiereproduit;

        return $this;
    }

    /**
     * Get matiereproduit
     *
     * @return string
     */
    public function getMatiereproduit()
    {
        return $this->matiereproduit;
    }

    /**
     * Set prixproduit
     *
     * @param float $prixproduit
     *
     * @return Produit
     */
    public function setPrixproduit($prixproduit)
    {
        $this->prixproduit = $prixproduit;

        return $this;
    }

    /**
     * Get prixproduit
     *
     * @return float
     */
    public function getPrixproduit()
    {
        return $this->prixproduit;
    }

    /**
     * Set dateexpoproduit
     *
     * @param \DateTime $dateexpoproduit
     *
     * @return Produit
     */
    public function setDateexpoproduit($dateexpoproduit)
    {
        $this->dateexpoproduit = $dateexpoproduit;

        return $this;
    }

    /**
     * Get dateexpoproduit
     *
     * @return \DateTime
     */
    public function getDateexpoproduit()
    {
        return $this->dateexpoproduit;
    }

    /**
     * Set dateexpirationproduit
     *
     * @param \DateTime $dateexpirationproduit
     *
     * @return Produit
     */
    public function setDateexpirationproduit($dateexpirationproduit)
    {
        $this->dateexpirationproduit = $dateexpirationproduit;

        return $this;
    }

    /**
     * Get dateexpirationproduit
     *
     * @return \DateTime
     */
    public function getDateexpirationproduit()
    {
        return $this->dateexpirationproduit;
    }

    /**
     * Set urlimgproduit
     *
     * @param string $urlimgproduit
     *
     * @return Produit
     */
    public function setUrlimgproduit($urlimgproduit)
    {
        $this->urlimgproduit = $urlimgproduit;

        return $this;
    }

    /**
     * Get urlimgproduit
     *
     * @return string
     */
    public function getUrlimgproduit()
    {
        return $this->urlimgproduit;
    }

    /**
     * Set promotionproduit
     *
     * @param float $promotionproduit
     *
     * @return Produit
     */
    public function setPromotionproduit($promotionproduit)
    {
        $this->promotionproduit = $promotionproduit;

        return $this;
    }

    /**
     * Get promotionproduit
     *
     * @return float
     */
    public function getPromotionproduit()
    {
        return $this->promotionproduit;
    }

    /**
     * Set qtedispoproduit
     *
     * @param integer $qtedispoproduit
     *
     * @return Produit
     */
    public function setQtedispoproduit($qtedispoproduit)
    {
        $this->qtedispoproduit = $qtedispoproduit;

        return $this;
    }

    /**
     * Get qtedispoproduit
     *
     * @return integer
     */
    public function getQtedispoproduit()
    {
        return $this->qtedispoproduit;
    }

    /**
     * Set validiteProduit
     *
     * @param boolean $validiteProduit
     *
     * @return Produit
     */
    public function setValiditeProduit($validiteProduit)
    {
        $this->validiteProduit = $validiteProduit;

        return $this;
    }

    /**
     * Get validiteProduit
     *
     * @return boolean
     */
    public function getValiditeProduit()
    {
        return $this->validiteProduit;
    }
}
