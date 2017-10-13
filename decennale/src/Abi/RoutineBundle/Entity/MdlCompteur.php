<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCompteur
 *
 * @ORM\Table(name="mdl_compteur")
 * @ORM\Entity
 */
class MdlCompteur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comp_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $compId;

    /**
     * @var string
     *
     * @ORM\Column(name="comp_titre", type="string", length=100, nullable=false)
     */
    private $compTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="comp_icon", type="string", length=50, nullable=false)
     */
    private $compIcon;

    /**
     * @var integer
     *
     * @ORM\Column(name="comp_compteur", type="integer", nullable=false)
     */
    private $compCompteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="comp_ordre", type="integer", nullable=false)
     */
    private $compOrdre;

    /**
     * @var integer
     *
     * @ORM\Column(name="comp_etat", type="integer", nullable=false)
     */
    private $compEtat;



    /**
     * Get compId
     *
     * @return integer 
     */
    public function getCompId()
    {
        return $this->compId;
    }

    /**
     * Set compTitre
     *
     * @param string $compTitre
     * @return MdlCompteur
     */
    public function setCompTitre($compTitre)
    {
        $this->compTitre = $compTitre;

        return $this;
    }

    /**
     * Get compTitre
     *
     * @return string 
     */
    public function getCompTitre()
    {
        return $this->compTitre;
    }

    /**
     * Set compIcon
     *
     * @param string $compIcon
     * @return MdlCompteur
     */
    public function setCompIcon($compIcon)
    {
        $this->compIcon = $compIcon;

        return $this;
    }

    /**
     * Get compIcon
     *
     * @return string 
     */
    public function getCompIcon()
    {
        return $this->compIcon;
    }

    /**
     * Set compCompteur
     *
     * @param integer $compCompteur
     * @return MdlCompteur
     */
    public function setCompCompteur($compCompteur)
    {
        $this->compCompteur = $compCompteur;

        return $this;
    }

    /**
     * Get compCompteur
     *
     * @return integer 
     */
    public function getCompCompteur()
    {
        return $this->compCompteur;
    }

    /**
     * Set compOrdre
     *
     * @param integer $compOrdre
     * @return MdlCompteur
     */
    public function setCompOrdre($compOrdre)
    {
        $this->compOrdre = $compOrdre;

        return $this;
    }

    /**
     * Get compOrdre
     *
     * @return integer 
     */
    public function getCompOrdre()
    {
        return $this->compOrdre;
    }

    /**
     * Set compEtat
     *
     * @param integer $compEtat
     * @return MdlCompteur
     */
    public function setCompEtat($compEtat)
    {
        $this->compEtat = $compEtat;

        return $this;
    }

    /**
     * Get compEtat
     *
     * @return integer 
     */
    public function getCompEtat()
    {
        return $this->compEtat;
    }
}
