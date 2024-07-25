<?php
session_start();
include 'config.php';
$isLoggedIn = false;
 
$user = array('full_name' => '', 'email' => '');
 
// Check if the user is logged in
if (isset($_SESSION['user'])) {
    $isLoggedIn = true;
 
    $userEmail = $_SESSION['user'];
    $query = "SELECT * FROM username WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $userEmail);
    $stmt->execute();
    $result = $stmt->get_result();
 
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    }
 
    $stmt->close();
}

// Fetch products
$query = "SELECT * FROM products";
$result = $conn->query($query);
$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}
?>

<!DOCTYPE html>
      <html lang="en">
      <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4T's Auto Detailing</title>
    <link rel="shortcut icon" type="image/jpg" href="4T's/4T's final logo[300dpi].png"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c8e4d183c3.js" crossorigin="anonymous"></script>
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
                    <li> <a class="active" href="Shop.php"> Shop </a></li>
                    <li> <a href="blog.html"> Blog </a></li>
                    <li> <a href="about.html"> About </a></li>
                    <li> <a href="contact.html"> Contact </a></li>
                    <li>
                    <?php if ($isLoggedIn): ?>
                        <a href="logout.php">Logout</a>
                    <?php else: ?>
                        <a href="login.php">Login</a>
                    <?php endif; ?>
                </li>
                    <li id="lg-bag"> <a href="cart.php"><i class="far fa-shopping-bag" ></i> </a></li>
                    <a href="# " id="close"><i class="far fa-times"></i> </a>
                </ul>  
                 
            </div>

            <div id="mobile"> 
              <a href="cart.html"><i class="far fa-shopping-bag" ></i> </a>
              <i id="bar" class="fas fa-outdent"> </i>
            </div>

            <div id="mobile">
            <i id="bar" class="fas fa-outdent"> </i>
        </div>
        </section>


        <section id="page-header">              
                <h2> #stayhome </h2>              
                <p> 4T'S Delivery Team is right at your door step!</p>               
        </section>

        

        <section id="product1" class="section-p1">
            <div class="pro-container"> 
              <div class="pro" data-id="1" data-name="Interior Spray" data-price="180" data-image="4T's/278022229_1643381132690885_2134381468481922954_n (1).jpg">
                    <img src ="4T's/278022229_1643381132690885_2134381468481922954_n (1).jpg" alt="">
                    <div class="des">
                        <span > 4T's Deatiling </span> 
                        <h5> Interior Spray </h5>
                        <div class="star">
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>  
                        </div>
                        <h4> R180 </h4>
                    </div>
                    <button class="add-to-cart" >Add to Cart</button>
                    <a href="#"> <i class="fal fa-shopping-cart cart"> </i></a>
                </div>
                <div class="pro" data-id="2" data-name="Car Defuser" data-price="100" data-image="4T's/296291951_123904273689905_9068731781662753385_n (1).jpg">
                    <img src ="4T's/296291951_123904273689905_9068731781662753385_n (1).jpg" alt="">
                    <div class="des">
                        <span > 4T's Deatiling </span> 
                        <h5> Car Defuser </h5>
                        <div class="star">
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>  
                        </div>
                        <h4> R100 </h4>
                    </div>
                    <button class="add-to-cart" >Add to Cart</button>
                    <a href="#"> <i class="fal fa-shopping-cart cart"> </i></a>
                </div>
                <div class="pro" data-id="3" data-name="Interior Spray" data-price="180" data-image="4T's/284570094_516605996823377_4288589501430054180_n.jpg">
                    <img src ="4T's/284570094_516605996823377_4288589501430054180_n.jpg" alt="">
                    <div class="des">
                        <span > 4T's Deatiling </span> 
                        <h5> Interior Spray </h5>
                        <div class="star">
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>  
                        </div>
                        <h4> R180 </h4>
                    </div>
                    <button class="add-to-cart" >Add to Cart</button>
                    <a href="#"> <i class="fal fa-shopping-cart cart"> </i></a>
                </div>
                <div class="pro" data-id="4" data-name="Interior Spray" data-price="180" data-image="4T's/294450516_832354471476537_9207397156161418104_n.jpg">
                    <img src ="4T's/294450516_832354471476537_9207397156161418104_n.jpg" alt="">
                    <div class="des">
                        <span > 4T's Deatiling </span> 
                        <h5> Interior Spray </h5>
                        <div class="star">
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>  
                        </div>
                        <h4> R180</h4>
                    </div>
                    <button class="add-to-cart" >Add to Cart</button>
                    <a href="#"> <i class="fal fa-shopping-cart cart"> </i></a>
                </div>
                <div class="pro" data-id="5" data-name="Black Shirt" data-price="250" data-image="4T's/4T's T-shirt Design 2.png">
                    <img src ="4T's/4T's T-shirt Design 2.png" alt="">
                    <div class="des">
                        <span > 4T's Deatiling </span> 
                        <h5> Black Shirt </h5>
                        <div class="star">
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>  
                        </div>
                        <h4> R250</h4>
                    </div>
                    <button class="add-to-cart" >Add to Cart</button>
                    <a href="#"> <i class="fal fa-shopping-cart cart"> </i></a>
                </div>
                <div class="pro" data-id="6" data-name="White Shirt" data-price="250" data-image="4T's/4T's T-shirt Design 4.png">
                    <img src ="4T's/4T's T-shirt Design 4.png" alt="">
                    <div class="des">
                        <span > 4T's Deatiling </span> 
                        <h5> White Shirt </h5>
                        <div class="star">
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>  
                        </div>
                        <h4> R250</h4>
                    </div>
                    <button class="add-to-cart" >Add to Cart</button>
                    <a href="#"> <i class="fal fa-shopping-cart cart"> </i></a>
                </div>
                <div class="pro" data-id="7" data-name="Black Hoodie" data-price="450" data-image="blackhoodie1.png">
                    <img src ="blackhoodie1.png" alt="">
                    <div class="des">
                        <span > 4T's Deatiling </span> 
                        <h5> Black Hoodie </h5>
                        <div class="star">
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>  
                        </div>
                        <h4> R450</h4>
                    </div>
                    <button class="add-to-cart" >Add to Cart</button>
                    <a href="#"> <i class="fal fa-shopping-cart cart"> </i></a>
                </div>
                <div class="pro" data-id="8" data-name="White Hoodie" data-price="450" data-image="whitehoodie1.png">
                    <img src ="whitehoodie1.png" alt="">
                    <div class="des">
                        <span > 4T's Deatiling </span> 
                        <h5> White Hoodie </h5>
                        <div class="star">
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i> 
                            <i class="fas fa-star"> </i>  
                        </div>
                        <h4> R450</h4>
                    </div>
                    <button class="add-to-cart" >Add to Cart</button>
                    <a href="#"> <i class="fal fa-shopping-cart cart"> </i></a> 
                </div>

                
                <?php foreach ($products as $product): ?>
                <div class="pro" data-id="<?= htmlspecialchars($product['id']) ?>" data-name="<?= htmlspecialchars($product['name']) ?>" data-price="<?= htmlspecialchars($product['price']) ?>" data-image="<?= htmlspecialchars($product['image']) ?>">
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                    <div class="des">
                        <span><?= htmlspecialchars($product['name']) ?></span>
                        <h4>R<?= htmlspecialchars($product['price']) ?></h4>
                    </div>
            <button class="add-to-cart">Add to Cart</button>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <?php endforeach; ?>
        </div>
            </div> 

        </section>
        <br>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cartButtons = document.querySelectorAll('.add-to-cart');

            cartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const productElement = this.closest('.pro');
                    const productId = productElement.getAttribute('data-id');
                    const productName = productElement.getAttribute('data-name');
                    const productPrice = productElement.getAttribute('data-price');
                    const productImage = productElement.getAttribute('data-image');

                    const cartItem = {
                        id: productId,
                        name: productName,
                        price: productPrice,
                        image: productImage
                    };

                    addToCart(cartItem);
                });
            });
        });

        function addToCart(item) {
            // Send AJAX request to add item to the cart
            fetch('add_to_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(item)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                   // alert('Product added to cart successfully!');
                } else {
                    alert('Failed to add product to cart.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>

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

      <section id="pagination" class= "section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
      </section>


      <section id="newsletter" class="section-p1 section-m1" >

        <div class="bub">
          <img src="4T's/bubble.png"alt="">
          <img src="4T's/bubble.png"alt="">
          <img src="4T's/bubble.png"alt="">
          <img src="4T's/bubble.png"alt="">
          <img src="4T's/bubble.png"alt="">
          <img src="4T's/bubble.png"alt="">
          <img src="4T's/bubble.png"alt="">
        </div>

        <div class="newsText">
          <h4> Sign Up For Daily Newsletters</h4>
          <p> Get E-mail updates about our latest Services and product <span> special offers. </span></p>
        </div>

        <div class="Form">
          <input type="text" placeholder="Your E-mail Address">
          <button class="normal"> Sign Up</button>
        </div>
      </section>

    
    


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
       
       <script>
        const isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;
       </script>
        <script src="shop.js"></script>
    </body>
</html>
