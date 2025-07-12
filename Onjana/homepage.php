<?php
include("connection.php");
session_start();

$email = $_SESSION['gmail'];
$password = $_SESSION['password'];

if($email == true && $password == true){

}else{
   header("Location: login.php");
}
 
$selectQuery = "SElECT * FROM customer WHERE Email = '$email' AND Password = '$password' ";
$runQuery = mysqli_query($conn, $selectQuery);
$checkQuery = mysqli_num_rows($runQuery);

 $storeData = mysqli_fetch_assoc($runQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Onjana</title>
   <link rel="stylesheet" href="style/homepage.css">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>
    <div id="main">
       <div id="navContainer">
         <div id="leftContainer">
            <h2>Onjana</h2>
         </div>
         <div id="account-Container">
            <div id="account-container-wrapper">
               <div id="accountHolderName">
                  <h6> <?php echo $storeData['FullName']; ?> </h6>
               </div>
               <div id="accountLink">
                  <a href="update.php?id=<?php echo $storeData['customerID']; ?>">Edit Profile</a>
                  <a href="logout.php">Logout</a>
                  <a href="accountDelete.php?id=<?php echo $storeData['customerID']; ?>">Delete Account</a>
               </div>
            </div>
         </div>
         <div id="rightContainer">
            <div id="likeBtn" class="navIcon"><i class="ri-heart-line"></i></div>
            <div id="cart" class="navIcon"><i class="ri-shopping-cart-line"></i></div>
            <div id="account" class="navIcon"><i class="ri-user-3-line"></i></div>
         </div>
       </div>

       <div id="productSection">
         <div id="productHeader">
            <h4>Shirts & Pants</h4>
         </div>
       <div id="productContainer">

         <div class="productBox">
            <div class="photoContainer">
               <img src="Images/item1.jpeg" alt="Images">
            </div>
            <div class="product-details">
               <h5>Huddef Puffer Coat</h5>
               <h5>$200</h5>
               <h6>Jacket & coat</h6>
            </div>
         </div>

         <div class="productBox">
            <div class="photoContainer">
               <img src="Images/item11.jpg" alt="Images">
            </div>
            <div class="product-details">
               <h5>Crop Shirt</h5>
               <h5>$225</h5>
               <h6>Jacket & coat</h6>
            </div>
         </div>
         
         <div class="productBox">
            <div class="photoContainer">
               <img src="Images/item2.jpg" alt="Images">
            </div>
            <div class="product-details">
               <h5>Oversized Shirt</h5>
               <h5>$350</h5>
               <h6>Jacket & coat</h6>
            </div>
         </div>

         <div class="productBox">
            <div class="photoContainer">
               <img src="Images/item3.jpg" alt="Images">
            </div>
            <div class="product-details">
               <h5>Button-down Shirt</h5>
               <h5>$100</h5>
               <h6>Jacket & coat</h6>
            </div>
         </div>

         <div class="productBox">
            <div class="photoContainer">
               <img src="Images/item4.jpg" alt="Images">
            </div>
            <div class="product-details">
               <h5>Wrap Shirt</h5>
               <h5>$999</h5>
               <h6>Jacket & coat</h6>
            </div>
         </div>

         <div class="productBox">
            <div class="photoContainer">
               <img src="Images/item5.jpg" alt="Images">
            </div>
            <div class="product-details">
               <h5>Tie-Front Shirt</h5>
               <h5>$599</h5>
               <h6>Jacket & coat</h6>
            </div>
         </div>

         <div class="productBox">
            <div class="photoContainer">
               <img src="Images/item6.jpg" alt="Images">
            </div>
            <div class="product-details">
               <h5>Peplum Shirt</h5>
               <h5>$450</h5>
               <h6>Jacket & coat</h6>
            </div>
         </div>

         <div class="productBox">
            <div class="photoContainer">
               <img src="Images/item7.jpg" alt="Images">
            </div>
            <div class="product-details">
               <h5>Cold Shoulder Shirt</h5>
               <h5>$575</h5>
               <h6>Jacket & coat</h6>
            </div>
         </div>

         <div class="productBox">
            <div class="photoContainer">
               <img src="Images/item8.jpg" alt="Images">
            </div>
            <div class="product-details">
               <h5>Puff Sleeve Shirt</h5>
               <h5>$500</h5>
               <h6>Jacket & coat</h6>
            </div>
         </div>

         <div class="productBox">
            <div class="photoContainer">
               <img src="Images/item9.jpg" alt="Images">
            </div>
            <div class="product-details">
               <h5>Sheer Shirt</h5>
               <h5>$800</h5>
               <h6>Jacket & coat</h6>
            </div>
         </div>

         <div class="productBox">
            <div class="photoContainer">
               <img src="Images/item10.jpg" alt="Images">
            </div>
            <div class="product-details">
               <h5>Asymmectrical Shirt</h5>
               <h5>$900</h5>
               <h6>Jacket & coat</h6>
            </div>
         </div>

         <div class="productBox">
            <div class="photoContainer">
               <img src="Images/item12.jpg" alt="Images">
            </div>
            <div class="product-details">
               <h5>Corest Shirt</h5>
               <h5>$600</h5>
               <h6>Jacket & coat</h6>
            </div>
         </div>

       </div> 
      </div>

      <div id="footer-Container">
       <span>Copyright&copy; 2025 all right reserve by Onjana Rajbanshi.</span>
      </div>

    </div>

    <script src="script/homepage.js"></script>
</body>
</html> 