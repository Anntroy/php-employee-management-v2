<?php

class View {

    function getView($controller, $view, $data="") {
      echo "<br>";
      echo "aqui";
      echo "<br>";
      $controller = get_class($controller);
      if($controller == "Login"){
        $view = VIEWS . $view . ".php";
      }
      else {
        $view = VIEWS . $controller . "/" . $view . ".php";
      }
      require_once($view);
    }
}
