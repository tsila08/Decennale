<?php

namespace Devis\DecennaleBundle\Entity;

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


}
