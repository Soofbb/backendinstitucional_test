<?php
namespace InstitucionalCctp\Backend\Controllers;

class HomeController {
    public function index() {
        return "<h1>Página Institucional</h1>
                <a href='/campus'>Ir al Campus Virtual</a>";
    }
}