<?php 

require("index.php");

if(isset($_POST['name'])){
    
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mysql = "INSERT INTO users (name, username ,email) VALUES(name, username ,email)";
    $sqlQuery = $conn->connection($sql);
    $sqlQuery->bindParam('name', $name);

}

?>