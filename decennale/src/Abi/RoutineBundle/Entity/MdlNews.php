<?php

namespace Abi\RoutineBundle\Entity;

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



    /**
     * Get newsId
     *
     * @return integer 
     */
    public function getNewsId()
    {
        return $this->newsId;
    }

    /**
     * Set newsTitre
     *
     * @param string $newsTitre
     * @return MdlNews
     */
    public function setNewsTitre($newsTitre)
    {
        $this->newsTitre = $newsTitre;

        return $this;
    }

    /**
     * Get newsTitre
     *
     * @return string 
     */
    public function getNewsTitre()
    {
        return $this->newsTitre;
    }

    /**
     * Set newsDescrition
     *
     * @param string $newsDescrition
     * @return MdlNews
     */
    public function setNewsDescrition($newsDescrition)
    {
        $this->newsDescrition = $newsDescrition;

        return $this;
    }

    /**
     * Get newsDescrition
     *
     * @return string 
     */
    public function getNewsDescrition()
    {
        return $this->newsDescrition;
    }

    /**
     * Set newsDetaille
     *
     * @param string $newsDetaille
     * @return MdlNews
     */
    public function setNewsDetaille($newsDetaille)
    {
        $this->newsDetaille = $newsDetaille;

        return $this;
    }

    /**
     * Get newsDetaille
     *
     * @return string 
     */
    public function getNewsDetaille()
    {
        return $this->newsDetaille;
    }

    /**
     * Set newsSlug
     *
     * @param string $newsSlug
     * @return MdlNews
     */
    public function setNewsSlug($newsSlug)
    {
        $this->newsSlug = $newsSlug;

        return $this;
    }

    /**
     * Get newsSlug
     *
     * @return string 
     */
    public function getNewsSlug()
    {
        return $this->newsSlug;
    }

    /**
     * Set newsEtat
     *
     * @param integer $newsEtat
     * @return MdlNews
     */
    public function setNewsEtat($newsEtat)
    {
        $this->newsEtat = $newsEtat;

        return $this;
    }

    /**
     * Get newsEtat
     *
     * @return integer 
     */
    public function getNewsEtat()
    {
        return $this->newsEtat;
    }

    /**
     * Set newsDate
     *
     * @param \DateTime $newsDate
     * @return MdlNews
     */
    public function setNewsDate($newsDate)
    {
        $this->newsDate = $newsDate;

        return $this;
    }

    /**
     * Get newsDate
     *
     * @return \DateTime 
     */
    public function getNewsDate()
    {
        return $this->newsDate;
    }
}
