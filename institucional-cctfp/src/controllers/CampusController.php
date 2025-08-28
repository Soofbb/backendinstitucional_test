<?php
namespace InstitucionalCctp\Backend\Controllers;

class CampusController {
    public function redirect() {
        header("Location: http://moodle.test");
        exit;
    }
}