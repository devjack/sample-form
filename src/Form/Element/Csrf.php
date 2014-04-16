<?php


namespace SampleForm\Form\Element;

use Zend\Form\Element\Csrf as ZendCsrf;

class Csrf extends ZendCsrf
{
    /**
     * Provide default input rules for this element
     *
     * Attaches the captcha as a validator.
     *
     * @return array
     */
    public function getInputSpecification()
    {
        $inputSpecification = parent::getInputSpecification();
        $validator = $this->getCsrfValidator();
        $validator->setMessage(
            'The security tokens do not match due to time limit expiry, please try to submit this form again',
            $validator::NOT_SAME
        );
        return $inputSpecification;
    }
}