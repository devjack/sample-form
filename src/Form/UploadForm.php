<?php

namespace SampleForm\Form;

use SampleForm\Form\FormBaseAstract;

class UploadForm extends FormBaseAbstract {
    public function __construct($name = '')
    {
        parent::__construct($name);

    }

    public function init() {
        parent::init();

        $this->add(array(
            'type' => 'text',
            'name' => 'title',
            'options' => array(
                'label' => 'Document title',
            ),
            'attributes' => array(
                'id' => 'document-title',
                'class' => '',
            ),
        ));

        $this->add(array(
            'type' => 'SampleForm\Form\Element\DateTime',
            'name' => 'created_date',
            'options' => array(
                'label' => 'Document date',
                'format' => 'd.m.Y',
            ),
            'attributes' => array(
                'id' => 'document-date',
                'class' => 'neuradatepicker',
            ),
        ));

        $this->add(array(
            'type' => 'SampleForm\Form\Element\Upload',
            'name' => 'file',
            'options' => array(
                'label' => 'Browse',
            ),
            'attributes' => array(
                'id' => 'file',
                'class' => '',
            ),
        ));

        $this->add(array(
            'type' => '\\Zend\Form\Element\Submit',
            'name' => 'submit',
            'options' => array(
                'label' => 'Upload',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'btn save-assessment',
                'label' => 'Upload',
                'id' => 'submit'
            ),
        ));
    }

    public function getInputFilterSpecification() {
        return array (
            'title' => array(
                'required' => true,
                'filters'  => array(
                ),
            ),
            'created_date' => array(
                'required' => true,
                'filters'  => array(
                ),
            ),
        );
    }
} 