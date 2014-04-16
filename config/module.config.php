<?php

return array (
    'controllers' => array(
        'factories' => array(
            'SampleForm\Controller\MyFileController' => 'SampleForm\Controller\Service\MyFileControllerFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'user-filter' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/upload',
                    'defaults' => array(
                        'controller' => 'SampleForm\Controller\MyFileController',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),

    'form_elements' => array(
        'factories' => array(
            // Custom Elements
            'FourForms\Form\Element\Upload' => 'FourForms\Form\Element\Service\UploadFactory',

            // Forms
            'sample-form/uploadform' =>
                'SampleForm\Form\Service\UploadFormFactory',
        )
    ),

        /**
         * View helpers
         */
    'view_helpers' => array(
        'invokables' => array(
            /**
             * Form helpers
             * FormElementPartial leverages extension of the Zend\Form\FormRow view helper to
             * provide explicit control of rendering form elements via partials.
             *
             * Out of the box, only certain form elements can be rendered using partials.
             *
             * The partial view script for form-row.phtml delegates responsibility for rendering
             * individual form elements to an appropriate view script.
             */
            'formElementPartial' => 'SampleForm\View\Helper\FormElementPartial',
        )
    ),
);