<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tuitionlink_db";
 
$conn = new mysqli ($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed:" . 
    $conn->connect_error);
}

echo "Database connected successfully!";
?>