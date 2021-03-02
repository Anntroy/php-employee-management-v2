<?php

class Model extends Database {
  private $connection;
  private $strquery;

  function __construct()
  {
    $this->connection = $this->connect();
    // $this->connection = $this->connection->connect();
  }

}