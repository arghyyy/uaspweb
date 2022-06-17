<?php

$servername = "localhost";
$username = "202410103031";
$password = "secret";
$db="uas202410103031";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>