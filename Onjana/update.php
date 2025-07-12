<?php
   include("connection.php");
   $ids = $_GET['id'];
   session_start();

   $email = $_SESSION['Email'];
   $password = $_SESSION['Password'];
   
   if($email == true && $password == true){

   }else{
       header("login.php");
   }

   $selectQuery = "SELECT * FROM customer WHERE customerID = '$ids'";
   $runQuery = mysqli_query($conn, $selectQuery);
//    $startQuery = mysqli_num_rows($runQuery);
   $fetchData = mysqli_fetch_assoc($runQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
   <body>
    <div id="main-form">
        <h2 id="form-Header">Update details</h2>
        <div id="form-container">
            <form action="#" method="POST">
              <div class="input-wrapper">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php  echo $fetchData['FullName']; ?>">
              </div>
              <div class="input-container">
                <label for="email">Email</label>
                <input type="text" id="name" name="email" value="<?php  echo $fetchData['Email']; ?>">
              </div>
              <div class="input-container">
                <label for="password">Password</label>
                <input type="text" id="password" name="password" value="<?php  echo $fetchData['Password']; ?>">
              </div>
              <div class="input-container">
                <input type="submit" id="updateBtn" name="update" value="update">  
             </div>
            </form>
        </div>
    </div> 
</body>
</html>

<?php
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['update'])){
        $user = $_POST['name'];
        $useremail = $_POST['email'];
        $userpassword = $_POST['password'];

        if($user != "" && $useremail != "" && $userpassword != ""){
            $updateQuery = "UPDATE student SET FullName='$user', Email='$useremail', Password='$userpassword' WHERE studentID='$ids' ";
            $runupdateQuery = mysqli_query($conn, $updateQuery);
            header("Location:display.php");
        }else{
            header("Location: login.php");
        }
    }else{
        echo "<script>alert('Please! fill the form.');</script>";
    }
  }