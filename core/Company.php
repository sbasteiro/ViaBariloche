<?php
include 'Entity.php';

class Company extends Entity {
    protected $table = 'companies';
    protected $fillables = ['name', 'address', 'sector'];
    public $name;
    public $address;
    public $sector;
}
