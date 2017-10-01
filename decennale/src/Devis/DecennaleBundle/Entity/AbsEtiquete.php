<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsEtiquete
 *
 * @ORM\Table(name="abs_etiquete")
 * @ORM\Entity
 */
class AbsEtiquete
{
    /**
     * @var integer
     *
     * @ORM\Column(name="etiq_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $etiqId;

    /**
     * @var string
     *
     * @ORM\Column(name="etiq_title", type="string", length=255, nullable=false)
     */
    private $etiqTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="etiq_description", type="string", length=255, nullable=false)
     */
    private $etiqDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="etiq_motcles", type="string", length=255, nullable=false)
     */
    private $etiqMotcles;

    /**
     * @var string
     *
     * @ORM\Column(name="etiq_url", type="string", length=255, nullable=false)
     */
    private $etiqUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="etiq_texte", type="text", nullable=false)
     */
    private $etiqTexte;

    /**
     * @var integer
     *
     * @ORM\Column(name="etiq_etat", type="integer", nullable=false)
     */
    private $etiqEtat;


}
