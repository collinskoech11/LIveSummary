<?php
session_start();//keeps trach of the currrent loged in user 
if(!isset($_SESSION["username"])) {
    header("Location:../login.php");
    exit();
}
?>