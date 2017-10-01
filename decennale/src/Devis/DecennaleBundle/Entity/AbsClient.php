<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsClient
 *
 * @ORM\Table(name="abs_client")
 * @ORM\Entity
 */
class AbsClient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="client_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clientId;

    /**
     * @var string
     *
     * @ORM\Column(name="client_ref", type="string", length=30, nullable=false)
     */
    private $clientRef;

    /**
     * @var string
     *
     * @ORM\Column(name="client_civilite", type="string", length=4, nullable=false)
     */
    private $clientCivilite;

    /**
     * @var string
     *
     * @ORM\Column(name="client_nom", type="string", length=50, nullable=false)
     */
    private $clientNom;

    /**
     * @var string
     *
     * @ORM\Column(name="client_prenom", type="string", length=50, nullable=false)
     */
    private $clientPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="client_email", type="string", length=200, nullable=false)
     */
    private $clientEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="client_tel", type="string", length=20, nullable=false)
     */
    private $clientTel;

    /**
     * @var string
     *
     * @ORM\Column(name="client_cp", type="string", length=10, nullable=false)
     */
    private $clientCp;

    /**
     * @var string
     *
     * @ORM\Column(name="client_ville", type="string", length=100, nullable=false)
     */
    private $clientVille;

    /**
     * @var string
     *
     * @ORM\Column(name="client_adresse", type="string", length=200, nullable=false)
     */
    private $clientAdresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_etat", type="integer", nullable=false)
     */
    private $clientEtat;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_newsletter", type="integer", nullable=false)
     */
    private $clientNewsletter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="client_date", type="date", nullable=false)
     */
    private $clientDate;


}
