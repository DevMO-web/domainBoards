<?php
namespace core;
use PDO;
$config =  require basePath('config.php');

//Initializes the Database while place the cinfig varaible and the correct key to the database
$db = new Database($config['database']);

if (isset($_GET['id'])) {
   $id = $_GET['id'];
}else{
   echo "ID is not defined.";
   die();
}

//Grabs one query instead of all for the seperate page
$product = $db->query('select * from products where id= :id', ['id' => $id])->fetch();


//Quick way of fixing wrong ID in url
if($product === false){
   abort(404);
}
$productName = $product['productName'];

$heading = "Domain Boards | $productName ";


view("product.view.php", [
   'heading' => $heading,
   'product' => $product
]);