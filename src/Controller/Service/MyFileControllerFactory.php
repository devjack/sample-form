<?php
namespace SampleForm\Controller\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

use SampleForm\Controller\MyFileController;

class MyFileControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new MyFileController();
    }

}