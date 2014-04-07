<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ProfileController extends AbstractActionController
{
    public function indexAction()
    {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $users = $em->getRepository('Application\Entity\User')->findAll();
        return new ViewModel(array('users'=>$users));
    }
    
    public function showAction()
    {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $user = $em->getRepository('Application\Entity\User')->findOneByUsername($this->params('id'));
        return new ViewModel(array('user'=>$user));
    }
}
