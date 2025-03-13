<?php 

$username = $_GET['username'];
$password = $_GET['password'];
$email = $_GET['email'];
$age = $_GET['age'];
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo $email;
echo "<br>";
echo $age;

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

    <form action="index.php" method="get">

    <label for="username">Username</label>
    <input type="text" id="username" name="username" placeholder="Username"><br>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="password"><br>
    <input type="submit" value="Submit">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="email"><br>
    <label for="age">Age</label>
    <input type="text" id="age" name="age" placeholder="age"><br>
    </form>
    
</body>
</html>