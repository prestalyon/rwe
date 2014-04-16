<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BookController extends AbstractActionController
{
    /**
     *
     * @return \Zend\View\Model\ModelInterface
     */
    private function getViewModel()
    {
        $acceptCriteria = array(
            'Zend\View\Model\ViewModel' => array(
                'text/html',
            ),
            'Zend\View\Model\JsonModel' => array(
                'application/json',
            )
        );

        return $this->acceptableViewModelSelector($acceptCriteria);
    }
    
    public function indexAction()
    {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $books = $em->getRepository('Application\Entity\Book')->findAll();
        return new ViewModel(array('books' => $books));
    }
    
    public function readAction() {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $book = $em->getRepository('Application\Entity\Book')->findOneByBookNo($this->params('id'));
        return $this->getViewModel()->setVariable('book', $book);
    }
    
    public function createAction() {
        return new ViewModel();
    }
}
