<?php
    session_start();
    //destroy session
    if(session_destroy()){
        header("Location: Login.php");
    }//ends the current user session for logout
?>