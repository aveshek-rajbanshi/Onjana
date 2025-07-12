<?php
    include("connection.php");
      session_start();
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
       <h2 id="form-header">Login Form</h2>
    <div id="form-container">
      <form action="#" method="POST">
         <div class="input-wrapper">
            <input id="email" type="text" name="email" required>
            <label for="email">Email</label>
        </div>

         <div class="input-wrapper">
            <input id="password" type="text" name="password" required>
            <label for="password">Password</label>
        </div>

         <div class="input-wrapper" id="loginBtn-wrapper">
            <input id="loginBtn" type="submit" name="login">
        </div>

        <div class="input-wrapper" id="form-link">
            <span>Don't have an account?<a href="registration.php">Signup</a></span>
        </div>
      </form>
    </div>
   </div>
    
</body>
</html>

<?php 
 
 if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['login'])){
        
        $useremail = $_POST['email'];
        $userpassword = $_POST['password'];

        if($useremail != "" && $userpassword != ""){
            $selectquery = "SELECT * FROM Customer WHERE Email = '$useremail' AND Password = '$userpassword'";
            $startQuery = mysqli_query($conn, $selectquery);
            $queryeffect = mysqli_num_rows($startQuery);

            if($queryeffect == 1){
                $_SESSION['gmail'] = $useremail;
                $_SESSION['password'] = $userpassword;
                header("Location: homepage.php");
            }else{
                header("Location: login.php");
                 echo mysqli_connect_error();

            }
        }else{
            echo "<script>alert('User password and email are incorrect.'); </script>";
        }
      }else{
            echo "<script>alert('Please! fill the required form.'); </script>";
        }
    }
?>
