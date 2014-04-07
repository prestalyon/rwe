<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="Roles")
 * @ORM\Entity
 */
class Roles
{
    /**
     * @var string
     *
     * @ORM\Column(name="role_name", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roleName = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="read_books", type="boolean", nullable=false)
     */
    private $readBooks = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="create_book", type="boolean", nullable=false)
     */
    private $createBook = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="delete_all_book", type="boolean", nullable=false)
     */
    private $deleteAllBook = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="delete_own_books", type="boolean", nullable=false)
     */
    private $deleteOwnBooks = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="edit_all_books", type="boolean", nullable=false)
     */
    private $editAllBooks = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="edit_own_books", type="boolean", nullable=false)
     */
    private $editOwnBooks = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="approve_book", type="boolean", nullable=false)
     */
    private $approveBook = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="create_keywords", type="boolean", nullable=false)
     */
    private $createKeywords = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="delete_keywords", type="boolean", nullable=false)
     */
    private $deleteKeywords = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="approve_keywords", type="boolean", nullable=false)
     */
    private $approveKeywords = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="delete_user", type="boolean", nullable=false)
     */
    private $deleteUser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="delete_admins", type="boolean", nullable=false)
     */
    private $deleteAdmins = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="change_roles", type="boolean", nullable=false)
     */
    private $changeRoles = '0';



    /**
     * Get roleName
     *
     * @return string 
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * Set readBooks
     *
     * @param boolean $readBooks
     * @return Roles
     */
    public function setReadBooks($readBooks)
    {
        $this->readBooks = $readBooks;

        return $this;
    }

    /**
     * Get readBooks
     *
     * @return boolean 
     */
    public function getReadBooks()
    {
        return $this->readBooks;
    }

    /**
     * Set createBook
     *
     * @param boolean $createBook
     * @return Roles
     */
    public function setCreateBook($createBook)
    {
        $this->createBook = $createBook;

        return $this;
    }

    /**
     * Get createBook
     *
     * @return boolean 
     */
    public function getCreateBook()
    {
        return $this->createBook;
    }

    /**
     * Set deleteAllBook
     *
     * @param boolean $deleteAllBook
     * @return Roles
     */
    public function setDeleteAllBook($deleteAllBook)
    {
        $this->deleteAllBook = $deleteAllBook;

        return $this;
    }

    /**
     * Get deleteAllBook
     *
     * @return boolean 
     */
    public function getDeleteAllBook()
    {
        return $this->deleteAllBook;
    }

    /**
     * Set deleteOwnBooks
     *
     * @param boolean $deleteOwnBooks
     * @return Roles
     */
    public function setDeleteOwnBooks($deleteOwnBooks)
    {
        $this->deleteOwnBooks = $deleteOwnBooks;

        return $this;
    }

    /**
     * Get deleteOwnBooks
     *
     * @return boolean 
     */
    public function getDeleteOwnBooks()
    {
        return $this->deleteOwnBooks;
    }

    /**
     * Set editAllBooks
     *
     * @param boolean $editAllBooks
     * @return Roles
     */
    public function setEditAllBooks($editAllBooks)
    {
        $this->editAllBooks = $editAllBooks;

        return $this;
    }

    /**
     * Get editAllBooks
     *
     * @return boolean 
     */
    public function getEditAllBooks()
    {
        return $this->editAllBooks;
    }

    /**
     * Set editOwnBooks
     *
     * @param boolean $editOwnBooks
     * @return Roles
     */
    public function setEditOwnBooks($editOwnBooks)
    {
        $this->editOwnBooks = $editOwnBooks;

        return $this;
    }

    /**
     * Get editOwnBooks
     *
     * @return boolean 
     */
    public function getEditOwnBooks()
    {
        return $this->editOwnBooks;
    }

    /**
     * Set approveBook
     *
     * @param boolean $approveBook
     * @return Roles
     */
    public function setApproveBook($approveBook)
    {
        $this->approveBook = $approveBook;

        return $this;
    }

    /**
     * Get approveBook
     *
     * @return boolean 
     */
    public function getApproveBook()
    {
        return $this->approveBook;
    }

    /**
     * Set createKeywords
     *
     * @param boolean $createKeywords
     * @return Roles
     */
    public function setCreateKeywords($createKeywords)
    {
        $this->createKeywords = $createKeywords;

        return $this;
    }

    /**
     * Get createKeywords
     *
     * @return boolean 
     */
    public function getCreateKeywords()
    {
        return $this->createKeywords;
    }

    /**
     * Set deleteKeywords
     *
     * @param boolean $deleteKeywords
     * @return Roles
     */
    public function setDeleteKeywords($deleteKeywords)
    {
        $this->deleteKeywords = $deleteKeywords;

        return $this;
    }

    /**
     * Get deleteKeywords
     *
     * @return boolean 
     */
    public function getDeleteKeywords()
    {
        return $this->deleteKeywords;
    }

    /**
     * Set approveKeywords
     *
     * @param boolean $approveKeywords
     * @return Roles
     */
    public function setApproveKeywords($approveKeywords)
    {
        $this->approveKeywords = $approveKeywords;

        return $this;
    }

    /**
     * Get approveKeywords
     *
     * @return boolean 
     */
    public function getApproveKeywords()
    {
        return $this->approveKeywords;
    }

    /**
     * Set deleteUser
     *
     * @param boolean $deleteUser
     * @return Roles
     */
    public function setDeleteUser($deleteUser)
    {
        $this->deleteUser = $deleteUser;

        return $this;
    }

    /**
     * Get deleteUser
     *
     * @return boolean 
     */
    public function getDeleteUser()
    {
        return $this->deleteUser;
    }

    /**
     * Set deleteAdmins
     *
     * @param boolean $deleteAdmins
     * @return Roles
     */
    public function setDeleteAdmins($deleteAdmins)
    {
        $this->deleteAdmins = $deleteAdmins;

        return $this;
    }

    /**
     * Get deleteAdmins
     *
     * @return boolean 
     */
    public function getDeleteAdmins()
    {
        return $this->deleteAdmins;
    }

    /**
     * Set changeRoles
     *
     * @param boolean $changeRoles
     * @return Roles
     */
    public function setChangeRoles($changeRoles)
    {
        $this->changeRoles = $changeRoles;

        return $this;
    }

    /**
     * Get changeRoles
     *
     * @return boolean 
     */
    public function getChangeRoles()
    {
        return $this->changeRoles;
    }
}
