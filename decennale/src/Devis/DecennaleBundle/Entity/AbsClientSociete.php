<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsClientSociete
 *
 * @ORM\Table(name="abs_client_societe")
 * @ORM\Entity
 */
class AbsClientSociete
{
    /**
     * @var integer
     *
     * @ORM\Column(name="so_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $soId;

    /**
     * @var string
     *
     * @ORM\Column(name="so_ref", type="string", length=30, nullable=false)
     */
    private $soRef;

    /**
     * @var string
     *
     * @ORM\Column(name="so_raison_social", type="string", length=100, nullable=false)
     */
    private $soRaisonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="so_formjuridique", type="string", length=20, nullable=false)
     */
    private $soFormjuridique;

    /**
     * @var string
     *
     * @ORM\Column(name="so_date_de_creation", type="string", length=20, nullable=false)
     */
    private $soDateDeCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="so_siret", type="string", length=30, nullable=false)
     */
    private $soSiret;

    /**
     * @var integer
     *
     * @ORM\Column(name="so_nb_salarier", type="integer", nullable=false)
     */
    private $soNbSalarier;

    /**
     * @var string
     *
     * @ORM\Column(name="so_chiffre_affaire", type="string", length=10, nullable=false)
     */
    private $soChiffreAffaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="so_etat", type="integer", nullable=false)
     */
    private $soEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="so_date", type="date", nullable=false)
     */
    private $soDate;


}
