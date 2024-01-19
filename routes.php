<?php

Flight::route('/', array ('MainController', 'index'));

Flight::route('/data', function() {echo date("Y-m-d h:i");});

// Flight::route('/test', array ('MainController', 'test'));