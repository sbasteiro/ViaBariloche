  <?php
include '..\core\Employee.php';
// ajax get users
$users = (new Employee())->getWhere(['company_id' => $_POST['company_id']]);
echo json_encode($users);