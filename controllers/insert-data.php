<?php 


namespace core;
use PDO;
$config =  require basePath('config.php');

//Initializes the Database while place the cinfig varaible and the correct key to the database
$db = new Database($config['database']);

$input=file_get_contents("php://input");
$decode=json_decode($input,true);


$columnsToUpdate = [
    'productCollection' => $decode['collection'],
    'productName' => strtoupper($decode['name']),
    'productPrice' => $decode['price'],
    'productDesc' => $decode['description'],
    'productShipping' => $decode['shipping'],
    'productDetails' => $decode['details'],
    'productDimensions' => $decode['dimensions'],
    'productOverview' => $decode['overview'],
    'productGuide' => $decode['guide'],
    'categoryID' => 2,
    'baseProduct' => 1
];


//IF THE PAGE IS DIRECTLY ACCESSED. WRITE CODE THAT PREVENTS THIS
if (in_array(null, $columnsToUpdate, true)) {
    echo 'NO DATA';
    die();
}

/*
$columnsToUpdate = [
    'productCollection' => 'CollectionONE',
    'productName' => 'SIKYO',
    'productPrice' => 20,
    'productDesc' => 'taco is the great',
    'productShipping' => 'no shipping',
    'productDetails' => 'details of the product',
    'productDimensions' => 'big dude',
    'productOverview' => 'pretty rad',
    'productGuide' => 'no guides',
    'categoryID' => 2,
    'baseProduct' => 1
];
*/
// Build the columns and values for the SQL query

$columns = implode(', ', array_keys($columnsToUpdate));
$values = implode("', '", array_values($columnsToUpdate));

// Construct the SQL query
$sql = "INSERT INTO products ($columns) VALUES('$values')";

// Execute the query
$result = $db->query($sql);

// Output for debugging
echo "SQL Query: $sql\n";

// ... (your previous code)



if($result){
    echo json_encode(["success"=>true,"message"=>"Student Update Succcessfully"]);
}else{
    echo json_encode(["success"=>false,"message"=>"Server Problem"]);
}