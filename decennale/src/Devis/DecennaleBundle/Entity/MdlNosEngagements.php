<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNosEngagements
 *
 * @ORM\Table(name="mdl_nos_engagements")
 * @ORM\Entity
 */
class MdlNosEngagements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="engts_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $engtsId;

    /**
     * @var string
     *
     * @ORM\Column(name="engts_titre", type="string", length=100, nullable=false)
     */
    private $engtsTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="engts_icon", type="string", length=50, nullable=false)
     */
    private $engtsIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="engts_texte", type="string", length=255, nullable=false)
     */
    private $engtsTexte;

    /**
     * @var integer
     *
     * @ORM\Column(name="engts_ordre", type="integer", nullable=false)
     */
    private $engtsOrdre;

    /**
     * @var integer
     *
     * @ORM\Column(name="engts_etat", type="integer", nullable=false)
     */
    private $engtsEtat;


}
