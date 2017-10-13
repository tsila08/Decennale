<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DevisAntecedentOption
 *
 * @ORM\Table(name="devis_antecedent_option")
 * @ORM\Entity
 */
class DevisAntecedentOption
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ant_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $antId;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_refdevs", type="string", length=35, nullable=false)
     */
    private $antRefdevs;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_refclient", type="string", length=35, nullable=false)
     */
    private $antRefclient;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_date_effet", type="string", length=20, nullable=false)
     */
    private $antDateEffet;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_echeancier", type="string", length=20, nullable=false)
     */
    private $antEcheancier;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_dejassure", type="integer", nullable=false)
     */
    private $antDejassure;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_soustraitance", type="integer", nullable=false)
     */
    private $antSoustraitance;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_reprise", type="integer", nullable=false)
     */
    private $antReprise;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_redressement", type="integer", nullable=false)
     */
    private $antRedressement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ant_daterecue", type="date", nullable=false)
     */
    private $antDaterecue;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_etat", type="integer", nullable=false)
     */
    private $antEtat;



    /**
     * Get antId
     *
     * @return integer 
     */
    public function getAntId()
    {
        return $this->antId;
    }

    /**
     * Set antRefdevs
     *
     * @param string $antRefdevs
     * @return DevisAntecedentOption
     */
    public function setAntRefdevs($antRefdevs)
    {
        $this->antRefdevs = $antRefdevs;

        return $this;
    }

    /**
     * Get antRefdevs
     *
     * @return string 
     */
    public function getAntRefdevs()
    {
        return $this->antRefdevs;
    }

    /**
     * Set antRefclient
     *
     * @param string $antRefclient
     * @return DevisAntecedentOption
     */
    public function setAntRefclient($antRefclient)
    {
        $this->antRefclient = $antRefclient;

        return $this;
    }

    /**
     * Get antRefclient
     *
     * @return string 
     */
    public function getAntRefclient()
    {
        return $this->antRefclient;
    }

    /**
     * Set antDateEffet
     *
     * @param string $antDateEffet
     * @return DevisAntecedentOption
     */
    public function setAntDateEffet($antDateEffet)
    {
        $this->antDateEffet = $antDateEffet;

        return $this;
    }

    /**
     * Get antDateEffet
     *
     * @return string 
     */
    public function getAntDateEffet()
    {
        return $this->antDateEffet;
    }

    /**
     * Set antEcheancier
     *
     * @param string $antEcheancier
     * @return DevisAntecedentOption
     */
    public function setAntEcheancier($antEcheancier)
    {
        $this->antEcheancier = $antEcheancier;

        return $this;
    }

    /**
     * Get antEcheancier
     *
     * @return string 
     */
    public function getAntEcheancier()
    {
        return $this->antEcheancier;
    }

    /**
     * Set antDejassure
     *
     * @param integer $antDejassure
     * @return DevisAntecedentOption
     */
    public function setAntDejassure($antDejassure)
    {
        $this->antDejassure = $antDejassure;

        return $this;
    }

    /**
     * Get antDejassure
     *
     * @return integer 
     */
    public function getAntDejassure()
    {
        return $this->antDejassure;
    }

    /**
     * Set antSoustraitance
     *
     * @param integer $antSoustraitance
     * @return DevisAntecedentOption
     */
    public function setAntSoustraitance($antSoustraitance)
    {
        $this->antSoustraitance = $antSoustraitance;

        return $this;
    }

    /**
     * Get antSoustraitance
     *
     * @return integer 
     */
    public function getAntSoustraitance()
    {
        return $this->antSoustraitance;
    }

    /**
     * Set antReprise
     *
     * @param integer $antReprise
     * @return DevisAntecedentOption
     */
    public function setAntReprise($antReprise)
    {
        $this->antReprise = $antReprise;

        return $this;
    }

    /**
     * Get antReprise
     *
     * @return integer 
     */
    public function getAntReprise()
    {
        return $this->antReprise;
    }

    /**
     * Set antRedressement
     *
     * @param integer $antRedressement
     * @return DevisAntecedentOption
     */
    public function setAntRedressement($antRedressement)
    {
        $this->antRedressement = $antRedressement;

        return $this;
    }

    /**
     * Get antRedressement
     *
     * @return integer 
     */
    public function getAntRedressement()
    {
        return $this->antRedressement;
    }

    /**
     * Set antDaterecue
     *
     * @param \DateTime $antDaterecue
     * @return DevisAntecedentOption
     */
    public function setAntDaterecue($antDaterecue)
    {
        $this->antDaterecue = $antDaterecue;

        return $this;
    }

    /**
     * Get antDaterecue
     *
     * @return \DateTime 
     */
    public function getAntDaterecue()
    {
        return $this->antDaterecue;
    }

    /**
     * Set antEtat
     *
     * @param integer $antEtat
     * @return DevisAntecedentOption
     */
    public function setAntEtat($antEtat)
    {
        $this->antEtat = $antEtat;

        return $this;
    }

    /**
     * Get antEtat
     *
     * @return integer 
     */
    public function getAntEtat()
    {
        return $this->antEtat;
    }
}
