<?php
include_once("config.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$result = mysqli_query($conn, "INSERT INTO `customer` (`first_name`,`last_name`,`email`,`phone`,`address`) VALUES ('$first_name','$last_name','$email','$phone','$address')");

if($result){
    header("Location:table.php");
}else{
    echo "error";
}

?>