<?php
// start the session
session_start();
// check if the user is not logged in, then redirect user to login page
if(!isset($_SESSION['user_name']) && ($_SESSION['user_name']) !== true)
{
	header('location: login.php');
	exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4T's Auto Detailing - Cart</title>
    <link rel="shortcut icon" type="image/jpg" href="4T's/4T's final logo[300dpi].png"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="Style.css">
</head>
<body>
        <section id="header">   
            <a href="Project.php"> <img src="4T's/4T's final logo[300dpi].png"  height = "150" width ="200" 
            alt = "This is the logo " title="4T's logo"></a>

            <div>
                <ul id="navigationBar"> 
                    <li> <a  href="Project.php"> Home </a></li>
                    <li> <a href="services.html"> Services </a></li>
                    <li> <a href="booking.php"> Book A Service </a></li>
                    <li> <a  href="shop.php"> Shop </a></li>
                    <li> <a  href="blog.html"> Blog </a></li>
                    <li> <a  href="about.html"> About </a></li>
                    <li> <a  href="contact.html"> Contact </a></li>
                    <li id="lg-bag"> <a class="active" href="cart.php"><i class="far fa-shopping-bag" ></i> </a></li>
                    <a href="# " id="close"><i class="far fa-times"></i> </a>
                </ul>   
            </div>

            <div id="mobile"> 
              <a href="cart.html"><i class="far fa-shopping-bag" ></i> </a>
              <i id="bar" class="fas fa-outdent"> </i>
            </div>


        </section>

        <section id="About-header">       
                <h2> #Cart </h2>              
                <p> Make Your Purchases seamlessly  !</p>     
        </section>

      <section id="bubbles">

        <div class="bub">
          <img src="4T's/bubble.png"alt="">
          <img src="4T's/bubble.png"alt="">
          <img src="4T's/bubble.png"alt="">
          <img src="4T's/bubble.png"alt="">
          <img src="4T's/bubble.png"alt="">
          <img src="4T's/bubble.png"alt="">
          <img src="4T's/bubble.png"alt="">
        </div>

      </section>

    <main>
        <section id="cart" class="section-p1">
            <h2>Your Cart</h2>
            <table id="cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Cart items will be dynamically injected here -->
                </tbody>
            </table>
            <div class="cart-total">
                <h3>Total: R<span id="total-price">0</span></h3>
            </div>
            <button id="checkout" class="normal" onclick="window.location.href='card.html';">Proceed to Checkout</button>
        </section>
        
    </main>
    <footer id="foot" class="section-p1">
          <div class="col">
          <a href="Project.php"><img  class="logo"src="4T's/4T's final logo[300dpi].png" alt=""  height = "150" width ="200" >
            <h4> Contact</h4>
            <p> <strong>Address:</strong> 48 Katakoeroe Road, Birch Acres ext, Kempton Park</p>
            <p> <strong>Phone:</strong> 061 411 3263/ 072 052 0143</p>
            <p> <strong>Hours:</strong> 09:00 - 18:00, Mon - Sat</p>

            <div class="follow"> 
              <h4> Follow us</h4>
                <div class="icon"> 
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-instagram"></i>
                  <i class="fab fa-youtube"></i>
                </div>
            </div>
          </div>

          <div class="col"> 
            <h4> About </h4>
            <a href="about.html"> About us </a>
            <a href="contact.html"> Contact Us </a>
          </div>

          <div class="col"> 
            <h4> My Account </h4>
            <a href="login.php"> Sign In</a>
            <a href="cart.php"> View Cart </a>
            <a href="contact.html"> Help </a>
          </div>

          <div class="col install">
            <h4> Install App </h4>
            <p> From App Store or Goggle Play </p>

          <div class="copyright"> 
            <p> Copyright &copy; 4t's Auto Detailing 2020-2024</p>
          </div>

          <div class="bub">
            <img src="4T's/bubble.png"alt="">
            <img src="4T's/bubble.png"alt="">
            <img src="4T's/bubble.png"alt="">
            <img src="4T's/bubble.png"alt="">
            <img src="4T's/bubble.png"alt="">
            <img src="4T's/bubble.png"alt="">
            <img src="4T's/bubble.png"alt="">
          </div>
       </footer>

    </body>
    <script src="cart.js"></script>
</body>
</html>