<?php 

$dbname = "db";
$host = "localhost";
$user = "root";
$password = "";

try{
    $connection = new PDO("mysql:host=$server;dbname=$dbname;", $username, $password);
} catch(Exception $e){
    echo "Somthing went wrong";
}

?>