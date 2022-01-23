<?php
    // servername => localhost
   // username => root
   // password => user password
   // database name => owner
   $conn = mysqli_connect("localhost", "root", "", "LiveSummaryDb");//connects to database
   if (mysqli_connect_error()){//renders error if connection fails 
       echo "failed to connect to db" . mysqli_connect_error();
   }
   ?>