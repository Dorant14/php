<?php

    include_once('config.php');
    $id = $_GET['id'];      
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $password = $_POST['password'];

        $sql = ("UPDATE user SET name = :name, surname = :surname, email = :email, age = :age, password = :password WHERE id = :id");
        $prep = $conn->prepare($id);

        $prep->bindParam(':name', $name);
        $prep->bindParam(':surname', $surname);
        $prep->bindParam(':email', $email);
        $prep->bindParam(':age', $age);
        $prep->bindParam(':password', $password);   

    }   
?>