<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DevisPdf
 *
 * @ORM\Table(name="devis_pdf")
 * @ORM\Entity
 */
class DevisPdf
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pdf_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pdfId;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf_refclient", type="string", length=30, nullable=false)
     */
    private $pdfRefclient;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf_refdevis", type="string", length=30, nullable=false)
     */
    private $pdfRefdevis;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf_pdf", type="string", length=200, nullable=false)
     */
    private $pdfPdf;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf_extension", type="string", length=10, nullable=false)
     */
    private $pdfExtension;

    /**
     * @var integer
     *
     * @ORM\Column(name="pdf_etat", type="integer", nullable=false)
     */
    private $pdfEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pdf_date", type="date", nullable=false)
     */
    private $pdfDate;


}
