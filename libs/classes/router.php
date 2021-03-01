<?php

function debugger($item)
{
  echo '<pre>';
  print_r($item);
  echo '</pre>';
}

require_once("./config/constants.php");

$url = !empty($_GET['url']) ? $_GET['url'] : 'login/login';

$arrUrl = explode('/', $url);

$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = "";

if (!empty($arrUrl[1])) {
  if ($arrUrl[1] != "") {
    $method = $arrUrl[1];
  }
}

if (!empty($arrUrl[2])) {
  if ($arrUrl[2] != "") {
    for ($i = 2; $i < count($arrUrl); $i++) {
      $params .= $arrUrl[$i] . ",";
    }
    $params = trim($params, ',');
  }
}

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
    echo "Method do not exist";
  }
} else {
  echo "Controller do not exist";
}

debugger($controller);
debugger($method);
debugger($params);
