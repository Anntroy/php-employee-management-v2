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

  function displayUser($email)
  {
    $data = $this->model->getUser($email);
    print_r($data);
  }
}
