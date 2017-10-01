<?php

namespace Devis\DecennaleBundle\Entity;

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


}
