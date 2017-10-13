<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DevisRecue
 *
 * @ORM\Table(name="devis_recue")
 * @ORM\Entity
 */
class DevisRecue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dvr_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dvrId;

    /**
     * @var string
     *
     * @ORM\Column(name="dvr_refclient", type="string", length=30, nullable=false)
     */
    private $dvrRefclient;

    /**
     * @var string
     *
     * @ORM\Column(name="dvr_refdevis", type="string", length=30, nullable=false)
     */
    private $dvrRefdevis;

    /**
     * @var integer
     *
     * @ORM\Column(name="dvr_etat", type="integer", nullable=false)
     */
    private $dvrEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dvr_date", type="date", nullable=false)
     */
    private $dvrDate;



    /**
     * Get dvrId
     *
     * @return integer 
     */
    public function getDvrId()
    {
        return $this->dvrId;
    }

    /**
     * Set dvrRefclient
     *
     * @param string $dvrRefclient
     * @return DevisRecue
     */
    public function setDvrRefclient($dvrRefclient)
    {
        $this->dvrRefclient = $dvrRefclient;

        return $this;
    }

    /**
     * Get dvrRefclient
     *
     * @return string 
     */
    public function getDvrRefclient()
    {
        return $this->dvrRefclient;
    }

    /**
     * Set dvrRefdevis
     *
     * @param string $dvrRefdevis
     * @return DevisRecue
     */
    public function setDvrRefdevis($dvrRefdevis)
    {
        $this->dvrRefdevis = $dvrRefdevis;

        return $this;
    }

    /**
     * Get dvrRefdevis
     *
     * @return string 
     */
    public function getDvrRefdevis()
    {
        return $this->dvrRefdevis;
    }

    /**
     * Set dvrEtat
     *
     * @param integer $dvrEtat
     * @return DevisRecue
     */
    public function setDvrEtat($dvrEtat)
    {
        $this->dvrEtat = $dvrEtat;

        return $this;
    }

    /**
     * Get dvrEtat
     *
     * @return integer 
     */
    public function getDvrEtat()
    {
        return $this->dvrEtat;
    }

    /**
     * Set dvrDate
     *
     * @param \DateTime $dvrDate
     * @return DevisRecue
     */
    public function setDvrDate($dvrDate)
    {
        $this->dvrDate = $dvrDate;

        return $this;
    }

    /**
     * Get dvrDate
     *
     * @return \DateTime 
     */
    public function getDvrDate()
    {
        return $this->dvrDate;
    }
}
