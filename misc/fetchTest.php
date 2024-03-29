<?php

$product = $db->query('select * from products where id= :id', ['id' => $id])->fetch();


//Quick way of fixing wrong ID in url
if($product === false){
   abort(404);
}
$productName = $product['productName'];

$heading = "Domain Boards | $productName ";