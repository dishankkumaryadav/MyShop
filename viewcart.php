<?php
    session_start();

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

    <link rel="stylesheet" href="files/shoes.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
        <a href="#">Shoes</a>
        <div class="row">
            <h1 class="text-center border-bottom pb-4 mb-4">View Cart Products</h1>
            <?php
                if(isset($_GET['value']) == "updated"){
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Successfully!</strong> Your product updated.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                }else if(isset($_GET['value']) == "deleted"){
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Successfully!</strong> Your product deleted.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                }
            ?>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <td>Sno</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Total</td>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sno = 1;
                        $t = 0;
                        foreach($_SESSION as $product){
                            $p = 0;
                            $q = 0;
                            echo "<form action='editCart.php' method='POST'>";
                            echo "<tr>";
                                echo "<td>".$sno++."</td>";
                                foreach($product as $key => $value){
                                    if($key == 0){
                                        echo "<td>".$value."</td>";
                                        echo "<input type='hidden' name='pro$key' value='".$value."'>";
                                    }else if($key == 1){
                                        echo "<td>".$value."</td>";
                                        echo "<input type='hidden' name='pro$key' value='".$value."'>";
                                        $p = $value;
                                    }else if($key == 2){
                                        echo "<td><input type='text' name='pro$key' value='".$value."' class='form-control'></td>";
                                        $q = $value;
                                    }
                                }
                                $t = $p * $q;
                                echo "<td>".$t."</td>";
                                echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";
                                echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";
                            echo "</tr>";
                            echo "</form>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
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
