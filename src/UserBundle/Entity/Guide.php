<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guide
 *
 * @ORM\Table(name="guide")
 * @ORM\Entity
 */
class Guide
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idGuide", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idguide;

    /**
     * @var string
     *
     * @ORM\Column(name="nomGuide", type="string", length=254, nullable=true)
     */
    private $nomguide;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomGuide", type="string", length=254, nullable=true)
     */
    private $prenomguide;

    /**
     * @var string
     *
     * @ORM\Column(name="telGuide", type="string", length=254, nullable=true)
     */
    private $telguide;

    /**
     * @var string
     *
     * @ORM\Column(name="villeGuide", type="string", length=254, nullable=true)
     */
    private $villeguide;



    /**
     * Get idguide
     *
     * @return integer
     */
    public function getIdguide()
    {
        return $this->idguide;
    }

    /**
     * Set nomguide
     *
     * @param string $nomguide
     *
     * @return Guide
     */
    public function setNomguide($nomguide)
    {
        $this->nomguide = $nomguide;

        return $this;
    }

    /**
     * Get nomguide
     *
     * @return string
     */
    public function getNomguide()
    {
        return $this->nomguide;
    }

    /**
     * Set prenomguide
     *
     * @param string $prenomguide
     *
     * @return Guide
     */
    public function setPrenomguide($prenomguide)
    {
        $this->prenomguide = $prenomguide;

        return $this;
    }

    /**
     * Get prenomguide
     *
     * @return string
     */
    public function getPrenomguide()
    {
        return $this->prenomguide;
    }

    /**
     * Set telguide
     *
     * @param string $telguide
     *
     * @return Guide
     */
    public function setTelguide($telguide)
    {
        $this->telguide = $telguide;

        return $this;
    }

    /**
     * Get telguide
     *
     * @return string
     */
    public function getTelguide()
    {
        return $this->telguide;
    }

    /**
     * Set villeguide
     *
     * @param string $villeguide
     *
     * @return Guide
     */
    public function setVilleguide($villeguide)
    {
        $this->villeguide = $villeguide;

        return $this;
    }

    /**
     * Get villeguide
     *
     * @return string
     */
    public function getVilleguide()
    {
        return $this->villeguide;
    }
}
