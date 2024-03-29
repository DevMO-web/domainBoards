<?php
use core\Database;

//Grabs the config file for us
$config =  require basePath('config.php');


//Initializes the Database while place the cinfig varaible and the correct key to the database
$db = new Database($config['database']);

//Making Query Dynamic

//Setting the Start to Zero
$start = 0;

//Setting Number of Journals to Post
$rowsPerPage = 3;

//Query 


//Pagination 

//Getting Total Number of Rows
$record = $db->query("SELECT COUNT(*) as totalRecords FROM posts");
$numberOfRows = $record->fetch()["totalRecords"]; //Note: their is most likely a better way 



// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.


//Calculation Part
$totalPages = ceil($numberOfRows / $rowsPerPage);

//This Grabs what we need from the database. //&& is_numeric prevents a invalid operand error. Instead directs to first page
if(isset($_GET['page']) && is_numeric($_GET['page'])){
    $page = $_GET['page'] - 1;
    $start = $page * $rowsPerPage;
};


$journals = $db->query("SELECT * from posts limit $start, $rowsPerPage");



include basePath('core/imageArray.php');

view("journal.view.php", [
    'heading' => 'Domain Boards | Journals',
    'journals' => $journals,
    'journal' => $journal,
    'totalPages' => $totalPages

]);


