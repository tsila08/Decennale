<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlTarification
 *
 * @ORM\Table(name="mdl_tarification")
 * @ORM\Entity
 */
class MdlTarification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tarf_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tarfId;

    /**
     * @var string
     *
     * @ORM\Column(name="tarf_titre", type="string", length=100, nullable=false)
     */
    private $tarfTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="tarf_icon", type="string", length=50, nullable=false)
     */
    private $tarfIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="tarf_texte", type="string", length=255, nullable=false)
     */
    private $tarfTexte;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarf_ordre", type="integer", nullable=false)
     */
    private $tarfOrdre;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarf_etat", type="integer", nullable=false)
     */
    private $tarfEtat;


}
