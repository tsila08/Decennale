<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModulePartenaire
 *
 * @ORM\Table(name="module_partenaire")
 * @ORM\Entity
 */
class ModulePartenaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="part_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $partId;

    /**
     * @var string
     *
     * @ORM\Column(name="part_titre", type="string", length=100, nullable=false)
     */
    private $partTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="part_description", type="string", length=200, nullable=false)
     */
    private $partDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="part_img", type="string", length=200, nullable=false)
     */
    private $partImg;

    /**
     * @var integer
     *
     * @ORM\Column(name="part_etat", type="integer", nullable=false)
     */
    private $partEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="part_url", type="string", length=250, nullable=false)
     */
    private $partUrl;


}
