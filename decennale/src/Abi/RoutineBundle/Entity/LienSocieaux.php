<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LienSocieaux
 *
 * @ORM\Table(name="lien_socieaux")
 * @ORM\Entity
 */
class LienSocieaux
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lien_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lienId;

    /**
     * @var string
     *
     * @ORM\Column(name="lien__titre", type="string", length=100, nullable=false)
     */
    private $lienTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_ref", type="string", length=150, nullable=false)
     */
    private $lienRef;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_urle", type="string", length=255, nullable=false)
     */
    private $lienUrle;

    /**
     * @var integer
     *
     * @ORM\Column(name="lien_etat", type="integer", nullable=false)
     */
    private $lienEtat;



    /**
     * Get lienId
     *
     * @return integer 
     */
    public function getLienId()
    {
        return $this->lienId;
    }

    /**
     * Set lienTitre
     *
     * @param string $lienTitre
     * @return LienSocieaux
     */
    public function setLienTitre($lienTitre)
    {
        $this->lienTitre = $lienTitre;

        return $this;
    }

    /**
     * Get lienTitre
     *
     * @return string 
     */
    public function getLienTitre()
    {
        return $this->lienTitre;
    }

    /**
     * Set lienRef
     *
     * @param string $lienRef
     * @return LienSocieaux
     */
    public function setLienRef($lienRef)
    {
        $this->lienRef = $lienRef;

        return $this;
    }

    /**
     * Get lienRef
     *
     * @return string 
     */
    public function getLienRef()
    {
        return $this->lienRef;
    }

    /**
     * Set lienUrle
     *
     * @param string $lienUrle
     * @return LienSocieaux
     */
    public function setLienUrle($lienUrle)
    {
        $this->lienUrle = $lienUrle;

        return $this;
    }

    /**
     * Get lienUrle
     *
     * @return string 
     */
    public function getLienUrle()
    {
        return $this->lienUrle;
    }

    /**
     * Set lienEtat
     *
     * @param integer $lienEtat
     * @return LienSocieaux
     */
    public function setLienEtat($lienEtat)
    {
        $this->lienEtat = $lienEtat;

        return $this;
    }

    /**
     * Get lienEtat
     *
     * @return integer 
     */
    public function getLienEtat()
    {
        return $this->lienEtat;
    }
}
