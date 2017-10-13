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

   

    /**
     * Get commentId
     *
     * @return integer 
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * Get commentRef
     *
     * @return string 
     */
    public function getCommentRef()
    {
        return $this->commentRef;
    }

    /**
     * Set commentCivilite
     *
     * @param string $commentCivilite
     * @return AbsCommentaire
     */
    public function setCommentCivilite($commentCivilite)
    {
        $this->commentCivilite = $commentCivilite;

        return $this;
    }

    /**
     * Get commentCivilite
     *
     * @return string 
     */
    public function getCommentCivilite()
    {
        return $this->commentCivilite;
    }

    /**
     * Set commentPrenom
     *
     * @param string $commentPrenom
     * @return AbsCommentaire
     */
    public function setCommentPrenom($commentPrenom)
    {
        $this->commentPrenom = $commentPrenom;

        return $this;
    }

    /**
     * Get commentPrenom
     *
     * @return string 
     */
    public function getCommentPrenom()
    {
        return $this->commentPrenom;
    }

    /**
     * Set commentNom
     *
     * @param string $commentNom
     * @return AbsCommentaire
     */
    public function setCommentNom($commentNom)
    {
        $this->commentNom = $commentNom;

        return $this;
    }

    /**
     * Get commentNom
     *
     * @return string 
     */
    public function getCommentNom()
    {
        return $this->commentNom;
    }

    /**
     * Set commentEmail
     *
     * @param string $commentEmail
     * @return AbsCommentaire
     */
    public function setCommentEmail($commentEmail)
    {
        $this->commentEmail = $commentEmail;

        return $this;
    }

    /**
     * Get commentEmail
     *
     * @return string 
     */
    public function getCommentEmail()
    {
        return $this->commentEmail;
    }

    /**
     * Set commentText
     *
     * @param string $commentText
     * @return AbsCommentaire
     */
    public function setCommentText($commentText)
    {
        $this->commentText = $commentText;

        return $this;
    }

    /**
     * Get commentText
     *
     * @return string 
     */
    public function getCommentText()
    {
        return $this->commentText;
    }

    /**
     * Get commentEtat
     *
     * @return integer 
     */
    public function getCommentEtat()
    {
        return $this->commentEtat;
    }

    /**
     * Set commentNote
     *
     * @param integer $commentNote
     * @return AbsCommentaire
     */
    public function setCommentNote($commentNote)
    {
        $this->commentNote = $commentNote;

        return $this;
    }

    /**
     * Get commentNote
     *
     * @return integer 
     */
    public function getCommentNote()
    {
        return $this->commentNote;
    }
}
