<?php
       session_start();
    $server = 'localhost';
    $username = 'root';
    $dbname = 'db';
    $password = '';

    try{
        $connection = new PDO("mysql:host=$server;dbname=$dbname;", $username, $password);
    } catch(PDOException $e){
        echo "Somthing went wrong"; . e->getMessage();
    }
?>