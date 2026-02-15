<?php

require 'utils/Router.php';

$router = new Router();

$router->add('/',function(){
  include "views/inicio.php";
});

$router->run();

?>