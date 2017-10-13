<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNosEngagements
 *
 * @ORM\Table(name="mdl_nos_engagements")
 * @ORM\Entity
 */
class MdlNosEngagements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="engts_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $engtsId;

    /**
     * @var string
     *
     * @ORM\Column(name="engts_titre", type="string", length=100, nullable=false)
     */
    private $engtsTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="engts_icon", type="string", length=50, nullable=false)
     */
    private $engtsIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="engts_texte", type="string", length=255, nullable=false)
     */
    private $engtsTexte;

    /**
     * @var integer
     *
     * @ORM\Column(name="engts_ordre", type="integer", nullable=false)
     */
    private $engtsOrdre;

    /**
     * @var integer
     *
     * @ORM\Column(name="engts_etat", type="integer", nullable=false)
     */
    private $engtsEtat;



    /**
     * Get engtsId
     *
     * @return integer 
     */
    public function getEngtsId()
    {
        return $this->engtsId;
    }

    /**
     * Set engtsTitre
     *
     * @param string $engtsTitre
     * @return MdlNosEngagements
     */
    public function setEngtsTitre($engtsTitre)
    {
        $this->engtsTitre = $engtsTitre;

        return $this;
    }

    /**
     * Get engtsTitre
     *
     * @return string 
     */
    public function getEngtsTitre()
    {
        return $this->engtsTitre;
    }

    /**
     * Set engtsIcon
     *
     * @param string $engtsIcon
     * @return MdlNosEngagements
     */
    public function setEngtsIcon($engtsIcon)
    {
        $this->engtsIcon = $engtsIcon;

        return $this;
    }

    /**
     * Get engtsIcon
     *
     * @return string 
     */
    public function getEngtsIcon()
    {
        return $this->engtsIcon;
    }

    /**
     * Set engtsTexte
     *
     * @param string $engtsTexte
     * @return MdlNosEngagements
     */
    public function setEngtsTexte($engtsTexte)
    {
        $this->engtsTexte = $engtsTexte;

        return $this;
    }

    /**
     * Get engtsTexte
     *
     * @return string 
     */
    public function getEngtsTexte()
    {
        return $this->engtsTexte;
    }

    /**
     * Set engtsOrdre
     *
     * @param integer $engtsOrdre
     * @return MdlNosEngagements
     */
    public function setEngtsOrdre($engtsOrdre)
    {
        $this->engtsOrdre = $engtsOrdre;

        return $this;
    }

    /**
     * Get engtsOrdre
     *
     * @return integer 
     */
    public function getEngtsOrdre()
    {
        return $this->engtsOrdre;
    }

    /**
     * Set engtsEtat
     *
     * @param integer $engtsEtat
     * @return MdlNosEngagements
     */
    public function setEngtsEtat($engtsEtat)
    {
        $this->engtsEtat = $engtsEtat;

        return $this;
    }

    /**
     * Get engtsEtat
     *
     * @return integer 
     */
    public function getEngtsEtat()
    {
        return $this->engtsEtat;
    }
}
