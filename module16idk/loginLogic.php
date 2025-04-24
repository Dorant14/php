<?php  

session_start();

include_once ("config.php");

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        echo "You have not filled in all the fields!";
    }else{
        $sql ="SELECT * FORM users WHERE username=:usernamr";

        $selsctSQL=$conn->prepare($sql);

        $selsctSQL->blindParam(':usernamr', $username);

        $selsctSQL->execute();

        $data=$selsctUser-fetch();

        if($data=false){
            echo "Username does not exist!";
        }else{
            if(password_verify($password, $data['password'])){
                $_SESSION['id']=$data['id'];
                $_SESSION['username']=$data['username'];
                $_SESSION['email']=$data['email'];
                $_SESSION['emri']=$data['emri'];
                $_SESSSION['is_admin']=$data['is_admin'];

                header("Location: index.php");
            }else{
                echo "Password is incorrect!";
            }
        }
    }
}



?>