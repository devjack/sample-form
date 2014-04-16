<?php

namespace SampleForm\View\Helper;

use Zend\Form\View\Helper\FormRow;

class FormElementPartial extends FormRow
{
    /**
     * Used as a way to render a partial for any type of form element where the default
     * form-row.phtml file will delegate to the correct view script based on the element
     * 'type' attribute.
     *
     * @param null|\Zend\Form\ElementInterface $element
     * @param null|string $labelPosition
     * @param null|bool $renderErrors
     * @param null|string $partial
     * @return string|FormRow
     */
    public function __invoke($element = null, $labelPosition = null, $renderErrors = null, $partial = null)
    {
        if (! is_null($partial)) {
            $partial = (string) $partial;
        } else {
            $partial = 'partial/form/form-row';
        }

        return parent::__invoke($element, $labelPosition, $renderErrors, $partial);
    }
}
