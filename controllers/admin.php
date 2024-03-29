<?php
namespace core;
use PDO;
$config =  require basePath('config.php');

//Initializes the Database while place the cinfig varaible and the correct key to the database
$db = new Database($config['database']);


$data = $db->query('select * from products')->fetchAll();


$heading = "Domain Boards | Admin Dashboard";


view("admin.view.php", [
    'heading' => $heading,
    'data' =>$data
    
 ]);