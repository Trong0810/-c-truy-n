<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "doctruyen";

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error){
    die("kn khong thanh cong". $conn->connect_error);
}
?>