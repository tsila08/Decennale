<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCompteur
 *
 * @ORM\Table(name="mdl_compteur")
 * @ORM\Entity
 */
class MdlCompteur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comp_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $compId;

    /**
     * @var string
     *
     * @ORM\Column(name="comp_titre", type="string", length=100, nullable=false)
     */
    private $compTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="comp_icon", type="string", length=50, nullable=false)
     */
    private $compIcon;

    /**
     * @var integer
     *
     * @ORM\Column(name="comp_compteur", type="integer", nullable=false)
     */
    private $compCompteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="comp_ordre", type="integer", nullable=false)
     */
    private $compOrdre;

    /**
     * @var integer
     *
     * @ORM\Column(name="comp_etat", type="integer", nullable=false)
     */
    private $compEtat;


}
