<?php

namespace Abi\RoutineBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * AbsRealisation
 *
 * @ORM\Table(name="abs_realisation")
 * @ORM\Entity
 */
class AbsRealisation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="galerie_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $galerieId;

    /**
     * @var string
     *
     * @ORM\Column(name="galerie_titre", type="string", length=100, nullable=false)
     */
    private $galerieTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="galerie_description", type="string", length=255, nullable=false)
     */
    private $galerieDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="galerie_img", type="string", length=200, nullable=false)
     */
    private $galerieImg;

    /**
     * @var string
     *
     * @ORM\Column(name="galerie_extention", type="string", length=200, nullable=false)
     */
    private $galerieExtention;

    /**
     * @var integer
     *
     * @ORM\Column(name="galerie_etat", type="integer", nullable=false)
     */
    private $galerieEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="galerie_date", type="date", nullable=false)
     */
    private $galerieDate;



    /**
     * Get galerieId
     *
     * @return integer 
     */
    public function getGalerieId()
    {
        return $this->galerieId;
    }

    /**
     * Set galerieTitre
     *
     * @param string $galerieTitre
     * @return AbsRealisation
     */
    public function setGalerieTitre($galerieTitre)
    {
        $this->galerieTitre = $galerieTitre;

        return $this;
    }

    /**
     * Get galerieTitre
     *
     * @return string 
     */
    public function getGalerieTitre()
    {
        return $this->galerieTitre;
    }

    /**
     * Set galerieDescription
     *
     * @param string $galerieDescription
     * @return AbsRealisation
     */
    public function setGalerieDescription($galerieDescription)
    {
        $this->galerieDescription = $galerieDescription;

        return $this;
    }

    /**
     * Get galerieDescription
     *
     * @return string 
     */
    public function getGalerieDescription()
    {
        return $this->galerieDescription;
    }

    /**
     * Set galerieImg
     *
     * @param string $galerieImg
     * @return AbsRealisation
     */
    public function setGalerieImg($galerieImg)
    {
        $this->galerieImg = $galerieImg;

        return $this;
    }

    /**
     * Get galerieImg
     *
     * @return string 
     */
    public function getGalerieImg()
    {
        return $this->galerieImg;
    }

    /**
     * Set galerieExtention
     *
     * @param string $galerieExtention
     * @return AbsRealisation
     */
    public function setGalerieExtention($galerieExtention)
    {
        $this->galerieExtention = $galerieExtention;

        return $this;
    }

    /**
     * Get galerieExtention
     *
     * @return string 
     */
    public function getGalerieExtention()
    {
        return $this->galerieExtention;
    }

    /**
     * Set galerieEtat
     *
     * @param integer $galerieEtat
     * @return AbsRealisation
     */
    public function setGalerieEtat($galerieEtat)
    {
        $this->galerieEtat = $galerieEtat;

        return $this;
    }

    /**
     * Get galerieEtat
     *
     * @return integer 
     */
    public function getGalerieEtat()
    {
        return $this->galerieEtat;
    }

    /**
     * Set galerieDate
     *
     * @param \DateTime $galerieDate
     * @return AbsRealisation
     */
    public function setGalerieDate($galerieDate)
    {
        $this->galerieDate = $galerieDate;

        return $this;
    }

    /**
     * Get galerieDate
     *
     * @return \DateTime 
     */
    public function getGalerieDate()
    {
        return $this->galerieDate;
    }
}
