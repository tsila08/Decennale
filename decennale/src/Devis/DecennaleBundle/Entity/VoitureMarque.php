<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VoitureMarque
 *
 * @ORM\Table(name="voiture_marque")
 * @ORM\Entity
 */
class VoitureMarque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_marque", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMarque;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_marque", type="string", length=100, nullable=false)
     */
    private $titreMarque;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_marque", type="integer", nullable=false)
     */
    private $etatMarque;


}
