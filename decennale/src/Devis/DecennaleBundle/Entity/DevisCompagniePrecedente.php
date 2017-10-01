<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DevisCompagniePrecedente
 *
 * @ORM\Table(name="devis_compagnie_precedente")
 * @ORM\Entity
 */
class DevisCompagniePrecedente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cogpr_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cogprId;

    /**
     * @var string
     *
     * @ORM\Column(name="cogpr_refdevs", type="string", length=35, nullable=false)
     */
    private $cogprRefdevs;

    /**
     * @var string
     *
     * @ORM\Column(name="cogpr_nom_compagnie", type="string", length=200, nullable=false)
     */
    private $cogprNomCompagnie;

    /**
     * @var string
     *
     * @ORM\Column(name="cogpr_type_contrat", type="string", length=200, nullable=false)
     */
    private $cogprTypeContrat;

    /**
     * @var string
     *
     * @ORM\Column(name="cogpr_numero_contrat", type="string", length=200, nullable=false)
     */
    private $cogprNumeroContrat;

    /**
     * @var string
     *
     * @ORM\Column(name="cogpr_date_souscription", type="string", length=20, nullable=false)
     */
    private $cogprDateSouscription;

    /**
     * @var string
     *
     * @ORM\Column(name="cogpr_date_resiliation", type="string", length=20, nullable=false)
     */
    private $cogprDateResiliation;

    /**
     * @var integer
     *
     * @ORM\Column(name="cogpr_nb_sinistres", type="integer", nullable=false)
     */
    private $cogprNbSinistres;

    /**
     * @var integer
     *
     * @ORM\Column(name="cogpr_tot_sinistres", type="integer", nullable=false)
     */
    private $cogprTotSinistres;

    /**
     * @var integer
     *
     * @ORM\Column(name="cogpr_resilie_non_paiement", type="integer", nullable=false)
     */
    private $cogprResilieNonPaiement;

    /**
     * @var integer
     *
     * @ORM\Column(name="cogpr_resilie_fausse_declaration", type="integer", nullable=false)
     */
    private $cogprResilieFausseDeclaration;

    /**
     * @var integer
     *
     * @ORM\Column(name="cogpr_resilie_sinistre", type="integer", nullable=false)
     */
    private $cogprResilieSinistre;


}
