<?php

Flight::route('/', array ('MainController', 'index'));

Flight::route('/hello', function() {echo "Привет!";});

Flight::route('/test', array ('MainController', 'test'));