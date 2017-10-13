<?php
namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPageExiste
 *
 * @ORM\Table(name="abs_page_existe")
 * @ORM\Entity
 */
class AbsPageExiste
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pgexit_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pgexitId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pgexit_ref", type="integer", nullable=false)
     */
    private $pgexitRef;

    /**
     * @var string
     *
     * @ORM\Column(name="pgexit_titre", type="string", length=150, nullable=false)
     */
    private $pgexitTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="pgexit_description", type="string", length=400, nullable=false)
     */
    private $pgexitDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="pgexit_slug", type="string", length=200, nullable=false)
     */
    private $pgexitSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="pgexit_url", type="string", length=200, nullable=false)
     */
    private $pgexitUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="pgexit_type", type="string", length=200, nullable=false)
     */
    private $pgexitType;

    /**
     * @var integer
     *
     * @ORM\Column(name="pgexit_etat", type="integer", nullable=false)
     */
    private $pgexitEtat;



    /**
     * Get pgexitId
     *
     * @return integer 
     */
    public function getPgexitId()
    {
        return $this->pgexitId;
    }

    /**
     * Set pgexitRef
     *
     * @param integer $pgexitRef
     * @return AbsPageExiste
     */
    public function setPgexitRef($pgexitRef)
    {
        $this->pgexitRef = $pgexitRef;

        return $this;
    }

    /**
     * Get pgexitRef
     *
     * @return integer 
     */
    public function getPgexitRef()
    {
        return $this->pgexitRef;
    }

    /**
     * Set pgexitTitre
     *
     * @param string $pgexitTitre
     * @return AbsPageExiste
     */
    public function setPgexitTitre($pgexitTitre)
    {
        $this->pgexitTitre = $pgexitTitre;

        return $this;
    }

    /**
     * Get pgexitTitre
     *
     * @return string 
     */
    public function getPgexitTitre()
    {
        return $this->pgexitTitre;
    }

    /**
     * Set pgexitDescription
     *
     * @param string $pgexitDescription
     * @return AbsPageExiste
     */
    public function setPgexitDescription($pgexitDescription)
    {
        $this->pgexitDescription = $pgexitDescription;

        return $this;
    }

    /**
     * Get pgexitDescription
     *
     * @return string 
     */
    public function getPgexitDescription()
    {
        return $this->pgexitDescription;
    }

    /**
     * Set pgexitSlug
     *
     * @param string $pgexitSlug
     * @return AbsPageExiste
     */
    public function setPgexitSlug($pgexitSlug)
    {
        $this->pgexitSlug = $pgexitSlug;

        return $this;
    }

    /**
     * Get pgexitSlug
     *
     * @return string 
     */
    public function getPgexitSlug()
    {
        return $this->pgexitSlug;
    }

    /**
     * Set pgexitUrl
     *
     * @param string $pgexitUrl
     * @return AbsPageExiste
     */
    public function setPgexitUrl($pgexitUrl)
    {
        $this->pgexitUrl = $pgexitUrl;

        return $this;
    }

    /**
     * Get pgexitUrl
     *
     * @return string 
     */
    public function getPgexitUrl()
    {
        return $this->pgexitUrl;
    }

    /**
     * Set pgexitType
     *
     * @param string $pgexitType
     * @return AbsPageExiste
     */
    public function setPgexitType($pgexitType)
    {
        $this->pgexitType = $pgexitType;

        return $this;
    }

    /**
     * Get pgexitType
     *
     * @return string 
     */
    public function getPgexitType()
    {
        return $this->pgexitType;
    }

    /**
     * Set pgexitEtat
     *
     * @param integer $pgexitEtat
     * @return AbsPageExiste
     */
    public function setPgexitEtat($pgexitEtat)
    {
        $this->pgexitEtat = $pgexitEtat;

        return $this;
    }

    /**
     * Get pgexitEtat
     *
     * @return integer 
     */
    public function getPgexitEtat()
    {
        return $this->pgexitEtat;
    }
}
