<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNosDocument
 *
 * @ORM\Table(name="mdl_nos_document")
 * @ORM\Entity
 */
class MdlNosDocument
{
    /**
     * @var integer
     *
     * @ORM\Column(name="doc_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $docId;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_titre", type="string", length=100, nullable=false)
     */
    private $docTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_description", type="string", length=255, nullable=false)
     */
    private $docDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_pdf", type="string", length=150, nullable=false)
     */
    private $docPdf;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_extention", type="string", length=50, nullable=false)
     */
    private $docExtention;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="doc_date", type="date", nullable=false)
     */
    private $docDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="doc_etat", type="integer", nullable=false)
     */
    private $docEtat;


}
