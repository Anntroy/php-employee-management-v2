
<?php

class Controller
{

  function __construct()
  {
    $this->view = new View();
    $this->loadModel(get_class($this) . "Model");

    // $this->view = new View();
  }

  function loadModel($model)
  {
    $modelFile = 'models/' . $model . '.php';

    if (file_exists($modelFile)) {
      require_once($modelFile);

      $this->model = new $model();
    }
  }
}

?>