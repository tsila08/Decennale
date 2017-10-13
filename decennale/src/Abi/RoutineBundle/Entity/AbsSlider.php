<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsSlider
 *
 * @ORM\Table(name="abs_slider")
 * @ORM\Entity
 */
class AbsSlider
{
    /**
     * @var integer
     *
     * @ORM\Column(name="slider_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sliderId;

    /**
     * @var string
     *
     * @ORM\Column(name="slider_titre", type="string", length=255, nullable=false)
     */
    private $sliderTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="slider_img", type="string", length=255, nullable=false)
     */
    private $sliderImg;

    /**
     * @var string
     *
     * @ORM\Column(name="slider_text", type="text", nullable=false)
     */
    private $sliderText;

    /**
     * @var string
     *
     * @ORM\Column(name="slider_url_titre", type="string", length=100, nullable=false)
     */
    private $sliderUrlTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="slider_url", type="string", length=255, nullable=false)
     */
    private $sliderUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="slider_info", type="integer", nullable=false)
     */
    private $sliderInfo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="slider_date", type="date", nullable=false)
     */
    private $sliderDate;



    /**
     * Get sliderId
     *
     * @return integer 
     */
    public function getSliderId()
    {
        return $this->sliderId;
    }

    /**
     * Set sliderTitre
     *
     * @param string $sliderTitre
     * @return AbsSlider
     */
    public function setSliderTitre($sliderTitre)
    {
        $this->sliderTitre = $sliderTitre;

        return $this;
    }

    /**
     * Get sliderTitre
     *
     * @return string 
     */
    public function getSliderTitre()
    {
        return $this->sliderTitre;
    }

    /**
     * Set sliderImg
     *
     * @param string $sliderImg
     * @return AbsSlider
     */
    public function setSliderImg($sliderImg)
    {
        $this->sliderImg = $sliderImg;

        return $this;
    }

    /**
     * Get sliderImg
     *
     * @return string 
     */
    public function getSliderImg()
    {
        return $this->sliderImg;
    }

    /**
     * Set sliderText
     *
     * @param string $sliderText
     * @return AbsSlider
     */
    public function setSliderText($sliderText)
    {
        $this->sliderText = $sliderText;

        return $this;
    }

    /**
     * Get sliderText
     *
     * @return string 
     */
    public function getSliderText()
    {
        return $this->sliderText;
    }

    /**
     * Set sliderUrlTitre
     *
     * @param string $sliderUrlTitre
     * @return AbsSlider
     */
    public function setSliderUrlTitre($sliderUrlTitre)
    {
        $this->sliderUrlTitre = $sliderUrlTitre;

        return $this;
    }

    /**
     * Get sliderUrlTitre
     *
     * @return string 
     */
    public function getSliderUrlTitre()
    {
        return $this->sliderUrlTitre;
    }

    /**
     * Set sliderUrl
     *
     * @param string $sliderUrl
     * @return AbsSlider
     */
    public function setSliderUrl($sliderUrl)
    {
        $this->sliderUrl = $sliderUrl;

        return $this;
    }

    /**
     * Get sliderUrl
     *
     * @return string 
     */
    public function getSliderUrl()
    {
        return $this->sliderUrl;
    }

    /**
     * Set sliderInfo
     *
     * @param integer $sliderInfo
     * @return AbsSlider
     */
    public function setSliderInfo($sliderInfo)
    {
        $this->sliderInfo = $sliderInfo;

        return $this;
    }

    /**
     * Get sliderInfo
     *
     * @return integer 
     */
    public function getSliderInfo()
    {
        return $this->sliderInfo;
    }

    /**
     * Set sliderDate
     *
     * @param \DateTime $sliderDate
     * @return AbsSlider
     */
    public function setSliderDate($sliderDate)
    {
        $this->sliderDate = $sliderDate;

        return $this;
    }

    /**
     * Get sliderDate
     *
     * @return \DateTime 
     */
    public function getSliderDate()
    {
        return $this->sliderDate;
    }
}
