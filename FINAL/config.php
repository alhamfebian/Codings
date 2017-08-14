<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FINAL";

if(!($conn = mysqli_connect($servername, $username, $password, $dbname))) die("Connection failed: " + mysqli_connect_error());
