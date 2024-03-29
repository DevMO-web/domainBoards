<?php

$config =  require('config.php');

//Initializes the Database while place the cinfig varaible and the correct key to the database
$db = new Database($config['database']);
$products = $db->query("SELECT id, productName, productPrice from products");





$data = [];
 while ($row = $products->fetchAll(PDO::FETCH_ASSOC)) {
        $data[] = $row;
        echo json_encode($data);
 }