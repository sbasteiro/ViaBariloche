<?php
include '..\core\Employee.php';
$return = null;
if  (!$_POST['first_name'] || !$_POST['last_name'] || !$_POST['company_id']) {
    $return = ['success' => false,'message' => 'missing params'];
    echo json_encode($return);
}

$employee = new Employee();
$employee->first_name = $_POST['first_name'];
$employee->last_name  = $_POST['last_name'];
$employee->company_id = $_POST['company_id'];
$employee->save();
$return = ['success' => true,'message' => 'Empleado creado con exito'];
echo json_encode($return);
