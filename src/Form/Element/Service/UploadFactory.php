<?php

namespace FourForms\Form\Element\Service;

use SampleForm\Form\Element\Upload;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class UploadFactory implements FactoryInterface {

    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $sm = $serviceLocator->getServiceLocator();

        $element = new Upload();

        $config = $sm->get('Config');

        if(array_key_exists('uploads', $config)
            && array_key_exists('max', $config['uploads'])) {
            $element->setMaxUploadSize($config['uploads']['max']);
        } else {
            // Default the max size to 1MB
            $element->setMaxUploadSize(1024*1024); // bytes in a MB
        }

        return $element;

    }

} 