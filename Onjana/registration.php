<?php
  include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

   <div id="main-form">
       <h2 id="form-header">Rregistration Form</h2>
    <div id="form-container">
      <form action="#" method="POST">
        <div class="input-wrapper">
            <input id="name" type="text" name="name" required>
            <label for="name">Name</label>
        </div> 

         <div class="input-wrapper">
            <input id="email" type="text" name="email" required>
            <label for="email">Email</label>
        </div>

         <div class="input-wrapper">
            <input id="password" type="text" name="password" required>
            <label for="password">Password</label>
        </div>

         <div class="input-wrapper" id="signupBtn-wrapper">
            <input id="signupBtn" type="submit" name="signup">
        </div>
        
         <div class="input-wrapper" id="form-link">
            <span>Already have an account?<a href="login.php">Login</a></span>
        </div>
      </form>
    </div>
   </div>
    
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){

  if(isset($_POST['signup'])){
    
    $username = $_POST['name'];
    $useremail = $_POST['email'];
    $userpassword = $_POST['password'];
   
    if($username != "" && $useremail != "" && $userpassword != ""){
      // $insertQuery = "INSERT INTO Customer(FullName, Email, Password) VALUES ('$username', '$useremail', '$userpassword')";
      $insertQuery = "INSERT INTO Customer(FullName, Email, Password) VALUES ('$username', '$useremail', '$userpassword')";

      $runQuery = mysqli_query($conn, $insertQuery);

      if($runQuery){
        header("Location: login.php");
      }else{
          echo mysqli_connect_error();
        header("Location: registration.php");
      }

    }else{
    echo "Please! fill the form.";
  }
  }

}
?>