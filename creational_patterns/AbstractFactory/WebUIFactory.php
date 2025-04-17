<?php
require_once 'UIAbstractFactory.php';
require_once 'WebButton.php';
require_once 'WebForm.php';

class WebUIFactory implements UIAbstractFactory {
    public function createButton(): Button {
        return new WebButton();
    }

    public function createForm(): Form {
        return new WebForm();
    }
}
