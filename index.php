<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include dirname(__FILE__) . '/vendor/autoload.php';

/**
 * Initiate Twig, and register to Flight
 */
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem(dirname(__FILE__) . '/views');
$twigConfig = array(
    'cache' => './cache/twig/',
    'cache' => false,
    'debug' => true,
);
Flight::register('view', 'Twig_Enviroment', array($loader, $twigConfig), function($twig) {
    $twig->addExtension(new Twig_Extension_Debug());
});

/**
 * Add /controllers to the include-path
 */
Flight::path(dirname(__FILE__) . '/controllers');
Flight::path(dirname(__FILE__) . '/models');

/**
 * Include routes
 */
include dirname(__FILE__) . '/routes.php';

Flight::start();