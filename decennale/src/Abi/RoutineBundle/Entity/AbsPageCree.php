<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPageCree
 *
 * @ORM\Table(name="abs_page_cree")
 * @ORM\Entity
 */
class AbsPageCree
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pagecree_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pagecreeId;

    /**
     * @var string
     *
     * @ORM\Column(name="pagecree_titre", type="string", length=200, nullable=false)
     */
    private $pagecreeTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="pagecree_type", type="string", length=100, nullable=false)
     */
    private $pagecreeType;

    /**
     * @var integer
     *
     * @ORM\Column(name="pagecree_etat", type="integer", nullable=false)
     */
    private $pagecreeEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pagecree_date", type="date", nullable=false)
     */
    private $pagecreeDate;



    /**
     * Get pagecreeId
     *
     * @return integer 
     */
    public function getPagecreeId()
    {
        return $this->pagecreeId;
    }

    /**
     * Set pagecreeTitre
     *
     * @param string $pagecreeTitre
     * @return AbsPageCree
     */
    public function setPagecreeTitre($pagecreeTitre)
    {
        $this->pagecreeTitre = $pagecreeTitre;

        return $this;
    }

    /**
     * Get pagecreeTitre
     *
     * @return string 
     */
    public function getPagecreeTitre()
    {
        return $this->pagecreeTitre;
    }

    /**
     * Set pagecreeType
     *
     * @param string $pagecreeType
     * @return AbsPageCree
     */
    public function setPagecreeType($pagecreeType)
    {
        $this->pagecreeType = $pagecreeType;

        return $this;
    }

    /**
     * Get pagecreeType
     *
     * @return string 
     */
    public function getPagecreeType()
    {
        return $this->pagecreeType;
    }

    /**
     * Set pagecreeEtat
     *
     * @param integer $pagecreeEtat
     * @return AbsPageCree
     */
    public function setPagecreeEtat($pagecreeEtat)
    {
        $this->pagecreeEtat = $pagecreeEtat;

        return $this;
    }

    /**
     * Get pagecreeEtat
     *
     * @return integer 
     */
    public function getPagecreeEtat()
    {
        return $this->pagecreeEtat;
    }

    /**
     * Set pagecreeDate
     *
     * @param \DateTime $pagecreeDate
     * @return AbsPageCree
     */
    public function setPagecreeDate($pagecreeDate)
    {
        $this->pagecreeDate = $pagecreeDate;

        return $this;
    }

    /**
     * Get pagecreeDate
     *
     * @return \DateTime 
     */
    public function getPagecreeDate()
    {
        return $this->pagecreeDate;
    }
}
