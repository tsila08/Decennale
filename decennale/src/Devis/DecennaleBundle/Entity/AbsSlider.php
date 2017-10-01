<?php

namespace Devis\DecennaleBundle\Entity;

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


}
