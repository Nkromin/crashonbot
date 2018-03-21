<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "store";
$con = new mysqli($servername, $username, $password,$dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  } 
session_start();
echo "Connected successfully";
?>
