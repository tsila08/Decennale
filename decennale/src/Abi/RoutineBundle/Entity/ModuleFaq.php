<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuleFaq
 *
 * @ORM\Table(name="module_faq")
 * @ORM\Entity
 */
class ModuleFaq
{
    /**
     * @var integer
     *
     * @ORM\Column(name="faq_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $faqId;

    /**
     * @var string
     *
     * @ORM\Column(name="faq_question", type="string", length=200, nullable=false)
     */
    private $faqQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="faq_reponse", type="string", length=400, nullable=false)
     */
    private $faqReponse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="faq_date", type="date", nullable=false)
     */
    private $faqDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="faq_etat", type="integer", nullable=false)
     */
    private $faqEtat;



    /**
     * Get faqId
     *
     * @return integer 
     */
    public function getFaqId()
    {
        return $this->faqId;
    }

    /**
     * Set faqQuestion
     *
     * @param string $faqQuestion
     * @return ModuleFaq
     */
    public function setFaqQuestion($faqQuestion)
    {
        $this->faqQuestion = $faqQuestion;

        return $this;
    }

    /**
     * Get faqQuestion
     *
     * @return string 
     */
    public function getFaqQuestion()
    {
        return $this->faqQuestion;
    }

    /**
     * Set faqReponse
     *
     * @param string $faqReponse
     * @return ModuleFaq
     */
    public function setFaqReponse($faqReponse)
    {
        $this->faqReponse = $faqReponse;

        return $this;
    }

    /**
     * Get faqReponse
     *
     * @return string 
     */
    public function getFaqReponse()
    {
        return $this->faqReponse;
    }

    /**
     * Set faqDate
     *
     * @param \DateTime $faqDate
     * @return ModuleFaq
     */
    public function setFaqDate($faqDate)
    {
        $this->faqDate = $faqDate;

        return $this;
    }

    /**
     * Get faqDate
     *
     * @return \DateTime 
     */
    public function getFaqDate()
    {
        return $this->faqDate;
    }

    /**
     * Set faqEtat
     *
     * @param integer $faqEtat
     * @return ModuleFaq
     */
    public function setFaqEtat($faqEtat)
    {
        $this->faqEtat = $faqEtat;

        return $this;
    }

    /**
     * Get faqEtat
     *
     * @return integer 
     */
    public function getFaqEtat()
    {
        return $this->faqEtat;
    }
}
