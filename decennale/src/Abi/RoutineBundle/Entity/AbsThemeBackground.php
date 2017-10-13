<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsThemeBackground
 *
 * @ORM\Table(name="abs_theme_background")
 * @ORM\Entity
 */
class AbsThemeBackground
{
    /**
     * @var integer
     *
     * @ORM\Column(name="background_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $backgroundId;

    /**
     * @var string
     *
     * @ORM\Column(name="background_img", type="string", length=50, nullable=false)
     */
    private $backgroundImg;

    /**
     * @var integer
     *
     * @ORM\Column(name="background_etat", type="integer", nullable=false)
     */
    private $backgroundEtat;



    /**
     * Get backgroundId
     *
     * @return integer 
     */
    public function getBackgroundId()
    {
        return $this->backgroundId;
    }

    /**
     * Set backgroundImg
     *
     * @param string $backgroundImg
     * @return AbsThemeBackground
     */
    public function setBackgroundImg($backgroundImg)
    {
        $this->backgroundImg = $backgroundImg;

        return $this;
    }

    /**
     * Get backgroundImg
     *
     * @return string 
     */
    public function getBackgroundImg()
    {
        return $this->backgroundImg;
    }

    /**
     * Set backgroundEtat
     *
     * @param integer $backgroundEtat
     * @return AbsThemeBackground
     */
    public function setBackgroundEtat($backgroundEtat)
    {
        $this->backgroundEtat = $backgroundEtat;

        return $this;
    }

    /**
     * Get backgroundEtat
     *
     * @return integer 
     */
    public function getBackgroundEtat()
    {
        return $this->backgroundEtat;
    }
}
