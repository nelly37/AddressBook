<?php

namespace BookBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use BookBundle\Entity\Book;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    private $userBook;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Book")
     */
    protected $book;

    public function getBook()
    {
        return $this->book;
    }

    public function setBook($i){
        $this->book = $i;
    }

    public function __construct()
    {
        parent::__construct();
    }
}