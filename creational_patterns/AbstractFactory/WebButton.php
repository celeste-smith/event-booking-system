<?php
require_once 'Button.php';

class WebButton implements Button {
    public function render() {
        echo "Rendering a button for Web UI.<br>";
    }
}
