<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNosReferances
 *
 * @ORM\Table(name="mdl_nos_referances")
 * @ORM\Entity
 */
class MdlNosReferances
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nrefr_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nrefrId;

    /**
     * @var string
     *
     * @ORM\Column(name="nrefr_titre", type="string", length=100, nullable=false)
     */
    private $nrefrTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="nrefr_icon", type="string", length=50, nullable=false)
     */
    private $nrefrIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="nrefr_texte", type="string", length=255, nullable=false)
     */
    private $nrefrTexte;

    /**
     * @var integer
     *
     * @ORM\Column(name="nrefr_ordre", type="integer", nullable=false)
     */
    private $nrefrOrdre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nrefr_etat", type="integer", nullable=false)
     */
    private $nrefrEtat;


}
