<?php

//Create a Base Path since main folder was changed to Public. The '/../' places us up a level
const BASE_PATH = __DIR__ . '/../';
require BASE_PATH . ('core/functions.php');

/*Before:
   
require('functions.php');
require('Database.php');
require('routes.php');
*/ 

//After



//Autoloading Clasess
// Before require basePath('Database.php');

spl_autoload_register(function($class){

   $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
   //with new namespace. the class is changed to core\Database. Before it was just Database
   
   require basePath("{$class}.php");
});


require basePath('routes.php');








//===========Start: Database Code===============




/*
//SQL INJECTION PROTECTION
$id = $_GET['id'];

$query = "select * from posts where id = :id";
//Dynamic way of query posts. I have control here, instead of going into blueprint
//$query is now outside the method, and a param for ID helps prevent SQL. 
$posts = $db->query($query, [':id' => $id])->fetch();

//Test Query when string on url is changed 
//dd($posts);

//Prints each post title into DOM
foreach($posts as $post){
   echo "<li>" . $post['title'] . "</li>";
}

*/

//===========End: Database Code===============

