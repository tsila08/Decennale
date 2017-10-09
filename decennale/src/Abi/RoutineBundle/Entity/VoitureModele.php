<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VoitureModele
 *
 * @ORM\Table(name="voiture_modele")
 * @ORM\Entity
 */
class VoitureModele
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_modele", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModele;

    /**
     * @var integer
     *
     * @ORM\Column(name="cat_modele", type="integer", nullable=false)
     */
    private $catModele;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_modele", type="string", length=100, nullable=false)
     */
    private $titreModele;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_modele", type="integer", nullable=false)
     */
    private $etatModele;


}
