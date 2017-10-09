<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * YaUser
 *
 * @ORM\Table(name="ya_user")
 * @ORM\Entity
 */
class YaUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="us_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usId;

    /**
     * @var string
     *
     * @ORM\Column(name="us_titre", type="string", length=50, nullable=false)
     */
    private $usTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="us_description", type="string", length=255, nullable=false)
     */
    private $usDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="us_slug", type="string", length=75, nullable=false)
     */
    private $usSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="us_url", type="string", length=75, nullable=false)
     */
    private $usUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="us_etat", type="integer", nullable=false)
     */
    private $usEtat;


}
