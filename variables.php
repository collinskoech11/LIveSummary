<?php
$mysqli = new mysqli("localhost", "root", "", "LiveSummaryDb");
// Check connection
session_start();
if($mysqli === false){
   die("ERROR: Could not connect. " 
       . mysqli_connect_error());
}
$Naming = $_SESSION['username'];
$sqlu = "SELECT * FROM users WHERE username='$Naming'";
$resultuser = $mysqli->query($sqlu);
$mysqli->close();
?>