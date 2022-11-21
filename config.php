<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "director";
$db_name = "users";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Something went wrong: " . $e->getMessage());
}
