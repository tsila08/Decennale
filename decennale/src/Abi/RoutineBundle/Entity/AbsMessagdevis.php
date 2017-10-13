<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsMessagdevis
 *
 * @ORM\Table(name="abs_messagdevis")
 * @ORM\Entity
 */
class AbsMessagdevis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="devis_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $devisId;

    /**
     * @var string
     *
     * @ORM\Column(name="devis_refclient", type="string", length=20, nullable=false)
     */
    private $devisRefclient;

    /**
     * @var string
     *
     * @ORM\Column(name="devis_refdevis", type="string", length=25, nullable=false)
     */
    private $devisRefdevis;

    /**
     * @var string
     *
     * @ORM\Column(name="devis_typecontrat", type="string", length=150, nullable=false)
     */
    private $devisTypecontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="devis_echeance", type="string", length=50, nullable=false)
     */
    private $devisEcheance;

    /**
     * @var integer
     *
     * @ORM\Column(name="devis_etat", type="integer", nullable=false)
     */
    private $devisEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="devis_date", type="date", nullable=false)
     */
    private $devisDate;



    /**
     * Get devisId
     *
     * @return integer 
     */
    public function getDevisId()
    {
        return $this->devisId;
    }

    /**
     * Set devisRefclient
     *
     * @param string $devisRefclient
     * @return AbsMessagdevis
     */
    public function setDevisRefclient($devisRefclient)
    {
        $this->devisRefclient = $devisRefclient;

        return $this;
    }

    /**
     * Get devisRefclient
     *
     * @return string 
     */
    public function getDevisRefclient()
    {
        return $this->devisRefclient;
    }

    /**
     * Set devisRefdevis
     *
     * @param string $devisRefdevis
     * @return AbsMessagdevis
     */
    public function setDevisRefdevis($devisRefdevis)
    {
        $this->devisRefdevis = $devisRefdevis;

        return $this;
    }

    /**
     * Get devisRefdevis
     *
     * @return string 
     */
    public function getDevisRefdevis()
    {
        return $this->devisRefdevis;
    }

    /**
     * Set devisTypecontrat
     *
     * @param string $devisTypecontrat
     * @return AbsMessagdevis
     */
    public function setDevisTypecontrat($devisTypecontrat)
    {
        $this->devisTypecontrat = $devisTypecontrat;

        return $this;
    }

    /**
     * Get devisTypecontrat
     *
     * @return string 
     */
    public function getDevisTypecontrat()
    {
        return $this->devisTypecontrat;
    }

    /**
     * Set devisEcheance
     *
     * @param string $devisEcheance
     * @return AbsMessagdevis
     */
    public function setDevisEcheance($devisEcheance)
    {
        $this->devisEcheance = $devisEcheance;

        return $this;
    }

    /**
     * Get devisEcheance
     *
     * @return string 
     */
    public function getDevisEcheance()
    {
        return $this->devisEcheance;
    }

    /**
     * Set devisEtat
     *
     * @param integer $devisEtat
     * @return AbsMessagdevis
     */
    public function setDevisEtat($devisEtat)
    {
        $this->devisEtat = $devisEtat;

        return $this;
    }

    /**
     * Get devisEtat
     *
     * @return integer 
     */
    public function getDevisEtat()
    {
        return $this->devisEtat;
    }

    /**
     * Set devisDate
     *
     * @param \DateTime $devisDate
     * @return AbsMessagdevis
     */
    public function setDevisDate($devisDate)
    {
        $this->devisDate = $devisDate;

        return $this;
    }

    /**
     * Get devisDate
     *
     * @return \DateTime 
     */
    public function getDevisDate()
    {
        return $this->devisDate;
    }
}
