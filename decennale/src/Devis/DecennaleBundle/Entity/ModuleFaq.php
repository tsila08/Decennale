<?php

namespace Devis\DecennaleBundle\Entity;

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


}
