<?php

//This grabs the URI that was requested on click. $uri = $_SERVER['REQUEST_URI'];
//We added parse_url to break the URL into an array. So it grabs the key, and not the added string at the end. $uri = parse_url($_SERVER['REQUEST_URI']);
//Path is added to grab the path key. Example: /shop
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//Routes Array

$routes = [
    '/' => 'controllers/home.php',
    '/shop' => 'controllers/shop.php',
    '/info' => 'controllers/about.php',
    '/journal' => 'controllers/journal.php',
    '/product' => 'controllers/product.php',
    '/contact' => 'controllers/contact.php',
    '/order' => 'controllers/orderSummary.php',
    '/journalRead' => 'controllers/journalRead.php',
    '/test' => 'controllers/testrealm.php',
    '/fetch'=> 'fetch.php',
    '/adminzone' => 'controllers/admin.php',
    '/create' => 'controllers/create.php',
    '/edit' => 'controllers/edit.php',
    '/update' => 'controllers/update.php',
    '/delete' => 'controllers/delete.php',
    '/insert-data' => 'controllers/insert-data.php',
    '/limited' => 'controllers/limited.php'
];




function routeToController($uri,$routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort(404);
    }
}

function abort($code){
    http_response_code($code);

    require "views/{$code}.php";

    die();
};

routeToController($uri,$routes);