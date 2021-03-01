<?php

require "config/config.php";

class Database
{

  private $connect;

  public function __construct()
  {
    $connection = "mysql:host=" . DB_HOST . ";dbname=" . DB . ";charset=" . DB_CHARSET;
    try {

      $this->connect = new PDO($connection, DB_USER, DB_PASSWORD);
      $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      print_r('Error connection: ' . $e->getMessage());
    }
  }

  function connect()
  {
    return $this->connect;
  }
}
