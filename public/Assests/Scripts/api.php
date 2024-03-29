<?php
header('Content-Type: application/json');

$jsonData = [
    [
        "id" => 1,
        "productName" => "Surfboard",
        "productPrice" => 1400,
        "img" => "Sikyo.jpg"
    ],
    // Add other products...
];

echo json_encode($jsonData);
?>