<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZaNosConditionsGenerales
 *
 * @ORM\Table(name="za_nos_conditions_generales")
 * @ORM\Entity
 */
class ZaNosConditionsGenerales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cog_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cogId;

    /**
     * @var string
     *
     * @ORM\Column(name="cog_titre", type="string", length=100, nullable=false)
     */
    private $cogTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="cog_pdf", type="string", length=150, nullable=false)
     */
    private $cogPdf;

    /**
     * @var integer
     *
     * @ORM\Column(name="cog_etat", type="integer", nullable=false)
     */
    private $cogEtat;


}
