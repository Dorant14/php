<?php 

$host= "localhost";
$db = "db";
$user = "root";
$pass = "",

try{

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $username="John";
    $passwor= password_hash("mypassword",PASSWORD_DEFAULT);

    $sql = "INSERT INTO user1 (username, password) VALUES ()";

    $pdo->exec($sql);

    echo "new record inserted succesfly";

}catch (Exeption $e) {
    echo $e->getMessage();
}

?>