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
);