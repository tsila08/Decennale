<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPageFormulaire
 *
 * @ORM\Table(name="abs_page_formulaire")
 * @ORM\Entity
 */
class AbsPageFormulaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pgflr_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pgflrId;

    /**
     * @var string
     *
     * @ORM\Column(name="pgflr_titre", type="string", length=150, nullable=false)
     */
    private $pgflrTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="pgflr_description", type="string", length=400, nullable=false)
     */
    private $pgflrDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="pgflr_slug", type="string", length=200, nullable=false)
     */
    private $pgflrSlug;

    /**
     * @var integer
     *
     * @ORM\Column(name="pgflr_refpage", type="integer", nullable=false)
     */
    private $pgflrRefpage;

    /**
     * @var string
     *
     * @ORM\Column(name="pgflr_type", type="string", length=200, nullable=false)
     */
    private $pgflrType;

    /**
     * @var integer
     *
     * @ORM\Column(name="pgflr_etat", type="integer", nullable=false)
     */
    private $pgflrEtat;


}
