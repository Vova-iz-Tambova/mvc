<?php
class MainController {

    public function __construct() {}

    // public static function index() {
    //     echo 'Привет Мир!';
    // }

    public static function index() {
        Flight::view()->display('template.html', []);
    }
}