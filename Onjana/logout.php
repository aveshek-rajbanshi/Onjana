<?php
   include("$connection.php");
 
   session_start();
   session_unset();
   session_destroy();

   header("Location: landingpage.php");
   
?>