<?php
   session_start();
   include("connection.php");
  //  $ids = $_GET['id'];
  // Validate ID
$ids = isset($_GET['id']) ? $_GET['id'] : null;
if (!$ids) {
    die("ID not provided.");
}

  //  $email = $_SESSION['gmail'];
  //  $password = $_SESSION['password'];
   
  // Validate session
$email = isset($_SESSION['gmail']) ? $_SESSION['gmail'] : null;
$password = isset($_SESSION['password']) ? $_SESSION['password'] : null;

if (!$email || !$password) {
    header("Location: login.php");
    exit;
}

   if($email == true && $password == true){

   }else{
       header("login.php");
   }

//    $selectQuery = "SELECT * FROM customer WHERE customerID = '$ids'";
//    $runQuery = mysqli_query($conn, $selectQuery);
// //    $startQuery = mysqli_num_rows($runQuery);
//    $fetchData = mysqli_fetch_assoc($runQuery);
// Fetch customer data
$selectQuery = "SELECT * FROM customer WHERE customerID = '$ids'";
$runQuery = mysqli_query($conn, $selectQuery);
$fetchData = mysqli_fetch_assoc($runQuery);

if (!$fetchData) {
    die("Customer not found.");
}


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
    <div id="closeBtn">
      <a href="homepage.php">X</a>
    </div>
       <h2 id="form-header">Update Details</h2>
    <div id="form-container">
      <form action="#" method="POST">
        <div class="input-wrapper">
            <input id="name" type="text" name="name" value ="<?php echo $fetchData['FullName']; ?>" required>
            <label for="name">Name</label>
        </div> 

         <div class="input-wrapper">
            <input id="email" type="text" name="email" value="<?php echo $fetchData['Email']; ?>" required>
            <label for="email">Email</label>
        </div>

         <div class="input-wrapper">
            <input id="password" type="text" name="password" value="<?php echo $fetchData['Password']; ?>" required>
            <label for="password">Password</label>
        </div>

         <div class="input-wrapper" id="updateBtn-wrapper">
            <input class="updateBtn" type="submit" value="Update" name="update">
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
            $updateQuery = "UPDATE customer SET FullName='$user', Email='$useremail', Password='$userpassword' WHERE customerID='$ids' ";
            $runupdateQuery = mysqli_query($conn, $updateQuery);
            header("Location:homepage.php");
        }else{
            header("Location: login.php");
        }
    }else{
        echo "<script>alert('Please! fill the form.');</script>";
    }
  }