<?php

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $db     = "contact_manager";

  $conn = new mysqli ($dbhost, $dbuser, $dbpass, $db);

   //check connection

   if($conn->connect_error){
     echo "Connection failed";
   }
   else{
     echo "Connection successful";
   }

 ?>
