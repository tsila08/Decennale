<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RealisationProjet
 *
 * @ORM\Table(name="realisation_projet")
 * @ORM\Entity
 */
class RealisationProjet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pro_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $proId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pro_cat", type="integer", nullable=false)
     */
    private $proCat;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_titre", type="string", length=100, nullable=false)
     */
    private $proTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_slug", type="string", length=100, nullable=false)
     */
    private $proSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_description", type="string", length=255, nullable=false)
     */
    private $proDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="pro_etat", type="integer", nullable=false)
     */
    private $proEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pro_date", type="date", nullable=false)
     */
    private $proDate;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_type", type="string", length=50, nullable=false)
     */
    private $proType;


}
