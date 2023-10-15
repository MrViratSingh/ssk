<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST ['email']; 
$number = $_POST['number'];
$city = $_POST['city'];

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'mytutor';
$conn = mysqli_connect($host, $user, $pass, $dbname);
$sql = "INSERT INTO student(name,email,number,city) values ('$name', '$email', '$number', '$city')";
mysqli_query($conn, $sql);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <form action="#" method="POST">
        Name: <input type="text" name="name"> <br>
        email: <input type="email" name="email"> <br>
        number: <input type="number" name="number"> <br>
        city: <input type="text" name="city"> <br> 
         <input type="submit" name="submit" value="Send Data">
    </form>
</body>
</html>