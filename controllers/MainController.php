<?php
class MainController {

    public function __construct() {}

    public static function index() {
        echo 'Привет Мир!';
    }

    public static function test($name) {
        Flight::view()->display('template.html', []);
    }
}