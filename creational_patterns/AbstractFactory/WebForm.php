<?php
require_once 'Form.php';

class WebForm implements Form {
    public function display() {
        echo "Displaying a form for Web UI.<br>";
    }
}
