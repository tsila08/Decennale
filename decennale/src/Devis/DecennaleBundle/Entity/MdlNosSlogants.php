<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNosSlogants
 *
 * @ORM\Table(name="mdl_nos_slogants")
 * @ORM\Entity
 */
class MdlNosSlogants
{
    /**
     * @var integer
     *
     * @ORM\Column(name="slog_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $slogId;

    /**
     * @var string
     *
     * @ORM\Column(name="slog_titre", type="string", length=100, nullable=false)
     */
    private $slogTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="slog_icon", type="string", length=50, nullable=false)
     */
    private $slogIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="slog_texte", type="string", length=255, nullable=false)
     */
    private $slogTexte;

    /**
     * @var integer
     *
     * @ORM\Column(name="slog_ordre", type="integer", nullable=false)
     */
    private $slogOrdre;

    /**
     * @var integer
     *
     * @ORM\Column(name="slog_etat", type="integer", nullable=false)
     */
    private $slogEtat;


}
