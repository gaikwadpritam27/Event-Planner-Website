<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data1";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) 
{
    die("Connection failed: " .mysqli_error($con));
}

?>