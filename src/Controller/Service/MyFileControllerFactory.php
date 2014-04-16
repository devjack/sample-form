<?php
namespace SampleForm\Controller\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

use SampleForm\Controller\MyFileController;
use SampleForm\Form\UploadForm;

class MyFileControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $sl = $serviceLocator->getServiceLocator();

        $controller = new MyFileController();

        /**
         * @var UploadForm
         */
        $uploadForm = $sl->get('FormElementManager')->get('sample-form/uploadform');

        $controller->setUploadForm($uploadForm);

        return $controller;
    }

}