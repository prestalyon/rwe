<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keyword
 *
 * @ORM\Table(name="Keyword", indexes={@ORM\Index(name="fk_Keyword_book1_idx", columns={"book_no"})})
 * @ORM\Entity
 */
class Keyword
{
    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $keyword;

    /**
     * @var boolean
     *
     * @ORM\Column(name="approved", type="boolean", nullable=false)
     */
    private $approved = '0';

    /**
     * @var \Application\Entity\Book
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Application\Entity\Book")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="book_no", referencedColumnName="book_no")
     * })
     */
    private $bookNo;



    /**
     * Set keyword
     *
     * @param string $keyword
     * @return Keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string 
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set approved
     *
     * @param boolean $approved
     * @return Keyword
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean 
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set bookNo
     *
     * @param \Application\Entity\Book $bookNo
     * @return Keyword
     */
    public function setBookNo(\Application\Entity\Book $bookNo)
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
}
