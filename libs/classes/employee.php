<?php

class Employee{
    function __construct(){

    }
    
    function getEmployeeInfo(){
        $connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
        $db = mysql_select_db("employees", $connection); // Selecting Database
        //MySQL Query to read data
        $query = mysql_query("select * from employee", $connection);
        while ($row = mysql_fetch_array($query)) {
        echo "<b><a href='dashboard.php?id={$row['employee_id']}'>{$row['employee_name']}</a></b>";
        echo "<br/>";
    }
}