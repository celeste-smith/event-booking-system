<?php
require_once 'Button.php';

class MobileButton implements Button {
    public function render() {
        echo "Rendering a button for Mobile UI.<br>";
    }
}
