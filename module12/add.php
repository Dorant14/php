<?php 

require("index.php");

if(isset($_POST['name'])){
    
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $email = $_POST['age'];
    $mysql = "INSERT INTO users (name, username ,email, age) VALUES(:name, :username , :email, :age)";
    $sqlQuery = $conn->connection($sql);
    $sqlQuery->bindParam('name', $name);

}

?>