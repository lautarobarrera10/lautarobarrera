<?php

require 'utils/Router.php';
require 'controllers/HomeController.php';

$router = new Router();

$router->add('/',function(){
  include "views/inicio.php";
});

$router->run();

?>