<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsFondimage
 *
 * @ORM\Table(name="abs_fondimage", uniqueConstraints={@ORM\UniqueConstraint(name="fondimg_id", columns={"fondimg_id"})})
 * @ORM\Entity
 */
class AbsFondimage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fondimg_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fondimgId;

    /**
     * @var string
     *
     * @ORM\Column(name="fondimg_color", type="string", length=12, nullable=false)
     */
    private $fondimgColor;

    /**
     * @var string
     *
     * @ORM\Column(name="fondimg_image", type="string", length=100, nullable=false)
     */
    private $fondimgImage;

    /**
     * @var string
     *
     * @ORM\Column(name="fondimg_repeat", type="string", length=20, nullable=false)
     */
    private $fondimgRepeat;

    /**
     * @var string
     *
     * @ORM\Column(name="fondimg_attachment", type="string", length=30, nullable=false)
     */
    private $fondimgAttachment;

    /**
     * @var string
     *
     * @ORM\Column(name="fondimg_position", type="string", length=30, nullable=false)
     */
    private $fondimgPosition;

    /**
     * @var string
     *
     * @ORM\Column(name="fondimg_opacity", type="string", length=4, nullable=false)
     */
    private $fondimgOpacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="fondimg_etat", type="integer", nullable=false)
     */
    private $fondimgEtat;


}
