<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNosServices
 *
 * @ORM\Table(name="mdl_nos_services")
 * @ORM\Entity
 */
class MdlNosServices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nserv_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nservId;

    /**
     * @var string
     *
     * @ORM\Column(name="nserv_titre", type="string", length=100, nullable=false)
     */
    private $nservTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="nserv_icon", type="string", length=50, nullable=false)
     */
    private $nservIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="nserv_texte", type="string", length=255, nullable=false)
     */
    private $nservTexte;

    /**
     * @var integer
     *
     * @ORM\Column(name="nserv_ordre", type="integer", nullable=false)
     */
    private $nservOrdre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nserv_etat", type="integer", nullable=false)
     */
    private $nservEtat;



    /**
     * Get nservId
     *
     * @return integer 
     */
    public function getNservId()
    {
        return $this->nservId;
    }

    /**
     * Set nservTitre
     *
     * @param string $nservTitre
     * @return MdlNosServices
     */
    public function setNservTitre($nservTitre)
    {
        $this->nservTitre = $nservTitre;

        return $this;
    }

    /**
     * Get nservTitre
     *
     * @return string 
     */
    public function getNservTitre()
    {
        return $this->nservTitre;
    }

    /**
     * Set nservIcon
     *
     * @param string $nservIcon
     * @return MdlNosServices
     */
    public function setNservIcon($nservIcon)
    {
        $this->nservIcon = $nservIcon;

        return $this;
    }

    /**
     * Get nservIcon
     *
     * @return string 
     */
    public function getNservIcon()
    {
        return $this->nservIcon;
    }

    /**
     * Set nservTexte
     *
     * @param string $nservTexte
     * @return MdlNosServices
     */
    public function setNservTexte($nservTexte)
    {
        $this->nservTexte = $nservTexte;

        return $this;
    }

    /**
     * Get nservTexte
     *
     * @return string 
     */
    public function getNservTexte()
    {
        return $this->nservTexte;
    }

    /**
     * Set nservOrdre
     *
     * @param integer $nservOrdre
     * @return MdlNosServices
     */
    public function setNservOrdre($nservOrdre)
    {
        $this->nservOrdre = $nservOrdre;

        return $this;
    }

    /**
     * Get nservOrdre
     *
     * @return integer 
     */
    public function getNservOrdre()
    {
        return $this->nservOrdre;
    }

    /**
     * Set nservEtat
     *
     * @param integer $nservEtat
     * @return MdlNosServices
     */
    public function setNservEtat($nservEtat)
    {
        $this->nservEtat = $nservEtat;

        return $this;
    }

    /**
     * Get nservEtat
     *
     * @return integer 
     */
    public function getNservEtat()
    {
        return $this->nservEtat;
    }
}
