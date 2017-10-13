<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNosServicesImg
 *
 * @ORM\Table(name="mdl_nos_services_img")
 * @ORM\Entity
 */
class MdlNosServicesImg
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nserg_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nsergId;

    /**
     * @var string
     *
     * @ORM\Column(name="nserg_titre", type="string", length=200, nullable=false)
     */
    private $nsergTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="nserg_description", type="string", length=250, nullable=false)
     */
    private $nsergDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="nserg_ordre", type="integer", nullable=false)
     */
    private $nsergOrdre;

    /**
     * @var string
     *
     * @ORM\Column(name="nserg_img", type="string", length=200, nullable=false)
     */
    private $nsergImg;

    /**
     * @var integer
     *
     * @ORM\Column(name="nserg_etat", type="integer", nullable=false)
     */
    private $nsergEtat;



    /**
     * Get nsergId
     *
     * @return integer 
     */
    public function getNsergId()
    {
        return $this->nsergId;
    }

    /**
     * Set nsergTitre
     *
     * @param string $nsergTitre
     * @return MdlNosServicesImg
     */
    public function setNsergTitre($nsergTitre)
    {
        $this->nsergTitre = $nsergTitre;

        return $this;
    }

    /**
     * Get nsergTitre
     *
     * @return string 
     */
    public function getNsergTitre()
    {
        return $this->nsergTitre;
    }

    /**
     * Set nsergDescription
     *
     * @param string $nsergDescription
     * @return MdlNosServicesImg
     */
    public function setNsergDescription($nsergDescription)
    {
        $this->nsergDescription = $nsergDescription;

        return $this;
    }

    /**
     * Get nsergDescription
     *
     * @return string 
     */
    public function getNsergDescription()
    {
        return $this->nsergDescription;
    }

    /**
     * Set nsergOrdre
     *
     * @param integer $nsergOrdre
     * @return MdlNosServicesImg
     */
    public function setNsergOrdre($nsergOrdre)
    {
        $this->nsergOrdre = $nsergOrdre;

        return $this;
    }

    /**
     * Get nsergOrdre
     *
     * @return integer 
     */
    public function getNsergOrdre()
    {
        return $this->nsergOrdre;
    }

    /**
     * Set nsergImg
     *
     * @param string $nsergImg
     * @return MdlNosServicesImg
     */
    public function setNsergImg($nsergImg)
    {
        $this->nsergImg = $nsergImg;

        return $this;
    }

    /**
     * Get nsergImg
     *
     * @return string 
     */
    public function getNsergImg()
    {
        return $this->nsergImg;
    }

    /**
     * Set nsergEtat
     *
     * @param integer $nsergEtat
     * @return MdlNosServicesImg
     */
    public function setNsergEtat($nsergEtat)
    {
        $this->nsergEtat = $nsergEtat;

        return $this;
    }

    /**
     * Get nsergEtat
     *
     * @return integer 
     */
    public function getNsergEtat()
    {
        return $this->nsergEtat;
    }
}
