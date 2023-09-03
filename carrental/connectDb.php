<?php
$servername = "localhost";
$username = "srishti";
$pass_word = "1234";
$db="carrental";

// Create connection
$con= mysqli_connect($servername, $username, $pass_word, $db);

// Check connection
if (!$con) {
  die("Connection failed: " );
}
echo "";
?>