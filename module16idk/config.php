<?php
    $server = 'localhost';
    $username = 'root';
    $dbname = 'mms';
    $password = '';

    try{
        $connection = new PDO("mysql:host=$server;dbname=$dbname;", $username, $password);
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
?>