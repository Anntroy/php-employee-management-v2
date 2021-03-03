<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php
require_once("../assets/html/header.html");
include_once("../libs/classes/employeeClass.php");

$employee = new Employee;
$employee->getEmployeeInfo();

?>
