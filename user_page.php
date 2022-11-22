<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop | Keep Shopping</title>

    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="files/style.css">

    <style>
    /* popup for user starts */

.overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
  }
  .overlay:target {
    visibility: visible;
    opacity: 1;
  }
  
  .popup {
    margin: 70px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 30%;
    position: relative;
    transition: all 5s ease-in-out;
  }
  
  .popup h2 {
    margin-top: 0;
    color: #333;
    font-family: Tahoma, Arial, sans-serif;
  }
  .popup .close {
    position: absolute;
    top: 3px;
    right: 10px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
  }
  .popup .close:hover {
    color: #06D85F;
  }
  .content{
    text-align: left;
    top: 10px;
}
  
  @media screen and (max-width: 700px){
    .box{
      width: 70%;
    }
    .popup{
      width: 70%;
    }
  }

/* popup for user ends */

/* logout button starts */

.btn {
  background-color: red;
  border: none;
  border-radius: 10px;
  color: white;
  font-weight: bold;
  padding: 10px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

/* logout button ends */



    </style>

</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="#"><img src="img/logo_original.png" alt="myShop website logo"></a>
        </div>
        <div class="search">
            <form action="search">
                <input type="text" name="search-bar" id="search-bar" placeholder="Search for products, brands and more">
            </form>
        </div>
        <div class="icons">
            <a href="#" class="fa fa-heart"></a>
            <a href="viewcart.php" class="fa fa-shopping-cart"></a>
            <a href="#popup1" class="fa fa-user"></a>
            <div id="popup1" class="overlay">
                <div class="popup">
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                    <?php echo $_SESSION['user_name'] ?>
                    <a href="logout.php" class="btn">logout</a>
                    </div>
                </div>
            </div>
            <a href="#" class="fa fa-bars"></a>
        </div>
    </div>
    <div class="links">
        <a href="shoe.php">Shoes</a>
        <a href="#">Mobiles</a>
        <a href="#">Laptops</a>
    </div>

    <!-- sliding window starts -->
    
    <div class="slider">
        <div class="slides">
            <!-- radio button starts -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!-- radio button ends -->

            <!-- slides image starts -->
            <div class="slide first">
                <img src="img/img1.png" alt="">
            </div>
            <div class="slide second">
                <img src="img/img2.png" alt="">
            </div>
            <div class="slide third">
                <img src="img/img3.png" alt="">
            </div>
            <div class="slide fourth">
                <img src="img/img4.png" alt="">
            </div>
            <!-- slides image ends  -->

            <!-- automatic navigation starts  -->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
            <!-- automatic navigation ends  -->
        </div>
        <!-- manual navigation starts  -->
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
        <!-- manual navigation ends  -->
    </div>

    <!-- sliding window ends -->

    <!-- footer starts -->

    
    <footer class="footer">
        <div class="footer_container">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Online shop</h4>
                    <ul>
                        <li><a href="#">Watches</a></li>
                        <li><a href="#">Bag</a></li>
                        <li><a href="#">Shoes</a></li>
                        <li><a href="#">Dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer ends -->

    <!-- Javascript -->
    <script src="files/script.js"></script>
</body>
</html>

