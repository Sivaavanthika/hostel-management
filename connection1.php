<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel";
//to create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//to check connection 
if($conn->connect_error){
    die("CONNECTION FAILED: " . $conn->connect_error);
}
?>