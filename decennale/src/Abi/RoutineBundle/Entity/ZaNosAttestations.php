<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZaNosAttestations
 *
 * @ORM\Table(name="za_nos_attestations")
 * @ORM\Entity
 */
class ZaNosAttestations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="att_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attId;

    /**
     * @var string
     *
     * @ORM\Column(name="att_titre", type="string", length=100, nullable=false)
     */
    private $attTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="att_pdf", type="string", length=150, nullable=false)
     */
    private $attPdf;

    /**
     * @var integer
     *
     * @ORM\Column(name="att_etat", type="integer", nullable=false)
     */
    private $attEtat;


}
