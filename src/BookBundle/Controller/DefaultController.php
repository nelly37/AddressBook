<?php

namespace BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BookBundle\Entity\Book;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BookBundle:Default:index.html.twig');
    }
}
