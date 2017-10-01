<?php

namespace Devis\DecennaleBundle\Entity;

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


}
