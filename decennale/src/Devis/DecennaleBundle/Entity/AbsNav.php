<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsNav
 *
 * @ORM\Table(name="abs_nav")
 * @ORM\Entity
 */
class AbsNav
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nav_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $navId;

    /**
     * @var string
     *
     * @ORM\Column(name="nav_titre", type="string", length=200, nullable=false)
     */
    private $navTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="nav_url", type="string", length=250, nullable=false)
     */
    private $navUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="nav_ordre", type="integer", nullable=false)
     */
    private $navOrdre;

    /**
     * @var string
     *
     * @ORM\Column(name="nav_type", type="string", length=50, nullable=false)
     */
    private $navType;

    /**
     * @var integer
     *
     * @ORM\Column(name="nav_etat", type="integer", nullable=false)
     */
    private $navEtat;


}
