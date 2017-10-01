<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNosServices
 *
 * @ORM\Table(name="mdl_nos_services")
 * @ORM\Entity
 */
class MdlNosServices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nserv_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nservId;

    /**
     * @var string
     *
     * @ORM\Column(name="nserv_titre", type="string", length=100, nullable=false)
     */
    private $nservTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="nserv_icon", type="string", length=50, nullable=false)
     */
    private $nservIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="nserv_texte", type="string", length=255, nullable=false)
     */
    private $nservTexte;

    /**
     * @var integer
     *
     * @ORM\Column(name="nserv_ordre", type="integer", nullable=false)
     */
    private $nservOrdre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nserv_etat", type="integer", nullable=false)
     */
    private $nservEtat;


}
