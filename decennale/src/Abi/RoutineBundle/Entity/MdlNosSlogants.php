<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNosSlogants
 *
 * @ORM\Table(name="mdl_nos_slogants")
 * @ORM\Entity
 */
class MdlNosSlogants
{
    /**
     * @var integer
     *
     * @ORM\Column(name="slog_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $slogId;

    /**
     * @var string
     *
     * @ORM\Column(name="slog_titre", type="string", length=100, nullable=false)
     */
    private $slogTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="slog_icon", type="string", length=50, nullable=false)
     */
    private $slogIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="slog_texte", type="string", length=255, nullable=false)
     */
    private $slogTexte;

    /**
     * @var integer
     *
     * @ORM\Column(name="slog_ordre", type="integer", nullable=false)
     */
    private $slogOrdre;

    /**
     * @var integer
     *
     * @ORM\Column(name="slog_etat", type="integer", nullable=false)
     */
    private $slogEtat;



    /**
     * Get slogId
     *
     * @return integer 
     */
    public function getSlogId()
    {
        return $this->slogId;
    }

    /**
     * Set slogTitre
     *
     * @param string $slogTitre
     * @return MdlNosSlogants
     */
    public function setSlogTitre($slogTitre)
    {
        $this->slogTitre = $slogTitre;

        return $this;
    }

    /**
     * Get slogTitre
     *
     * @return string 
     */
    public function getSlogTitre()
    {
        return $this->slogTitre;
    }

    /**
     * Set slogIcon
     *
     * @param string $slogIcon
     * @return MdlNosSlogants
     */
    public function setSlogIcon($slogIcon)
    {
        $this->slogIcon = $slogIcon;

        return $this;
    }

    /**
     * Get slogIcon
     *
     * @return string 
     */
    public function getSlogIcon()
    {
        return $this->slogIcon;
    }

    /**
     * Set slogTexte
     *
     * @param string $slogTexte
     * @return MdlNosSlogants
     */
    public function setSlogTexte($slogTexte)
    {
        $this->slogTexte = $slogTexte;

        return $this;
    }

    /**
     * Get slogTexte
     *
     * @return string 
     */
    public function getSlogTexte()
    {
        return $this->slogTexte;
    }

    /**
     * Set slogOrdre
     *
     * @param integer $slogOrdre
     * @return MdlNosSlogants
     */
    public function setSlogOrdre($slogOrdre)
    {
        $this->slogOrdre = $slogOrdre;

        return $this;
    }

    /**
     * Get slogOrdre
     *
     * @return integer 
     */
    public function getSlogOrdre()
    {
        return $this->slogOrdre;
    }

    /**
     * Set slogEtat
     *
     * @param integer $slogEtat
     * @return MdlNosSlogants
     */
    public function setSlogEtat($slogEtat)
    {
        $this->slogEtat = $slogEtat;

        return $this;
    }

    /**
     * Get slogEtat
     *
     * @return integer 
     */
    public function getSlogEtat()
    {
        return $this->slogEtat;
    }
}
