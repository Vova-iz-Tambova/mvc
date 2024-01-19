<?php

class MainController {

    public function __construct() {
        // $this->model = new CurrentTimeModel();
        // $data = $this->model->get_data();
    }

    public static function index() {
        Flight::view()->display('template.html', []);
    }
}