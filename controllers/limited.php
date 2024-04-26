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
$limited = $db->query('select * from products where id= :id', ['id' => $id])->fetch();


//Quick way of fixing wrong ID in url
if($limited === false){
   abort(404);
}
$productName = $limited['productName'];

$heading = "Domain Boards | $productName ";


include basePath('core/imageArray.php');

view("limited.view.php", [
    'heading' => "Domain Boards | Limited Edition ",
    'limited' => $limited
   
]);