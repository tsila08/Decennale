<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsTarif
 *
 * @ORM\Table(name="abs_tarif")
 * @ORM\Entity
 */
class AbsTarif
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tarif_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tarifId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarif_min", type="integer", nullable=false)
     */
    private $tarifMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarif_max", type="integer", nullable=false)
     */
    private $tarifMax;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif_prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $tarifPrix;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarif_etat", type="integer", nullable=false)
     */
    private $tarifEtat;



    /**
     * Get tarifId
     *
     * @return integer 
     */
    public function getTarifId()
    {
        return $this->tarifId;
    }

    /**
     * Set tarifMin
     *
     * @param integer $tarifMin
     * @return AbsTarif
     */
    public function setTarifMin($tarifMin)
    {
        $this->tarifMin = $tarifMin;

        return $this;
    }

    /**
     * Get tarifMin
     *
     * @return integer 
     */
    public function getTarifMin()
    {
        return $this->tarifMin;
    }

    /**
     * Set tarifMax
     *
     * @param integer $tarifMax
     * @return AbsTarif
     */
    public function setTarifMax($tarifMax)
    {
        $this->tarifMax = $tarifMax;

        return $this;
    }

    /**
     * Get tarifMax
     *
     * @return integer 
     */
    public function getTarifMax()
    {
        return $this->tarifMax;
    }

    /**
     * Set tarifPrix
     *
     * @param float $tarifPrix
     * @return AbsTarif
     */
    public function setTarifPrix($tarifPrix)
    {
        $this->tarifPrix = $tarifPrix;

        return $this;
    }

    /**
     * Get tarifPrix
     *
     * @return float 
     */
    public function getTarifPrix()
    {
        return $this->tarifPrix;
    }

    /**
     * Set tarifEtat
     *
     * @param integer $tarifEtat
     * @return AbsTarif
     */
    public function setTarifEtat($tarifEtat)
    {
        $this->tarifEtat = $tarifEtat;

        return $this;
    }

    /**
     * Get tarifEtat
     *
     * @return integer 
     */
    public function getTarifEtat()
    {
        return $this->tarifEtat;
    }
}
