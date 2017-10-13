<?php

namespace Abi\RoutineBundle\Entity;

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



    /**
     * Get pdfId
     *
     * @return integer 
     */
    public function getPdfId()
    {
        return $this->pdfId;
    }

    /**
     * Set pdfRefclient
     *
     * @param string $pdfRefclient
     * @return DevisPdf
     */
    public function setPdfRefclient($pdfRefclient)
    {
        $this->pdfRefclient = $pdfRefclient;

        return $this;
    }

    /**
     * Get pdfRefclient
     *
     * @return string 
     */
    public function getPdfRefclient()
    {
        return $this->pdfRefclient;
    }

    /**
     * Set pdfRefdevis
     *
     * @param string $pdfRefdevis
     * @return DevisPdf
     */
    public function setPdfRefdevis($pdfRefdevis)
    {
        $this->pdfRefdevis = $pdfRefdevis;

        return $this;
    }

    /**
     * Get pdfRefdevis
     *
     * @return string 
     */
    public function getPdfRefdevis()
    {
        return $this->pdfRefdevis;
    }

    /**
     * Set pdfPdf
     *
     * @param string $pdfPdf
     * @return DevisPdf
     */
    public function setPdfPdf($pdfPdf)
    {
        $this->pdfPdf = $pdfPdf;

        return $this;
    }

    /**
     * Get pdfPdf
     *
     * @return string 
     */
    public function getPdfPdf()
    {
        return $this->pdfPdf;
    }

    /**
     * Set pdfExtension
     *
     * @param string $pdfExtension
     * @return DevisPdf
     */
    public function setPdfExtension($pdfExtension)
    {
        $this->pdfExtension = $pdfExtension;

        return $this;
    }

    /**
     * Get pdfExtension
     *
     * @return string 
     */
    public function getPdfExtension()
    {
        return $this->pdfExtension;
    }

    /**
     * Set pdfEtat
     *
     * @param integer $pdfEtat
     * @return DevisPdf
     */
    public function setPdfEtat($pdfEtat)
    {
        $this->pdfEtat = $pdfEtat;

        return $this;
    }

    /**
     * Get pdfEtat
     *
     * @return integer 
     */
    public function getPdfEtat()
    {
        return $this->pdfEtat;
    }

    /**
     * Set pdfDate
     *
     * @param \DateTime $pdfDate
     * @return DevisPdf
     */
    public function setPdfDate($pdfDate)
    {
        $this->pdfDate = $pdfDate;

        return $this;
    }

    /**
     * Get pdfDate
     *
     * @return \DateTime 
     */
    public function getPdfDate()
    {
        return $this->pdfDate;
    }
}
