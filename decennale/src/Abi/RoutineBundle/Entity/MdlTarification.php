<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlTarification
 *
 * @ORM\Table(name="mdl_tarification")
 * @ORM\Entity
 */
class MdlTarification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tarf_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tarfId;

    /**
     * @var string
     *
     * @ORM\Column(name="tarf_titre", type="string", length=100, nullable=false)
     */
    private $tarfTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="tarf_icon", type="string", length=50, nullable=false)
     */
    private $tarfIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="tarf_texte", type="string", length=255, nullable=false)
     */
    private $tarfTexte;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarf_ordre", type="integer", nullable=false)
     */
    private $tarfOrdre;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarf_etat", type="integer", nullable=false)
     */
    private $tarfEtat;



    /**
     * Get tarfId
     *
     * @return integer 
     */
    public function getTarfId()
    {
        return $this->tarfId;
    }

    /**
     * Set tarfTitre
     *
     * @param string $tarfTitre
     * @return MdlTarification
     */
    public function setTarfTitre($tarfTitre)
    {
        $this->tarfTitre = $tarfTitre;

        return $this;
    }

    /**
     * Get tarfTitre
     *
     * @return string 
     */
    public function getTarfTitre()
    {
        return $this->tarfTitre;
    }

    /**
     * Set tarfIcon
     *
     * @param string $tarfIcon
     * @return MdlTarification
     */
    public function setTarfIcon($tarfIcon)
    {
        $this->tarfIcon = $tarfIcon;

        return $this;
    }

    /**
     * Get tarfIcon
     *
     * @return string 
     */
    public function getTarfIcon()
    {
        return $this->tarfIcon;
    }

    /**
     * Set tarfTexte
     *
     * @param string $tarfTexte
     * @return MdlTarification
     */
    public function setTarfTexte($tarfTexte)
    {
        $this->tarfTexte = $tarfTexte;

        return $this;
    }

    /**
     * Get tarfTexte
     *
     * @return string 
     */
    public function getTarfTexte()
    {
        return $this->tarfTexte;
    }

    /**
     * Set tarfOrdre
     *
     * @param integer $tarfOrdre
     * @return MdlTarification
     */
    public function setTarfOrdre($tarfOrdre)
    {
        $this->tarfOrdre = $tarfOrdre;

        return $this;
    }

    /**
     * Get tarfOrdre
     *
     * @return integer 
     */
    public function getTarfOrdre()
    {
        return $this->tarfOrdre;
    }

    /**
     * Set tarfEtat
     *
     * @param integer $tarfEtat
     * @return MdlTarification
     */
    public function setTarfEtat($tarfEtat)
    {
        $this->tarfEtat = $tarfEtat;

        return $this;
    }

    /**
     * Get tarfEtat
     *
     * @return integer 
     */
    public function getTarfEtat()
    {
        return $this->tarfEtat;
    }
}
