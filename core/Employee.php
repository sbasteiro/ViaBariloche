<?php
include 'Entity.php';

class Employee extends Entity {
    protected $table = 'employees';
    protected $fillables = ['first_name', 'last_name', 'company_id'];
    public $first_name;
    public $last_name;
    public $company_id;
}

