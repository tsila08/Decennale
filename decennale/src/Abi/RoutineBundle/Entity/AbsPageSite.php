<?php

namespace Devis\DecennaleBundle\Entity;

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


}
