<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZaAssuraceOption
 *
 * @ORM\Table(name="za_assurace_option")
 * @ORM\Entity
 */
class ZaAssuraceOption
{
    /**
     * @var integer
     *
     * @ORM\Column(name="assopt_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $assoptId;

    /**
     * @var integer
     *
     * @ORM\Column(name="assopt_ref", type="integer", nullable=false)
     */
    private $assoptRef;

    /**
     * @var string
     *
     * @ORM\Column(name="assopt_titre", type="string", length=255, nullable=false)
     */
    private $assoptTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="assopt_description", type="text", nullable=false)
     */
    private $assoptDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="assopt_etat", type="integer", nullable=false)
     */
    private $assoptEtat;


}
