<?php 
namespace core;
use PDO;
//Grabs the config file for us

$config =  require basePath('config.php');

//Initializes the Database while place the cinfig varaible and the correct key to the database
$db = new Database($config['database']);





$products = $db->query("SELECT id, productName, productPrice, mainImage from products")->fetchAll(PDO::FETCH_ASSOC); 


echo json_encode($products);


?>