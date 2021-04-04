<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userevent
 *
 * @ORM\Table(name="userevent", indexes={@ORM\Index(name="FK_UserEvent_Event", columns={"idEvent"})})
 * @ORM\Entity
 *
 */
class Userevent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEvent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idevent;

    /**
     * @var integer
     *
     * @ORM\Column(name="idInscri", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idinscri;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInscri", type="datetime", nullable=true)
     */
    private $dateinscri;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Userevent
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
     * Set idevent
     *
     * @param integer $idevent
     *
     * @return Userevent
     */
    public function setIdevent($idevent)
    {
        $this->idevent = $idevent;

        return $this;
    }

    /**
     * Get idevent
     *
     * @return integer
     */
    public function getIdevent()
    {
        return $this->idevent;
    }

    /**
     * Set idinscri
     *
     * @param integer $idinscri
     *
     * @return Userevent
     */
    public function setIdinscri($idinscri)
    {
        $this->idinscri = $idinscri;

        return $this;
    }

    /**
     * Get idinscri
     *
     * @return integer
     */
    public function getIdinscri()
    {
        return $this->idinscri;
    }

    /**
     * Set dateinscri
     *
     * @param \DateTime $dateinscri
     *
     * @return Userevent
     */
    public function setDateinscri($dateinscri)
    {
        $this->dateinscri = $dateinscri;

        return $this;
    }

    /**
     * Get dateinscri
     *
     * @return \DateTime
     */
    public function getDateinscri()
    {
        return $this->dateinscri;
    }
}
