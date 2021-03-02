<?php

spl_autoload_register(function ($class) {
  if (file_exists(LIBS . 'classes/' . $class . '.php')) {
    require_once(LIBS . 'classes/' . $class . '.php');
  }
});

$controllerFile = "controllers/" . $controller . "Controller.php";
if (file_exists($controllerFile)) {
  require_once($controllerFile);
  $class = ucfirst($controller);
  $controller = new $class();
  if(method_exists($controller, $method)){
    $controller->{$method}($params);
  } else {
    require_once("controllers/errorController.php");
  }
} else {
  require_once("controllers/errorController.php");
}
