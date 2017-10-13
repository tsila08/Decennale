<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsClientCompliment
 *
 * @ORM\Table(name="abs_client_compliment")
 * @ORM\Entity
 */
class AbsClientCompliment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="clcomp_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clcompId;

    /**
     * @var string
     *
     * @ORM\Column(name="clcomp_ref", type="string", length=30, nullable=false)
     */
    private $clcompRef;

    /**
     * @var string
     *
     * @ORM\Column(name="clcomp_societe", type="string", length=50, nullable=false)
     */
    private $clcompSociete;

    /**
     * @var integer
     *
     * @ORM\Column(name="clcomp_numerovois", type="integer", nullable=false)
     */
    private $clcompNumerovois;

    /**
     * @var string
     *
     * @ORM\Column(name="clcomp_batiment", type="string", length=50, nullable=false)
     */
    private $clcompBatiment;

    /**
     * @var string
     *
     * @ORM\Column(name="clcomp_escalier", type="string", length=50, nullable=false)
     */
    private $clcompEscalier;

    /**
     * @var string
     *
     * @ORM\Column(name="clcomp_code1", type="string", length=10, nullable=false)
     */
    private $clcompCode1;

    /**
     * @var string
     *
     * @ORM\Column(name="clcomp_code2", type="string", length=10, nullable=false)
     */
    private $clcompCode2;

    /**
     * @var string
     *
     * @ORM\Column(name="clcomp_Interphone", type="string", length=20, nullable=false)
     */
    private $clcompInterphone;

    /**
     * @var string
     *
     * @ORM\Column(name="clcomp_etage", type="string", length=4, nullable=false)
     */
    private $clcompEtage;

    /**
     * @var string
     *
     * @ORM\Column(name="clcomp_porte", type="string", length=20, nullable=false)
     */
    private $clcompPorte;

    /**
     * @var string
     *
     * @ORM\Column(name="clcomp_remarque", type="string", length=255, nullable=false)
     */
    private $clcompRemarque;

    /**
     * @var integer
     *
     * @ORM\Column(name="clcomp_etat", type="integer", nullable=false)
     */
    private $clcompEtat;



    /**
     * Get clcompId
     *
     * @return integer 
     */
    public function getClcompId()
    {
        return $this->clcompId;
    }

    /**
     * Set clcompRef
     *
     * @param string $clcompRef
     * @return AbsClientCompliment
     */
    public function setClcompRef($clcompRef)
    {
        $this->clcompRef = $clcompRef;

        return $this;
    }

    /**
     * Get clcompRef
     *
     * @return string 
     */
    public function getClcompRef()
    {
        return $this->clcompRef;
    }

    /**
     * Set clcompSociete
     *
     * @param string $clcompSociete
     * @return AbsClientCompliment
     */
    public function setClcompSociete($clcompSociete)
    {
        $this->clcompSociete = $clcompSociete;

        return $this;
    }

    /**
     * Get clcompSociete
     *
     * @return string 
     */
    public function getClcompSociete()
    {
        return $this->clcompSociete;
    }

    /**
     * Set clcompNumerovois
     *
     * @param integer $clcompNumerovois
     * @return AbsClientCompliment
     */
    public function setClcompNumerovois($clcompNumerovois)
    {
        $this->clcompNumerovois = $clcompNumerovois;

        return $this;
    }

    /**
     * Get clcompNumerovois
     *
     * @return integer 
     */
    public function getClcompNumerovois()
    {
        return $this->clcompNumerovois;
    }

    /**
     * Set clcompBatiment
     *
     * @param string $clcompBatiment
     * @return AbsClientCompliment
     */
    public function setClcompBatiment($clcompBatiment)
    {
        $this->clcompBatiment = $clcompBatiment;

        return $this;
    }

    /**
     * Get clcompBatiment
     *
     * @return string 
     */
    public function getClcompBatiment()
    {
        return $this->clcompBatiment;
    }

    /**
     * Set clcompEscalier
     *
     * @param string $clcompEscalier
     * @return AbsClientCompliment
     */
    public function setClcompEscalier($clcompEscalier)
    {
        $this->clcompEscalier = $clcompEscalier;

        return $this;
    }

    /**
     * Get clcompEscalier
     *
     * @return string 
     */
    public function getClcompEscalier()
    {
        return $this->clcompEscalier;
    }

    /**
     * Set clcompCode1
     *
     * @param string $clcompCode1
     * @return AbsClientCompliment
     */
    public function setClcompCode1($clcompCode1)
    {
        $this->clcompCode1 = $clcompCode1;

        return $this;
    }

    /**
     * Get clcompCode1
     *
     * @return string 
     */
    public function getClcompCode1()
    {
        return $this->clcompCode1;
    }

    /**
     * Set clcompCode2
     *
     * @param string $clcompCode2
     * @return AbsClientCompliment
     */
    public function setClcompCode2($clcompCode2)
    {
        $this->clcompCode2 = $clcompCode2;

        return $this;
    }

    /**
     * Get clcompCode2
     *
     * @return string 
     */
    public function getClcompCode2()
    {
        return $this->clcompCode2;
    }

    /**
     * Set clcompInterphone
     *
     * @param string $clcompInterphone
     * @return AbsClientCompliment
     */
    public function setClcompInterphone($clcompInterphone)
    {
        $this->clcompInterphone = $clcompInterphone;

        return $this;
    }

    /**
     * Get clcompInterphone
     *
     * @return string 
     */
    public function getClcompInterphone()
    {
        return $this->clcompInterphone;
    }

    /**
     * Set clcompEtage
     *
     * @param string $clcompEtage
     * @return AbsClientCompliment
     */
    public function setClcompEtage($clcompEtage)
    {
        $this->clcompEtage = $clcompEtage;

        return $this;
    }

    /**
     * Get clcompEtage
     *
     * @return string 
     */
    public function getClcompEtage()
    {
        return $this->clcompEtage;
    }

    /**
     * Set clcompPorte
     *
     * @param string $clcompPorte
     * @return AbsClientCompliment
     */
    public function setClcompPorte($clcompPorte)
    {
        $this->clcompPorte = $clcompPorte;

        return $this;
    }

    /**
     * Get clcompPorte
     *
     * @return string 
     */
    public function getClcompPorte()
    {
        return $this->clcompPorte;
    }

    /**
     * Set clcompRemarque
     *
     * @param string $clcompRemarque
     * @return AbsClientCompliment
     */
    public function setClcompRemarque($clcompRemarque)
    {
        $this->clcompRemarque = $clcompRemarque;

        return $this;
    }

    /**
     * Get clcompRemarque
     *
     * @return string 
     */
    public function getClcompRemarque()
    {
        return $this->clcompRemarque;
    }

    /**
     * Set clcompEtat
     *
     * @param integer $clcompEtat
     * @return AbsClientCompliment
     */
    public function setClcompEtat($clcompEtat)
    {
        $this->clcompEtat = $clcompEtat;

        return $this;
    }

    /**
     * Get clcompEtat
     *
     * @return integer 
     */
    public function getClcompEtat()
    {
        return $this->clcompEtat;
    }
}
