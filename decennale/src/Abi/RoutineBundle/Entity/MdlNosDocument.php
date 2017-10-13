<?php

namespace Abi\RoutineBundle\Entity;

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



    /**
     * Get docId
     *
     * @return integer 
     */
    public function getDocId()
    {
        return $this->docId;
    }

    /**
     * Set docTitre
     *
     * @param string $docTitre
     * @return MdlNosDocument
     */
    public function setDocTitre($docTitre)
    {
        $this->docTitre = $docTitre;

        return $this;
    }

    /**
     * Get docTitre
     *
     * @return string 
     */
    public function getDocTitre()
    {
        return $this->docTitre;
    }

    /**
     * Set docDescription
     *
     * @param string $docDescription
     * @return MdlNosDocument
     */
    public function setDocDescription($docDescription)
    {
        $this->docDescription = $docDescription;

        return $this;
    }

    /**
     * Get docDescription
     *
     * @return string 
     */
    public function getDocDescription()
    {
        return $this->docDescription;
    }

    /**
     * Set docPdf
     *
     * @param string $docPdf
     * @return MdlNosDocument
     */
    public function setDocPdf($docPdf)
    {
        $this->docPdf = $docPdf;

        return $this;
    }

    /**
     * Get docPdf
     *
     * @return string 
     */
    public function getDocPdf()
    {
        return $this->docPdf;
    }

    /**
     * Set docExtention
     *
     * @param string $docExtention
     * @return MdlNosDocument
     */
    public function setDocExtention($docExtention)
    {
        $this->docExtention = $docExtention;

        return $this;
    }

    /**
     * Get docExtention
     *
     * @return string 
     */
    public function getDocExtention()
    {
        return $this->docExtention;
    }

    /**
     * Set docDate
     *
     * @param \DateTime $docDate
     * @return MdlNosDocument
     */
    public function setDocDate($docDate)
    {
        $this->docDate = $docDate;

        return $this;
    }

    /**
     * Get docDate
     *
     * @return \DateTime 
     */
    public function getDocDate()
    {
        return $this->docDate;
    }

    /**
     * Set docEtat
     *
     * @param integer $docEtat
     * @return MdlNosDocument
     */
    public function setDocEtat($docEtat)
    {
        $this->docEtat = $docEtat;

        return $this;
    }

    /**
     * Get docEtat
     *
     * @return integer 
     */
    public function getDocEtat()
    {
        return $this->docEtat;
    }
}
