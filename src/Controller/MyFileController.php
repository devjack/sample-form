<?php

namespace SampleForm\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use SampleForm\Form\Feature\UploadFormAwareTrait;

class MyFileController extends AbstractActionController
{
    use UploadFormAwareTrait;

    /**
     * @return ViewModel
     *
     * Default/index action.
     */
    public function indexAction() {

        return new ViewModel(
            array(
                'form' => $this->getUploadForm(),
            )
        );
    }
}