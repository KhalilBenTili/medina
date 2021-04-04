<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gallerie
 *
 * @ORM\Table(name="gallerie")
 * @ORM\Entity
 */
class Gallerie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idGallerie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgallerie;

    /**
     * @var string
     *
     * @ORM\Column(name="typeGallerie", type="string", length=254, nullable=true)
     */
    private $typegallerie;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionGallerie", type="string", length=254, nullable=true)
     */
    private $descriptiongallerie;

    /**
     * @var string
     *
     * @ORM\Column(name="urlPhotoGallerie", type="string", length=254, nullable=true)
     */
    private $urlphotogallerie;

    /**
     * @var string
     *
     * @ORM\Column(name="regionGallerie", type="string", length=254, nullable=true)
     */
    private $regiongallerie;



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
     * Set typegallerie
     *
     * @param string $typegallerie
     *
     * @return Gallerie
     */
    public function setTypegallerie($typegallerie)
    {
        $this->typegallerie = $typegallerie;

        return $this;
    }

    /**
     * Get typegallerie
     *
     * @return string
     */
    public function getTypegallerie()
    {
        return $this->typegallerie;
    }

    /**
     * Set descriptiongallerie
     *
     * @param string $descriptiongallerie
     *
     * @return Gallerie
     */
    public function setDescriptiongallerie($descriptiongallerie)
    {
        $this->descriptiongallerie = $descriptiongallerie;

        return $this;
    }

    /**
     * Get descriptiongallerie
     *
     * @return string
     */
    public function getDescriptiongallerie()
    {
        return $this->descriptiongallerie;
    }

    /**
     * Set urlphotogallerie
     *
     * @param string $urlphotogallerie
     *
     * @return Gallerie
     */
    public function setUrlphotogallerie($urlphotogallerie)
    {
        $this->urlphotogallerie = $urlphotogallerie;

        return $this;
    }

    /**
     * Get urlphotogallerie
     *
     * @return string
     */
    public function getUrlphotogallerie()
    {
        return $this->urlphotogallerie;
    }

    /**
     * Set regiongallerie
     *
     * @param string $regiongallerie
     *
     * @return Gallerie
     */
    public function setRegiongallerie($regiongallerie)
    {
        $this->regiongallerie = $regiongallerie;

        return $this;
    }

    /**
     * Get regiongallerie
     *
     * @return string
     */
    public function getRegiongallerie()
    {
        return $this->regiongallerie;
    }
}
