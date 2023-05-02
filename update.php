<?php
include("connection1.php");
$sid=$_POST["sid"];
$p="payment cleared";
$sql="UPDATE t1 SET payment = '$p' WHERE sid = $sid";
if($conn->query($sql) === TRUE){
    echo'<script>alert("Paid successfully")</script>';
    
}
else{
    echo "error: ". $sql . "<br>" .$conn->error;
}
$conn->close();
?>
