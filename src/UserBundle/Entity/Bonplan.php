<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bonplan
 *
 * @ORM\Table(name="bonplan", indexes={@ORM\Index(name="FK_BonPlan_Galerie", columns={"idGallerie"})})
 * @ORM\Entity
 */
class Bonplan
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idBonplan", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbonplan;

    /**
     * @var integer
     *
     * @ORM\Column(name="idGallerie", type="integer", nullable=false)
     */
    private $idgallerie;

    /**
     * @var string
     *
     * @ORM\Column(name="nomBonplan", type="string", length=254, nullable=true)
     */
    private $nombonplan;

    /**
     * @var string
     *
     * @ORM\Column(name="localisationBonplan", type="string", length=254, nullable=true)
     */
    private $localisationbonplan;

    /**
     * @var string
     *
     * @ORM\Column(name="typeBonplan", type="string", length=254, nullable=true)
     */
    private $typebonplan;

    /**
     * @var float
     *
     * @ORM\Column(name="avisBonplan", type="float", precision=10, scale=0, nullable=true)
     */
    private $avisbonplan;

    /**
     * @var string
     *
     * @ORM\Column(name="commantaireBonplan", type="string", length=254, nullable=true)
     */
    private $commantairebonplan;



    /**
     * Get idbonplan
     *
     * @return integer
     */
    public function getIdbonplan()
    {
        return $this->idbonplan;
    }

    /**
     * Set idgallerie
     *
     * @param integer $idgallerie
     *
     * @return Bonplan
     */
    public function setIdgallerie($idgallerie)
    {
        $this->idgallerie = $idgallerie;

        return $this;
    }

    /**
     * Get idgallerie
     *
     * @return integer
     */
    public function getIdgallerie()
    {
        return $this->idgallerie;
    }

    /**
     * Set nombonplan
     *
     * @param string $nombonplan
     *
     * @return Bonplan
     */
    public function setNombonplan($nombonplan)
    {
        $this->nombonplan = $nombonplan;

        return $this;
    }

    /**
     * Get nombonplan
     *
     * @return string
     */
    public function getNombonplan()
    {
        return $this->nombonplan;
    }

    /**
     * Set localisationbonplan
     *
     * @param string $localisationbonplan
     *
     * @return Bonplan
     */
    public function setLocalisationbonplan($localisationbonplan)
    {
        $this->localisationbonplan = $localisationbonplan;

        return $this;
    }

    /**
     * Get localisationbonplan
     *
     * @return string
     */
    public function getLocalisationbonplan()
    {
        return $this->localisationbonplan;
    }

    /**
     * Set typebonplan
     *
     * @param string $typebonplan
     *
     * @return Bonplan
     */
    public function setTypebonplan($typebonplan)
    {
        $this->typebonplan = $typebonplan;

        return $this;
    }

    /**
     * Get typebonplan
     *
     * @return string
     */
    public function getTypebonplan()
    {
        return $this->typebonplan;
    }

    /**
     * Set avisbonplan
     *
     * @param float $avisbonplan
     *
     * @return Bonplan
     */
    public function setAvisbonplan($avisbonplan)
    {
        $this->avisbonplan = $avisbonplan;

        return $this;
    }

    /**
     * Get avisbonplan
     *
     * @return float
     */
    public function getAvisbonplan()
    {
        return $this->avisbonplan;
    }

    /**
     * Set commantairebonplan
     *
     * @param string $commantairebonplan
     *
     * @return Bonplan
     */
    public function setCommantairebonplan($commantairebonplan)
    {
        $this->commantairebonplan = $commantairebonplan;

        return $this;
    }

    /**
     * Get commantairebonplan
     *
     * @return string
     */
    public function getCommantairebonplan()
    {
        return $this->commantairebonplan;
    }
}
