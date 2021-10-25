<?php

$email = $_POST['email'];

$server = "localhost";
$username = "root";
$password = "";
$db_name = "megabit";


$conn = new mysqli($server, $username, $password, $db_name);
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
$stmt = $conn->prepare("insert into emails(email) values(?)");
$stmt -> bind_param("s",$email);
$stmt->execute();
$stmt->close();
$conn->close();
}

header("Location: ../pine/success.php");