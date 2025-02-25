<?php 

$host= "localhost";
$db = "db";
$user = "root";
$pass = "",

try{

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $username="John";
    $passwor= password_hash("mypassword",PASSWORD_DEFAULT);

    $sql = "ALTER TABLE user1 ADD email VARCHAR(255)";

    $pdo->exec($sql);

    echo "Added colum succesfly";

}catch (Exeption $e) {
    echo $e->getMessage();
}

?>