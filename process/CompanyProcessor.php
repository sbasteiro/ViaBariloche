  <?php
include '..\core\Company.php';
$return = null;
if (!$_POST['name'] || !$_POST['address']|| !$_POST['sector']) {
    $return = ['success' => false, 'message' => 'missing params'];
    echo json_encode($return);
}

$company = new Company();
$company->name    = $_POST['name'];
$company->address = $_POST['address'];
$company->sector  = $_POST['sector'];
$company->save();
$return = ['success' => true,'message' => 'Empresa creada con exito'];
echo json_encode($return);
