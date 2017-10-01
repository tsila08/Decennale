<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNosServicesImg
 *
 * @ORM\Table(name="mdl_nos_services_img")
 * @ORM\Entity
 */
class MdlNosServicesImg
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nserg_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nsergId;

    /**
     * @var string
     *
     * @ORM\Column(name="nserg_titre", type="string", length=200, nullable=false)
     */
    private $nsergTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="nserg_description", type="string", length=250, nullable=false)
     */
    private $nsergDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="nserg_ordre", type="integer", nullable=false)
     */
    private $nsergOrdre;

    /**
     * @var string
     *
     * @ORM\Column(name="nserg_img", type="string", length=200, nullable=false)
     */
    private $nsergImg;

    /**
     * @var integer
     *
     * @ORM\Column(name="nserg_etat", type="integer", nullable=false)
     */
    private $nsergEtat;


}
