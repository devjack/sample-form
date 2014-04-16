<?php

namespace SampleForm\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class MyFileController extends AbstractActionController
{
    /**
     * @return ViewModel
     *
     * Default/index action.
     */
    public function indexAction() {

        return new ViewModel();
    }
}