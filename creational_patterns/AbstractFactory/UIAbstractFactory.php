<?php

require_once 'Button.php';
require_once 'Form.php';

/**
 * Abstract Factory Interface for creating UI components
 */
interface UIAbstractFactory
{
    /**
     * Create a Button component
     * 
     * @return Button
     */
    public function createButton(): Button;

    /**
     * Create a Form component
     * 
     * @return Form
     */
    public function createForm(): Form;
}

