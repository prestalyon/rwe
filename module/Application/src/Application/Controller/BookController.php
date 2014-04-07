<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BookController extends AbstractActionController
{
    public function indexAction()
    {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $books = $em->getRepository('Application\Entity\Book')->findAll();
        return new ViewModel(array('books' => $books));
    }
    
    public function readAction() {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $book = $em->getRepository('Application\Entity\Book')->findOneByBookNo($this->params('id'));
        return new ViewModel(array('book' => $book));
    }
    
    public function createAction() {
        return new ViewModel();
    }
}
