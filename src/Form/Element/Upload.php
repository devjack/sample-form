<?php

namespace SampleForm\Form\Element;


use \Zend\Form\Element\File;
use \Zend\InputFilter\InputProviderInterface;

class Upload extends File implements InputProviderInterface {

    protected $maxUploadSize = 0;

    public function getInputSpecification() {

        $parent = parent::getInputSpecification();


        $specification = array_merge(
            $parent,
            array(
                'name' => $this->getName(),
                'required' => true,
                'type' => 'Zend\InputFilter\FileInput',
                'filters' => array(
                ),
                'validators' => array(
                    new \Zend\Validator\File\UploadFile(),
                    new \Zend\Validator\File\Size(array(
                        'max' => $this->maxUploadSize,
                    )),
                ),
            )
        );
        return $specification;
    }

    public function setMaxUploadSize($size) {
        $this->maxUploadSize = $size;
    }

}
 