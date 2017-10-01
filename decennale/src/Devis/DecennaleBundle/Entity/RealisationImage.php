<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RealisationImage
 *
 * @ORM\Table(name="realisation_image")
 * @ORM\Entity
 */
class RealisationImage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="img_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $imgId;

    /**
     * @var integer
     *
     * @ORM\Column(name="img_ref", type="integer", nullable=false)
     */
    private $imgRef;

    /**
     * @var string
     *
     * @ORM\Column(name="img_img", type="string", length=200, nullable=false)
     */
    private $imgImg;

    /**
     * @var integer
     *
     * @ORM\Column(name="img_ordre", type="integer", nullable=false)
     */
    private $imgOrdre;

    /**
     * @var integer
     *
     * @ORM\Column(name="img_info", type="integer", nullable=false)
     */
    private $imgInfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="img_etat", type="integer", nullable=false)
     */
    private $imgEtat;


}
