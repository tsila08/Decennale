<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZaAssuraceCat
 *
 * @ORM\Table(name="za_assurace_cat")
 * @ORM\Entity
 */
class ZaAssuraceCat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="asscat_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $asscatId;

    /**
     * @var string
     *
     * @ORM\Column(name="asscat_titre", type="string", length=150, nullable=false)
     */
    private $asscatTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="asscat_description", type="string", length=300, nullable=false)
     */
    private $asscatDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="asscat_etat", type="integer", nullable=false)
     */
    private $asscatEtat;


}
