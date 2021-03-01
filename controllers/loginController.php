<?php

class Login extends Controller {

  function __construct(){
      parent::__construct();
    }
  public function login($params)
  {
    // $this->view->render('login/login');
    echo "Login method: " . $params;

  }
  public function datos($params)
  {
    echo "Dato recibido: " . $params;
  }
}
