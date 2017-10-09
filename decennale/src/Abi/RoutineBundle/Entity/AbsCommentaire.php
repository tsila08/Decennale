<?php

namespace Abi\RoutineBundle\Entity;

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
    public $commentId;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_ref", type="string", length=30, nullable=false)
     */
    public $commentRef;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_civilite", type="string", length=4, nullable=false)
     */
    public $commentCivilite;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_prenom", type="string", length=100, nullable=false)
     */
    public $commentPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_nom", type="string", length=200, nullable=false)
     */
    public $commentNom;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_email", type="string", length=200, nullable=false)
     */
    public $commentEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_text", type="string", length=300, nullable=false)
     */
    public $commentText;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_etat", type="integer", nullable=false)
     */
    public $commentEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_date", type="date", nullable=false)
     */
    public $commentDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_note", type="integer", nullable=false)
     */
    public $commentNote;

     /**
     * Set commentRef
     *
     * @param string $commentRef
     * @return AbsCommentaire
     */
    public function setCommentRef($commentRef)
    {
        $this->commentRef = $commentRef;

        return $this;
    }

    /**
     * Set commentEtat
     *
     * @param integer $commentEtat
     * @return AbsCommentaire
     */
    public function setCommentEtat($commentEtat)
    {
        $this->commentEtat = $commentEtat;

        return $this;
    }

    
    /**
     * Set commentDate
     *
     * @param date $commentDate
     * @return AbsCommentaire
     */
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;

        return $this;
    }

     /**
     * Get commentDate
     *
     * @return Date
     */
    public function getCommentDate()
    {
        return $this->CommentDate;
    }

   
}
