<?php




namespace core;
use PDO;
//Grabs the config file for us

$config =  require basePath('config.php');

//Initializes the Database while place the cinfig varaible and the correct key to the database
$db = new Database($config['database']);





$products = $db->query("SELECT id, productName, productPrice, mainImage, categoryID from products where baseProduct = 1")->fetchAll(PDO::FETCH_ASSOC); 





$test = json_encode($products,  JSON_PRETTY_PRINT);
file_put_contents("data.json" ,$test);
// Send JSON response
/*
if(isset($_GET)){
    
}




/*
//Encodes the above query to json for me. If there is no products, it will still display view
if(count($products) > 0){
    $var = json_encode($products);
    echo $var;
    
}else{
    echo"No Products";
}

*/


view("shop.view.php", [
    'heading' => 'Domain Boards | Shop',
    'products' => $products
]);





