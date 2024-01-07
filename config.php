<?php
//database connection details
session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'gallery_syst';

//creating the connection
//when passing the arguements they should follow that order
$conn = mysqli_connect($host, $user, $pass, $db);

if($conn){
    echo "connected successfully!";

}else{
    die("connection failed: " . mysqli_connect_error());
}

// $conn->close();


?>
