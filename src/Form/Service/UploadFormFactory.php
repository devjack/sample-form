<?php

namespace SampleForm\Form\Service;

use SampleForm\Entity\Document;
use SampleForm\Form\UploadForm;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\ClassMethods;

class UploadFormFactory implements FactoryInterface {

    /**
     * Create UploadForm
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return UploadForm
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $form = new UploadForm();
        $form->setHydrator(new ClassMethods());

        // Add an empty entity for the form to bind to and hydrate on validation.
        $document = new Document();
        $form->bind($document);

        return $form;
    }

}