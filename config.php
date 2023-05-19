<?php 
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "order_msib";
$conn = new mysqli($hostName,$userName,$password,$dbName);

if ($conn){
    echo "connected";
    } else {
        echo "not connected";
}
?>