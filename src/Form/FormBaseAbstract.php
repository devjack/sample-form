<?php

namespace SampleForm\Form;

use SampleForm\Form\Element\Csrf;

use Zend\Form\Form;
use Zend\InputFilter\InputFilterProviderInterface;

abstract class FormBaseAbstract extends Form implements InputFilterProviderInterface
{
    public function __construct($name = '')
    {
        parent::__construct($name);

        // Csrf
        $this->add(array(
            'type' => 'SampleForm\Form\Element\Csrf',
            'name' => 'csrf',
            'options' => array(
                'csrf_options' => array(
                    'timeout' => 1800 // 30 minutes
                ),
            ),
        ));

        // Submit
        $this->add(array(
            'name' => 'save',
            'required' => true,
            'attributes' => array(
                'type'  => 'submit',
                'class' => 'btn',
                'label' => 'Save',
            ),
        ));
    }
}