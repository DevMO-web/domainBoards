<?php

namespace core;
use PDO;
//Grabs the config file for us
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
$journalEntry = $db->query('select * from posts where id= :id', ['id' => $id])->fetch();


//Quick way of fixing wrong ID in url
if($journalEntry === false){
   abort(404);
}
$blogName = $journalEntry['title'];
$heading = "Domain Boards | " . $blogName;


include basePath('core/imageArray.php');
view("journalRead.view.php", [
   'heading' => $heading,
   'journalEntry' => $journalEntry,
   'journal' => $journal,
]);


