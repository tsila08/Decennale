<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsClientDocuments
 *
 * @ORM\Table(name="abs_client_documents")
 * @ORM\Entity
 */
class AbsClientDocuments
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
     * @ORM\Column(name="doc_ref", type="string", length=50, nullable=false)
     */
    private $docRef;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_titre", type="string", length=200, nullable=false)
     */
    private $docTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_document", type="string", length=255, nullable=false)
     */
    private $docDocument;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_extension", type="string", length=50, nullable=false)
     */
    private $docExtension;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="doc_date", type="date", nullable=false)
     */
    private $docDate;



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
     * Set docRef
     *
     * @param string $docRef
     * @return AbsClientDocuments
     */
    public function setDocRef($docRef)
    {
        $this->docRef = $docRef;

        return $this;
    }

    /**
     * Get docRef
     *
     * @return string 
     */
    public function getDocRef()
    {
        return $this->docRef;
    }

    /**
     * Set docTitre
     *
     * @param string $docTitre
     * @return AbsClientDocuments
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
     * Set docDocument
     *
     * @param string $docDocument
     * @return AbsClientDocuments
     */
    public function setDocDocument($docDocument)
    {
        $this->docDocument = $docDocument;

        return $this;
    }

    /**
     * Get docDocument
     *
     * @return string 
     */
    public function getDocDocument()
    {
        return $this->docDocument;
    }

    /**
     * Set docExtension
     *
     * @param string $docExtension
     * @return AbsClientDocuments
     */
    public function setDocExtension($docExtension)
    {
        $this->docExtension = $docExtension;

        return $this;
    }

    /**
     * Get docExtension
     *
     * @return string 
     */
    public function getDocExtension()
    {
        return $this->docExtension;
    }

    /**
     * Set docDate
     *
     * @param \DateTime $docDate
     * @return AbsClientDocuments
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
}
