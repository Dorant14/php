<?php 

include_once('config.php');

if(isset($_POST['submit'])){
    id=$_POST['id'];
    $emri=$_POST['movie_name'];
    $username=$_POST['movie_desc'];
    $email=$_POST['movie_quality'];

    $sql = "UPDATE users SET emri='$emri', username='$username', email='$email' WHERE id='$id''";

    $prep=$conn->prepare($sql);
    $prep->bindParam(':id',$id);
    $prep->bindParam(':movie_name',$movie_name);
    $prep->bindParam(':movie_desc',$movie_desc);
    $prep->bindParam(':movie_quality',$movie_quality);
    $prep->execute();

    header('Location:list_movie.php');
}

?>