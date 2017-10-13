<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DevisRisques
 *
 * @ORM\Table(name="devis_risques")
 * @ORM\Entity
 */
class DevisRisques
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dv_rq_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dvRqId;

    /**
     * @var string
     *
     * @ORM\Column(name="dv_rq_refclient", type="string", length=35, nullable=false)
     */
    private $dvRqRefclient;

    /**
     * @var string
     *
     * @ORM\Column(name="dv_rq_refdevis", type="string", length=30, nullable=false)
     */
    private $dvRqRefdevis;

    /**
     * @var integer
     *
     * @ORM\Column(name="dv_rq_refrisque", type="integer", nullable=false)
     */
    private $dvRqRefrisque;

    /**
     * @var string
     *
     * @ORM\Column(name="dv_rq_titre", type="string", length=200, nullable=false)
     */
    private $dvRqTitre;

    /**
     * @var integer
     *
     * @ORM\Column(name="dv_rq_etat", type="integer", nullable=false)
     */
    private $dvRqEtat;



    /**
     * Get dvRqId
     *
     * @return integer 
     */
    public function getDvRqId()
    {
        return $this->dvRqId;
    }

    /**
     * Set dvRqRefclient
     *
     * @param string $dvRqRefclient
     * @return DevisRisques
     */
    public function setDvRqRefclient($dvRqRefclient)
    {
        $this->dvRqRefclient = $dvRqRefclient;

        return $this;
    }

    /**
     * Get dvRqRefclient
     *
     * @return string 
     */
    public function getDvRqRefclient()
    {
        return $this->dvRqRefclient;
    }

    /**
     * Set dvRqRefdevis
     *
     * @param string $dvRqRefdevis
     * @return DevisRisques
     */
    public function setDvRqRefdevis($dvRqRefdevis)
    {
        $this->dvRqRefdevis = $dvRqRefdevis;

        return $this;
    }

    /**
     * Get dvRqRefdevis
     *
     * @return string 
     */
    public function getDvRqRefdevis()
    {
        return $this->dvRqRefdevis;
    }

    /**
     * Set dvRqRefrisque
     *
     * @param integer $dvRqRefrisque
     * @return DevisRisques
     */
    public function setDvRqRefrisque($dvRqRefrisque)
    {
        $this->dvRqRefrisque = $dvRqRefrisque;

        return $this;
    }

    /**
     * Get dvRqRefrisque
     *
     * @return integer 
     */
    public function getDvRqRefrisque()
    {
        return $this->dvRqRefrisque;
    }

    /**
     * Set dvRqTitre
     *
     * @param string $dvRqTitre
     * @return DevisRisques
     */
    public function setDvRqTitre($dvRqTitre)
    {
        $this->dvRqTitre = $dvRqTitre;

        return $this;
    }

    /**
     * Get dvRqTitre
     *
     * @return string 
     */
    public function getDvRqTitre()
    {
        return $this->dvRqTitre;
    }

    /**
     * Set dvRqEtat
     *
     * @param integer $dvRqEtat
     * @return DevisRisques
     */
    public function setDvRqEtat($dvRqEtat)
    {
        $this->dvRqEtat = $dvRqEtat;

        return $this;
    }

    /**
     * Get dvRqEtat
     *
     * @return integer 
     */
    public function getDvRqEtat()
    {
        return $this->dvRqEtat;
    }
}
