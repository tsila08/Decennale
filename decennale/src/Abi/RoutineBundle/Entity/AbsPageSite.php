<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPageSite
 *
 * @ORM\Table(name="abs_page_site")
 * @ORM\Entity
 */
class AbsPageSite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="page_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pageId;

    /**
     * @var string
     *
     * @ORM\Column(name="page_title", type="string", length=255, nullable=false)
     */
    private $pageTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="page_description", type="string", length=255, nullable=false)
     */
    private $pageDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="page_motcles", type="string", length=255, nullable=false)
     */
    private $pageMotcles;

    /**
     * @var string
     *
     * @ORM\Column(name="page_url", type="string", length=255, nullable=false)
     */
    private $pageUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="page_texte", type="text", nullable=false)
     */
    private $pageTexte;

    /**
     * @var integer
     *
     * @ORM\Column(name="page_info", type="integer", nullable=false)
     */
    private $pageInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="page_type", type="string", length=100, nullable=false)
     */
    private $pageType;

    /**
     * @var integer
     *
     * @ORM\Column(name="page_etat", type="integer", nullable=false)
     */
    private $pageEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="page_date", type="date", nullable=false)
     */
    private $pageDate;



    /**
     * Get pageId
     *
     * @return integer 
     */
    public function getPageId()
    {
        return $this->pageId;
    }

    /**
     * Set pageTitle
     *
     * @param string $pageTitle
     * @return AbsPageSite
     */
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return string 
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    /**
     * Set pageDescription
     *
     * @param string $pageDescription
     * @return AbsPageSite
     */
    public function setPageDescription($pageDescription)
    {
        $this->pageDescription = $pageDescription;

        return $this;
    }

    /**
     * Get pageDescription
     *
     * @return string 
     */
    public function getPageDescription()
    {
        return $this->pageDescription;
    }

    /**
     * Set pageMotcles
     *
     * @param string $pageMotcles
     * @return AbsPageSite
     */
    public function setPageMotcles($pageMotcles)
    {
        $this->pageMotcles = $pageMotcles;

        return $this;
    }

    /**
     * Get pageMotcles
     *
     * @return string 
     */
    public function getPageMotcles()
    {
        return $this->pageMotcles;
    }

    /**
     * Set pageUrl
     *
     * @param string $pageUrl
     * @return AbsPageSite
     */
    public function setPageUrl($pageUrl)
    {
        $this->pageUrl = $pageUrl;

        return $this;
    }

    /**
     * Get pageUrl
     *
     * @return string 
     */
    public function getPageUrl()
    {
        return $this->pageUrl;
    }

    /**
     * Set pageTexte
     *
     * @param string $pageTexte
     * @return AbsPageSite
     */
    public function setPageTexte($pageTexte)
    {
        $this->pageTexte = $pageTexte;

        return $this;
    }

    /**
     * Get pageTexte
     *
     * @return string 
     */
    public function getPageTexte()
    {
        return $this->pageTexte;
    }

    /**
     * Set pageInfo
     *
     * @param integer $pageInfo
     * @return AbsPageSite
     */
    public function setPageInfo($pageInfo)
    {
        $this->pageInfo = $pageInfo;

        return $this;
    }

    /**
     * Get pageInfo
     *
     * @return integer 
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    /**
     * Set pageType
     *
     * @param string $pageType
     * @return AbsPageSite
     */
    public function setPageType($pageType)
    {
        $this->pageType = $pageType;

        return $this;
    }

    /**
     * Get pageType
     *
     * @return string 
     */
    public function getPageType()
    {
        return $this->pageType;
    }

    /**
     * Set pageEtat
     *
     * @param integer $pageEtat
     * @return AbsPageSite
     */
    public function setPageEtat($pageEtat)
    {
        $this->pageEtat = $pageEtat;

        return $this;
    }

    /**
     * Get pageEtat
     *
     * @return integer 
     */
    public function getPageEtat()
    {
        return $this->pageEtat;
    }

    /**
     * Set pageDate
     *
     * @param \DateTime $pageDate
     * @return AbsPageSite
     */
    public function setPageDate($pageDate)
    {
        $this->pageDate = $pageDate;

        return $this;
    }

    /**
     * Get pageDate
     *
     * @return \DateTime 
     */
    public function getPageDate()
    {
        return $this->pageDate;
    }
}
