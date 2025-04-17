<?php
require_once 'UIAbstractFactory.php';
require_once 'MobileButton.php';
require_once 'MobileForm.php';

class MobileUIFactory implements UIAbstractFactory {
    public function createButton(): Button {
        return new MobileButton();
    }

    public function createForm(): Form {
        return new MobileForm();
    }
}
