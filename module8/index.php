<?php 

$host= "localhost";
$db = "db";
$user = "root";
$pass = "",

try{

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $sql = "CREATE TABLE user1 (id INT(6) NOT NULL AOUTO_INCREMENT PRIMARY KEY , username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL)";

    $pdo->exec($sql);

    echo "Table created successfully";

}catch (Exeption $e) {
    echo "Error creating tabel:" .$e->getMessage();
}

?>