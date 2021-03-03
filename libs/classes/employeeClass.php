<?php

class Employee{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbname = "Employee_Management";

    function __construct(){

    }
    function getEmployeeInfo(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' .$this->dbname;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;

        // if(isset($_POST['postName'])){
        //     $id = $_POST['id'];

        //     $query = "SELECT * FROM 'employees' where id='$id'";
        //     $query_run = mysqli_query($connection, $query);
        //     echo $query_run;
        // }
    }
}