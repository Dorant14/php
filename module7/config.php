<?php  

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'idk_db';

    try{
        $conn = new PDO("mysql:host=$host; dbname=$database", $user, $password);

        echo "conetcion was successful";



    }

    catch(Excpetion $e){
        echo "Error:".$e;
    }
?>