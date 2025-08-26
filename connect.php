<?php

$host="localhost";
$user="root";
$pass="";
$db="mhmsdb";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
// Include config file
require_once "connect.php";
// Attempt to connect to MySQL database
$link = mysqli_connect("localhost", "root", "", "mhmsdb");

// Check if connection is successful
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>