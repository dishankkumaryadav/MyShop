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

    <link rel="stylesheet" href="files/shoes.css">

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
            <a href="index.php"><img src="img/logo_original.png" alt="myShop website logo"></a>
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
        <a href="#">Shoes</a>
        <a href="#">Mobiles</a>
        <a href="#">Laptops</a>
    </div>

    <!-- main window starts  -->
    <section class="product" id="product">
        <h1 class="heading">latest <span>Products</span></h1>
        <div class="box-container">
            <div class="box">
                <div class="icons">
                    <a href="#" class="fa fa-heart"></a>
                    <a href="#" class="fa fa-share"></a>
                    <a href="#" class="fa fa-eye"></a>
                </div>
                <div class="content">
                    <img src="img/product4/1.jpg" alt="">
                    <h3>Nike Shoes</h3>
                    <div class="price">₹5000 <span>₹7000</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fa fa-heart"></a>
                    <a href="#" class="fa fa-share"></a>
                    <a href="#" class="fa fa-eye"></a>
                </div>
                <div class="content">
                    <img src="img/product4/2.jpg" alt="">
                    <h3>Nike Shoes</h3>
                    <div class="price">₹4999<span>₹8000</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fa fa-heart"></a>
                    <a href="#" class="fa fa-share"></a>
                    <a href="#" class="fa fa-eye"></a>
                </div>
                <div class="content">
                    <img src="img/product4/3.jpg" alt="">
                    <h3>Nike Shoes</h3>
                    <div class="price">₹3999 <span>₹6000</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fa fa-heart"></a>
                    <a href="#" class="fa fa-share"></a>
                    <a href="#" class="fa fa-eye"></a>
                </div>
                <div class="content">
                    <img src="img/product4/5.jpg" alt="">
                    <h3>Nike Shoes</h3>
                    <div class="price">₹4995 <span>₹6000</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fa fa-heart"></a>
                    <a href="#" class="fa fa-share"></a>
                    <a href="#" class="fa fa-eye"></a>
                </div>
                <div class="content">
                    <img src="img/product4/7.png" alt="">
                    <h3>Nike Shoes</h3>
                    <div class="price">₹2999 <span>₹4999</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fa fa-heart"></a>
                    <a href="#" class="fa fa-share"></a>
                    <a href="#" class="fa fa-eye"></a>
                </div>
                <div class="content">
                    <img src="img/product4/8.png" alt="">
                    <h3>Nike Shoes</h3>
                    <div class="price">₹4555 <span>₹5555</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end product-->
    <form action="insertcart.php" method="post">

        <section class="featured" id="fearured">
            <h1 class="heading">New <span>Product</span></h1>
            <div class="row">
                <div class="image-container">
                    <div class="small-image">
                        <img src="img/product1/1.jpg" alt="" class="featured-image-1">
                        <img src="img/product1/2.jpg" alt="" class="featured-image-1">
                        <img src="img/product1/3.jpg" alt="" class="featured-image-1">
                        <img src="img/product1/4.jpg" alt="" class="featured-image-1">
                    </div>
                    <div class="big-image">
                        <img src="img/product1/1.jpg" alt="" class="big-image-1">
                    </div>
                </div>
                <div class="content">
                    <h3 class="name">new nike airmac shoes</h3>
                <div class="price">₹9999 <span>12000</span></div>
                <form action="insertcart.php" method="post">
                        <input type="hidden" name="name" value="Shirt">
                        <input type="hidden" name="price" value="1000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
            </div>
        </div>
        <div class="row">
            <div class="image-container">
                <div class="small-image">
                    <img src="img/product2/1.jpg" alt="" class="featured-image-2">
                    <img src="img/product2/2.jpg" alt="" class="featured-image-2">
                    <img src="img/product2/3.jpg" alt="" class="featured-image-2">
                    <img src="img/product2/4.jpg" alt="" class="featured-image-2">
                </div>
                <div class="big-image">
                    <img src="img/product2/1.jpg" alt="" class="big-image-2">
                </div>
            </div>
            <div class="content">
                <h3 class="name">new nike airmac shoes</h3>
                <div class="price">₹8000 <span>₹10000</span></div>
                <form action="insertcart.php" method="post">
                        <input type="hidden" name="name" value="Shirt">
                        <input type="hidden" name="price" value="1000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
            </div>
        </div>
        <div class="row">
            <div class="image-container">
                <div class="small-image">
                    <img src="img/product3/1.jpg" alt="" class="featured-image-3">
                    <img src="img/product3/2.jpg" alt="" class="featured-image-3">
                    <img src="img/product3/3.jpg" alt="" class="featured-image-3">
                    <img src="img/product3/4.jpg" alt="" class="featured-image-3">
                </div>
                <div class="big-image">
                    <img src="img/product3/1.jpg" alt="" class="big-image-3">
                </div>
            </div>
            <div class="content">
                <h3 class="name">new nike airmac shoes</h3>
                <div class="price">₹6000 <span>₹3000</span></div>
                <form action="insertcart.php" method="post">
                        <input type="hidden" name="name" value="Shirt">
                        <input type="hidden" name="price" value="1000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
            </div>
        </div>
    </section>
</form>
    <!--end featured-->
    <!-- main window ends  -->
    <?php
                if(isset($_GET['true']) == "created"){
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successfully!</strong> Your product added to Cart.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                }
            ?>
    
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
