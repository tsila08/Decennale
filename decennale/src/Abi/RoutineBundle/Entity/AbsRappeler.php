<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsRappeler
 *
 * @ORM\Table(name="abs_rappeler")
 * @ORM\Entity
 */
class AbsRappeler
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rap_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rapId;

    /**
     * @var string
     *
     * @ORM\Column(name="rap_nom", type="string", length=80, nullable=false)
     */
    private $rapNom;

    /**
     * @var string
     *
     * @ORM\Column(name="rap_prenom", type="string", length=80, nullable=false)
     */
    private $rapPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="rap_email", type="string", length=100, nullable=false)
     */
    private $rapEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="rap_tel", type="string", length=20, nullable=false)
     */
    private $rapTel;

    /**
     * @var string
     *
     * @ORM\Column(name="rap_dateappel", type="string", length=30, nullable=false)
     */
    private $rapDateappel;

    /**
     * @var string
     *
     * @ORM\Column(name="rap_heure", type="string", length=20, nullable=false)
     */
    private $rapHeure;

    /**
     * @var integer
     *
     * @ORM\Column(name="rap_etat", type="integer", nullable=false)
     */
    private $rapEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rap_date", type="date", nullable=false)
     */
    private $rapDate;


}
