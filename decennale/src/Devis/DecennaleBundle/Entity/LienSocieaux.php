<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LienSocieaux
 *
 * @ORM\Table(name="lien_socieaux")
 * @ORM\Entity
 */
class LienSocieaux
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lien_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lienId;

    /**
     * @var string
     *
     * @ORM\Column(name="lien__titre", type="string", length=100, nullable=false)
     */
    private $lienTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_ref", type="string", length=150, nullable=false)
     */
    private $lienRef;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_urle", type="string", length=255, nullable=false)
     */
    private $lienUrle;

    /**
     * @var integer
     *
     * @ORM\Column(name="lien_etat", type="integer", nullable=false)
     */
    private $lienEtat;


}
