<?php


namespace SampleForm\Form\Feature;

use SampleForm\Form\UploadForm;

trait UploadFormAwareTrait {

    /**
     * @var UploadForm $uploadform
     */
    protected $uploadForm = null;

    /**
     * @param UploadForm $uploadForm
     */
    public function setUploadForm($uploadForm)
    {
        $this->uploadForm = $uploadForm;
    }

    /**
     * @return UploadForm
     */
    public function getUploadForm()
    {
        if(is_null($this->uploadForm)) {
            throw new \LogicException("Upload Form must be configured.");
        }
        return $this->uploadForm;
    }



} 