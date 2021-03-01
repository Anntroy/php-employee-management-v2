<?php

class Login extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function login()
  {
    $data['login_error'] = "Incorrect credentials";
    $this->view->getView($this, 'login', $data);
  }
}
