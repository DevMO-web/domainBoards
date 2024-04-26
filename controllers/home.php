<?php 


namespace core;
use PDO;
//Grabs the config file for us

$config =  require basePath('config.php');

//Initializes the Database while place the cinfig varaible and the correct key to the database
$db = new Database($config['database']);





$limited = $db->query("SELECT id, productName, productPrice, mainImage, categoryID from products where categoryID = 5")->fetchAll(PDO::FETCH_ASSOC); 

$test = json_encode($limited,  JSON_PRETTY_PRINT);
file_put_contents("data.json" ,$test);






include basePath('core/imageArray.php');

view("home.view.php", [
    'heading' => "Domain Boards | Homepage ",
    'home' => $home,
    'limited' => $limited
   
]);





