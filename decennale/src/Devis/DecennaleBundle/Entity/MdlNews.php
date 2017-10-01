<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNews
 *
 * @ORM\Table(name="mdl_news")
 * @ORM\Entity
 */
class MdlNews
{
    /**
     * @var integer
     *
     * @ORM\Column(name="news_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $newsId;

    /**
     * @var string
     *
     * @ORM\Column(name="news_titre", type="string", length=100, nullable=false)
     */
    private $newsTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="news_descrition", type="string", length=200, nullable=false)
     */
    private $newsDescrition;

    /**
     * @var string
     *
     * @ORM\Column(name="news_detaille", type="text", nullable=false)
     */
    private $newsDetaille;

    /**
     * @var string
     *
     * @ORM\Column(name="news_slug", type="string", length=150, nullable=false)
     */
    private $newsSlug;

    /**
     * @var integer
     *
     * @ORM\Column(name="news_etat", type="integer", nullable=false)
     */
    private $newsEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="news_date", type="date", nullable=false)
     */
    private $newsDate;


}
