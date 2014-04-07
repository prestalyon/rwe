<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments", uniqueConstraints={@ORM\UniqueConstraint(name="comment_no_UNIQUE", columns={"comment_no"})}, indexes={@ORM\Index(name="fk_comments_book1_idx", columns={"book_no"}), @ORM\Index(name="fk_comments_user1_idx", columns={"user"})})
 * @ORM\Entity
 */
class Comments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comment_no", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentNo;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=120, nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="stars", type="integer", nullable=false)
     */
    private $stars;

    /**
     * @var \Application\Entity\Book
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Book")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="book_no", referencedColumnName="book_no")
     * })
     */
    private $bookNo;

    /**
     * @var \Application\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="username")
     * })
     */
    private $user;



    /**
     * Get commentNo
     *
     * @return integer 
     */
    public function getCommentNo()
    {
        return $this->commentNo;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Comments
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set stars
     *
     * @param integer $stars
     * @return Comments
     */
    public function setStars($stars)
    {
        $this->stars = $stars;

        return $this;
    }

    /**
     * Get stars
     *
     * @return integer 
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * Set bookNo
     *
     * @param \Application\Entity\Book $bookNo
     * @return Comments
     */
    public function setBookNo(\Application\Entity\Book $bookNo = null)
    {
        $this->bookNo = $bookNo;

        return $this;
    }

    /**
     * Get bookNo
     *
     * @return \Application\Entity\Book 
     */
    public function getBookNo()
    {
        return $this->bookNo;
    }

    /**
     * Set user
     *
     * @param \Application\Entity\User $user
     * @return Comments
     */
    public function setUser(\Application\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
