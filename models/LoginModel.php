<?php

class LoginModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  function getUser($email){
    $sql = "SELECT * FROM users WHERE user_email=$email";
    $result = $this->connection->prepare($sql);
    $result->execute();
    $data = $result->fetch(PDO::FETCH_ASSOC);
    return $data;
  }

}
