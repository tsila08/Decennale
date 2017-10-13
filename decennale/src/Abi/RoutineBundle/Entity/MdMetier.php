<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdMetier
 *
 * @ORM\Table(name="md_metier")
 * @ORM\Entity
 */
class MdMetier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mt_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mtId;

    /**
     * @var string
     *
     * @ORM\Column(name="mt_titre", type="string", length=200, nullable=false)
     */
    private $mtTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="mt_description", type="string", length=250, nullable=false)
     */
    private $mtDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="mt_ordre", type="integer", nullable=false)
     */
    private $mtOrdre;

    /**
     * @var string
     *
     * @ORM\Column(name="mt_img", type="string", length=200, nullable=false)
     */
    private $mtImg;

    /**
     * @var integer
     *
     * @ORM\Column(name="mt_etat", type="integer", nullable=false)
     */
    private $mtEtat;



    /**
     * Get mtId
     *
     * @return integer 
     */
    public function getMtId()
    {
        return $this->mtId;
    }

    /**
     * Set mtTitre
     *
     * @param string $mtTitre
     * @return MdMetier
     */
    public function setMtTitre($mtTitre)
    {
        $this->mtTitre = $mtTitre;

        return $this;
    }

    /**
     * Get mtTitre
     *
     * @return string 
     */
    public function getMtTitre()
    {
        return $this->mtTitre;
    }

    /**
     * Set mtDescription
     *
     * @param string $mtDescription
     * @return MdMetier
     */
    public function setMtDescription($mtDescription)
    {
        $this->mtDescription = $mtDescription;

        return $this;
    }

    /**
     * Get mtDescription
     *
     * @return string 
     */
    public function getMtDescription()
    {
        return $this->mtDescription;
    }

    /**
     * Set mtOrdre
     *
     * @param integer $mtOrdre
     * @return MdMetier
     */
    public function setMtOrdre($mtOrdre)
    {
        $this->mtOrdre = $mtOrdre;

        return $this;
    }

    /**
     * Get mtOrdre
     *
     * @return integer 
     */
    public function getMtOrdre()
    {
        return $this->mtOrdre;
    }

    /**
     * Set mtImg
     *
     * @param string $mtImg
     * @return MdMetier
     */
    public function setMtImg($mtImg)
    {
        $this->mtImg = $mtImg;

        return $this;
    }

    /**
     * Get mtImg
     *
     * @return string 
     */
    public function getMtImg()
    {
        return $this->mtImg;
    }

    /**
     * Set mtEtat
     *
     * @param integer $mtEtat
     * @return MdMetier
     */
    public function setMtEtat($mtEtat)
    {
        $this->mtEtat = $mtEtat;

        return $this;
    }

    /**
     * Get mtEtat
     *
     * @return integer 
     */
    public function getMtEtat()
    {
        return $this->mtEtat;
    }
}
