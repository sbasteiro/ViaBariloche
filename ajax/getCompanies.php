<?php
include '..\core\Company.php';
// ajax get companies
$companies = (new Company())->getAll();
echo json_encode($companies);