<?php

namespace Abi\RoutineBundle\Entity;

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



    /**
     * Get attId
     *
     * @return integer 
     */
    public function getAttId()
    {
        return $this->attId;
    }

    /**
     * Set attTitre
     *
     * @param string $attTitre
     * @return ZaNosAttestations
     */
    public function setAttTitre($attTitre)
    {
        $this->attTitre = $attTitre;

        return $this;
    }

    /**
     * Get attTitre
     *
     * @return string 
     */
    public function getAttTitre()
    {
        return $this->attTitre;
    }

    /**
     * Set attPdf
     *
     * @param string $attPdf
     * @return ZaNosAttestations
     */
    public function setAttPdf($attPdf)
    {
        $this->attPdf = $attPdf;

        return $this;
    }

    /**
     * Get attPdf
     *
     * @return string 
     */
    public function getAttPdf()
    {
        return $this->attPdf;
    }

    /**
     * Set attEtat
     *
     * @param integer $attEtat
     * @return ZaNosAttestations
     */
    public function setAttEtat($attEtat)
    {
        $this->attEtat = $attEtat;

        return $this;
    }

    /**
     * Get attEtat
     *
     * @return integer 
     */
    public function getAttEtat()
    {
        return $this->attEtat;
    }
}
