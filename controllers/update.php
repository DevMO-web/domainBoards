<?php

namespace core;
use PDO;
$config =  require basePath('config.php');

//Initializes the Database while place the cinfig varaible and the correct key to the database
$db = new Database($config['database']);









$input=file_get_contents("php://input");
$decode=json_decode($input,true);



$id = $decode['id'];
$columnsToUpdate = [
    'productCollection' => $decode['collection'],
    'productName' => strtoupper($decode['name']),
    'productPrice' => $decode['price'],
    'productDesc' => $decode['description'],
    'productShipping' => $decode['shipping'],
    'productDetails' => $decode['details'],
    'productDimensions' => $decode['dimensions'],
    'productOverview' => $decode['overview'],
    'productGuide' => $decode['guide']
];


$updateQuery = "UPDATE products SET ";

foreach ($columnsToUpdate as $columnName => $columnValue) {
    $updateQuery .= "{$columnName}=:{$columnName}, ";
}



// Remove the trailing comma and space
$updateQuery = rtrim($updateQuery, ', ');

$updateQuery .= " WHERE id=:id";

// Prepare and execute the query using the custom query function
$result = $db->query($updateQuery, array_merge([':id' => $id], $columnsToUpdate));


if($result){
    echo json_encode(["success"=>true,"message"=>"Student Update Succcessfully"]);
}else{
    echo json_encode(["success"=>false,"message"=>"Server Problem"]);
}