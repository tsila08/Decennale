<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsCommentaire
 *
 * @ORM\Table(name="abs_commentaire")
 * @ORM\Entity
 */
class AbsCommentaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comment_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentId;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_ref", type="string", length=30, nullable=false)
     */
    private $commentRef;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_civilite", type="string", length=4, nullable=false)
     */
    private $commentCivilite;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_prenom", type="string", length=100, nullable=false)
     */
    private $commentPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_nom", type="string", length=200, nullable=false)
     */
    private $commentNom;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_email", type="string", length=200, nullable=false)
     */
    private $commentEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_text", type="string", length=300, nullable=false)
     */
    private $commentText;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_etat", type="integer", nullable=false)
     */
    private $commentEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_date", type="date", nullable=false)
     */
    private $commentDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_note", type="integer", nullable=false)
     */
    private $commentNote;


}
