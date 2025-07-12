<?php
   include("connection.php");
   session_start();
   $ids= $_GET['id'];

   $email = $_SESSION['gmail'];
   $password = $_SESSION['password'];

   if($email == true && $password == true){

   }else{
    header("Location: login.php");
   }

   $deleteQuery = "DELETE FROM customer WHERE customerID='$ids' ";
   $runQuery = mysqli_query($conn, $deleteQuery);

   if($runQuery){
    header("Location: registration.php");
   }else{
   echo " <script> alert('Your account is not deleted.');</script>";
   header("Location: homepage.php");
   }



?>