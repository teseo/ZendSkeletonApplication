<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Doctrine\Common\Util\Debug;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use ZfcUser\Mapper\User;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $em = $this->getServiceLocator()->get('zfcuser_doctrine_em');
          $user1  = $em->find('Application\Entity\User', 1);
          \Zend\Debug\Debug::dump($user1);
/*        $user1->setUsername('pepilla-' . time());
        $em->getCache()->evictEntity('Application\Entity\User', 1);
        $em->persist($user1);
        $em->flush();
        $user1->setUsername('pepilla-' . time());
        $em->getCache()->evictEntity('Application\Entity\User', 1);
        $em->persist($user1);
        $em->flush();
        $user1->setUsername('pepilla-a' . time());
        $em->getCache()->evictEntity('Application\Entity\User', 1);
        $em->persist($user1);
        $em->flush();     */                    // Hit database to update the row and update cache



        /** @var User $userMapper */
       // $userMapper = $this->getServiceLocator()->get('zfcuser_user_mapper');
       $allUsers = $em->getRepository('Application\Entity\User')->findAll();
       \Zend\Debug\Debug::dump($allUsers);

        return new ViewModel();
    }
}
