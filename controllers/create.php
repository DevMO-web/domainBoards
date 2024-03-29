<?php
namespace core;
use PDO;
$config =  require basePath('config.php');

//Initializes the Database while place the cinfig varaible and the correct key to the database
$db = new Database($config['database']);




$heading = "Domain Boards | Create";


view("create.view.php", [
   'heading' => $heading
   
]);