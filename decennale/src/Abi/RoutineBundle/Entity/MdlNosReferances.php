<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNosReferances
 *
 * @ORM\Table(name="mdl_nos_referances")
 * @ORM\Entity
 */
class MdlNosReferances
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nrefr_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nrefrId;

    /**
     * @var string
     *
     * @ORM\Column(name="nrefr_titre", type="string", length=100, nullable=false)
     */
    private $nrefrTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="nrefr_icon", type="string", length=50, nullable=false)
     */
    private $nrefrIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="nrefr_texte", type="string", length=255, nullable=false)
     */
    private $nrefrTexte;

    /**
     * @var integer
     *
     * @ORM\Column(name="nrefr_ordre", type="integer", nullable=false)
     */
    private $nrefrOrdre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nrefr_etat", type="integer", nullable=false)
     */
    private $nrefrEtat;



    /**
     * Get nrefrId
     *
     * @return integer 
     */
    public function getNrefrId()
    {
        return $this->nrefrId;
    }

    /**
     * Set nrefrTitre
     *
     * @param string $nrefrTitre
     * @return MdlNosReferances
     */
    public function setNrefrTitre($nrefrTitre)
    {
        $this->nrefrTitre = $nrefrTitre;

        return $this;
    }

    /**
     * Get nrefrTitre
     *
     * @return string 
     */
    public function getNrefrTitre()
    {
        return $this->nrefrTitre;
    }

    /**
     * Set nrefrIcon
     *
     * @param string $nrefrIcon
     * @return MdlNosReferances
     */
    public function setNrefrIcon($nrefrIcon)
    {
        $this->nrefrIcon = $nrefrIcon;

        return $this;
    }

    /**
     * Get nrefrIcon
     *
     * @return string 
     */
    public function getNrefrIcon()
    {
        return $this->nrefrIcon;
    }

    /**
     * Set nrefrTexte
     *
     * @param string $nrefrTexte
     * @return MdlNosReferances
     */
    public function setNrefrTexte($nrefrTexte)
    {
        $this->nrefrTexte = $nrefrTexte;

        return $this;
    }

    /**
     * Get nrefrTexte
     *
     * @return string 
     */
    public function getNrefrTexte()
    {
        return $this->nrefrTexte;
    }

    /**
     * Set nrefrOrdre
     *
     * @param integer $nrefrOrdre
     * @return MdlNosReferances
     */
    public function setNrefrOrdre($nrefrOrdre)
    {
        $this->nrefrOrdre = $nrefrOrdre;

        return $this;
    }

    /**
     * Get nrefrOrdre
     *
     * @return integer 
     */
    public function getNrefrOrdre()
    {
        return $this->nrefrOrdre;
    }

    /**
     * Set nrefrEtat
     *
     * @param integer $nrefrEtat
     * @return MdlNosReferances
     */
    public function setNrefrEtat($nrefrEtat)
    {
        $this->nrefrEtat = $nrefrEtat;

        return $this;
    }

    /**
     * Get nrefrEtat
     *
     * @return integer 
     */
    public function getNrefrEtat()
    {
        return $this->nrefrEtat;
    }
}
