<?php

include_once('config.php');

if(isset($_POSTS['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $tempPass= $_POST['tempPass'];
    $password = password_hash($password, PASSWORD_DEFAULT); 

    if(empty($name) || empty($username) || empty($email) || empty($password)){
        echo "Please fill in all fields.";
    } else {
        $sql="SELECT username FROM users WHERE username = :username";

        $tempSQL=$conn->prepare($sql);
        $tempSQL->bindParam(':username', $username);
        $tempSQL->execute();

        if($tempSQL->rowCount()>0){
            echo "Username already exists. Please choose another one.";
            header("refresh: 2; url=signup.php");
        }else{

            $sql = "INSERT INTO users (username, password, email, name, tempPass) VALUES (:username, :password, :email, :name, :surname)";
            $insertSQL = $conn->prepare($sql);

            $insertSQL->bindParam(':username', $username);
            $insertSQL->bindParam(':password', $password);  
            $insertSQL->bindParam(':email', $email);
            $insertSQL->bindParam(':name', $name);
            $insertSQL->bindParam(':surname', $surname);

            $insertSQL->execute();

            echo "Registration successful!";
            header("refresh: 2; url=login.php");

        }
    }
}

?>