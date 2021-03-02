<?php
require_once("./config/db.php");

class Database
{

  private $connect;

  public function __construct()
  {
  }

  function connect()
  {
    try {
      $connection = 'mysql:host=localhost;dbname=Employee_Management;user=root;password=Assembler;port=3306';
      $options = [
        PDO::ATTR_ERRMODE           =>  PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES  => FALSE,
      ];

      $this->connect = new PDO($connection, "root", "Assembler", $options);

    } catch (PDOException $e) {
      print_r('Error connection: ' . $e->getMessage());
    }
  }

  function getConnect(){
    return $this->connect;
  }
}
