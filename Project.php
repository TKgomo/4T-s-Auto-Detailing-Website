<?php
session_start();
$user_name = isset($_SESSION["user_name"]) ? $_SESSION["user_name"] : null;
?>


<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatable" content = "IE=edge">
        <meta name = "viewpoint" content = "width=device-width, initial-scale=1.0">  
        <title>4T's Auto Deatiling</title>
        <link rel="shortcut icon" type="image/jpg" href="4T's/4T's final logo[300dpi].png"/>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <!--<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> or use this one-->

        <link rel = "stylesheet" href="Style.css">

        <!-- Popins font family -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/c8e4d183c3.js " crossorigin="anonymous"> </script>
      </head>
    <body>
        <section id="header">   
            <a href="Project.php"> <img src="4T's/4T's final logo[300dpi].png"  height = "150" width ="200" 
            alt = "This is the logo " title="4T's logo" ></a>

         
            <div class="form-element">

            <label>Welcome <?php echo $user_name; ?>!</label>
            <div id="nav-button">
                <ul id="navigationBar"> 
                    <li> <a class="active" href="Project.php"> Home </a></li>
                    <li> <a href="services.html"> Services </a></li>
                    <li> <a href="shop.php"> Shop </a></li>
                    <li> <a href="blog.html"> Blog </a></li>
                    <li> <a href="about.html"> About </a></li>
                    <li> <a href="contact.html"> Contact </a></li>
                    <li id="lg-bag"> <a href="cart.php"><i class="far fa-shopping-bag" ></i> </a></li>
                    <a href="# " id="close"><i class="far fa-times"></i> </a>
                    
                </ul>
                <button id="logoutButton" class="normal" >Logout</button>
                <script>
                document.getElementById('logoutButton').addEventListener('click', function() {
                    window.location.href = 'logout.php';
                });
              </script> 
                <button class="normal" onclick="window.location.href='register.php';"> Sign Up! </button>
            </div>

            <div id="mobile"> 
              <a href="cart.html"><i class="far fa-shopping-bag" ></i> </a>
              <i id="bar" class="fas fa-outdent"> </i>
            </div>


        </section>


        <section id="hero">
              

              
                <h4>Transform your car with our services!</h4>
                <h2> 4T'S AUTOMOTIVE </h2>
                <h1> DETAILING!</h1>
                <p> Regular client? Get up to 30% off!</p>
                <button onclick="window.location.href='booking.php';" > Book Now</button> 
           
                
                
        </section>
        
       <!-- <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="4T's/free shipping.jpg"alt="" height="90%" width="90%">
                <h6>Free Product Shipping</h6>
            </div>
            <div class="fe-box">
                <img src="4T's/Online Order.jpg"alt="" height="90%" width="90%">
                <h6>Online Order</h6>
            </div>
            <div class="fe-box">
                <img src="4T's/Save Money.jpg"alt="" height="90%" width="90%">
                <h6>Save Money</h6>
            </div>
            <div class="fe-box">
                <img src="4T's/Execellent services.jpg"alt="" height="90%" width="90%">
                <h6>Execellent Services</h6>
            </div>
    
            <div class="fe-box">
                <img src="4T's/24,,7 support2.jpg"alt="" height="90%" width="90%">
                <h6>F24/7 Support</h6>
            </div>
        </section>-->

        <section id="serprod" class="section-p1">
          <div class="bub">
            <img src="4T's/bubble.png" alt="">
            <img src="4T's/bubble.png" alt="">
            <img src="4T's/bubble.png" alt="">
            <img src="4T's/bubble.png" alt="">
            <img src="4T's/bubble.png" alt="">
            <img src="4T's/bubble.png" alt="">
            <img src="4T's/bubble.png"alt="">
          </div>
            <div class="container">
              
                <ul>
                 
                  <li class="se2">Ceramic Coating </li>
                  <li class="se3">Paint Correction</li>
                  <li class="se4">Paint Protection Film</li>
                  <li class="se5">Maintenace Wash</li>
                  <li class="se6">Interior Detailing</li>
                  <li class="se7">Headlight Restoration</li>
                  <li class="se9">Engine Bay Detailing</li>
                </ul>
              </div>
            </div>
           
        </section>

        <setion id="aboutus" class="section-p1">
            
          
            <p> 
                
                Are you ready to embark on a journey of entrepreneurship and environmental consciousness?<br>
                Imagine a venture where you bring shine to dull exteriors while embracing the freedom of mobility.<br>
                <br>
                <b>Introducing the world of Mobile Car Washing.</b><br>
                <br>
                
                In a world where time is precious and convenience is king, mobile car wash services offer a beacon of hope for both vehicle owners and aspiring business owners.<br>
                The freedom to take your car wash wherever it's needed ensures you're not just providing a service; you're delivering a solution.
            </p>
     


        </setion>
        <br>
        <br>

        <!--<section id="pics">
              <style>
                * {box-sizing: border-box;}
                body {font-family: Verdana, sans-serif;}
                .mySlides {display: none;}
                img {vertical-align: middle;}
                
                /* Slideshow container */
                .slideshow-container {
                  max-width: 1000px;
                  position: relative;
                  margin: auto;
                }
                
                /* Caption text */
                .text {
                  color: #fffdfd;
                  font-size: 20px;
                  padding: 8px 12px;
                  position: absolute;
                  bottom: 8px;
                  width: 100%;
                  text-align: center;
                }
                
                /* Number text (1/3 etc) */
                .numbertext {
                  color: #f2f2f2;
                  font-size: 12px;
                  padding: 8px 12px;
                  position: absolute;
                  top: 0;
                }
                
                /* The dots/bullets/indicators */
                .dot {
                  height: 15px;
                  width: 15px;
                  margin: 0 2px;
                  background-color: #bbb;
                  border-radius: 50%;
                  display: inline-block;
                  transition: background-color 0.6s ease;
                }
                
                .active {
                  background-color: #717171;
                }
                
                /* Fading animation */
                .fade {
                  animation-name: fade;
                  animation-duration: 1.5s;
                }
                
                @keyframes fade {
                  from {opacity: .4} 
                  to {opacity: 1}
                }
                
                /* On smaller screens, decrease text size */
                @media only screen and (max-width: 300px) {
                  .text {font-size: 11px}
                }
                </style>
                </head>
                <body>
                
                <div class="slideshow-container">
                
                <div class="mySlides fade">
                  <div class="numbertext">1 / 7</div>
                  <img src="4T's/Cerminc Coating.jpg" style="width:100%">
                  <div class="text">Ceramic Coating </div>
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">2 / 7</div>
                  <img src="4T's/Car-Paint-Correction-D-071121-1024x640.jpg" style="width:100%">
                  <div class="text">Paint Correction</div>
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">3 / 7</div>
                  <img src="4T's/paint protection.jpg" style="width:100%">
                  <div class="text">Paint Protection Film</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 7</div>
                    <img src="4T's/maintenace wash.jpg" style="width:100%">
                    <div class="text">Maintenace Wash</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">5 / 7</div>
                    <img src="4T's/auto-detailing-car-interior-eps-2048x1367-1.jpeg" style="width:100%">
                    <div class="text">Interior Detailing</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">6 / 7</div>
                    <img src="4T's/repair-workshop-specialist-cleaning-headlight-with-2021-09-07-20-59-13-utc.jpg" style="width:100%">
                    <div class="text">Headlight Restoration</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">7 / 7</div>
                    <img src="4T's/engine bay.jpg" style="width:100%">
                    <div class="text">Engine Bay Detailing</div>
                </div>
                
                </div>
                <br>
                
                <div style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span>
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                </div>
                
                <script>
                let slideIndex = 0;
                showSlides();
                
                function showSlides() {
                  let i;
                  let slides = document.getElementsByClassName("mySlides");
                  let dots = document.getElementsByClassName("dot");
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                  }
                  slideIndex++;
                  if (slideIndex > slides.length) {slideIndex = 1}    
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " active";
                  setTimeout(showSlides, 2000); // Change image every 2 seconds
                }
                </script>
        </section > -->
        <br>
        <section id="heading">  
          <div class="bub">
            <img src="4T's/bubble.png" alt="">
            <img src="4T's/bubble.png" alt="">
            <img src="4T's/bubble.png" alt="">
            <img src="4T's/bubble.png" alt="">
            <img src="4T's/bubble.png" alt="">
            <img src="4T's/bubble.png" alt="">
            <img src="4T's/bubble.png" alt="">
          </div>
          <div class:servOffed>
        <h2> SERVICES OFFERED </h2>
        <p>4T's offers a professional line of services for your Vehicle or Motocycle.</p>
         </div>
         </section>

        <section class="threebox" class=".section-p1">
        <style>
          body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color:#bbb
          }
          .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 100vh;
            padding-top: 50px;
            text-align: center;
            text-decoration: white;
          
          }
          .box {
            width: 30%;
            background-color: #9faab6;
            padding: 20px;
            border-radius: 10px;
            margin: 10px;
            opacity: 0;
            animation: fadeIn 4s forwards;
            text-decoration: white;
   
          }
          .blue-box {
            background-color: #0f3b58;
            color: rgb(255, 255, 255);
            padding-bottom: 5%;
          }
          .red-box {
            background-color: #692922;
            padding-bottom: 15%;
            color: rgb(202, 0, 0);
          }
          .gray-box {

            background-color: #95a5a6;
            padding-bottom: 25%;
          }
          @keyframes fadeIn {
            from {
              opacity: 0;
            }
            to {
              opacity: 1;
            }
          }
          
    
          
        </style>
        </head>
        <body>
        
        <div class="container">
          <div class="box blue-box">
            <h2>Paint Protection Film</h2>
            <p>A revolutionary solution for preserving the pristine look of your vehicle's paintwork. 
              Acting as an invisible shield, PPF safeguards your car from scratches, chips, and other damage caused by road debris, environmental factors, and everyday wear and tear.

              With its transparent and ultra-thin construction, PPF seamlessly adheres to the curves and contours of your car, providing unparalleled protection without altering its appearance. 
              This innovative film is engineered to withstand harsh conditions while maintaining clarity and durability, ensuring your vehicle retains its factory-fresh finish for years to come.</p>
          </div>
          <div class="box red-box" style="animation-delay: 0.5s;">
            <h2>Paint Correction</h2>
            <p>Discover the brilliance of your car's true shine with 4T's Auto Detailing's Paint Correction service. 
              Say goodbye to swirl marks, scratches, and imperfections as our expert technicians meticulously restore your vehicle's paintwork to its original luster. 
              Using advanced techniques and premium products, we eliminate blemishes and enhance the clarity and depth of your car's finish. 
              Experience the transformation and fall in love with your car all over again. Trust 4T's Auto Detailing for unrivaled excellence in Paint Correction.</p>
          </div>
          <div class="box gray-box" style="animation-delay: 1s;">
            <h2>Ceramic Coating</h2>
            <p>Revolutionize your car's appearance and protection with 4T's Auto Detailing's Ceramic Coating service. 
              Our cutting-edge ceramic coating technology offers unparalleled defense against the elements, from UV rays to dirt and debris. 
              Say goodbye to frequent waxing and polishing – our ceramic coating forms a resilient barrier that keeps your car looking glossy and new for years to come. 
              Experience the ultimate shine and durability with 4T's Auto Detailing's Ceramic Coating. 
              Trust us to preserve your vehicle's beauty and value, one coat at a time.</p>
            
          </div>
        </div>

        
        </body>
      </section>

      <section id="testimonals">
        <div class="bub">
          <img src="4T's/bubble.png" alt="">
          <img src="4T's/bubble.png" alt="">
          <img src="4T's/bubble.png" alt="">
          <img src="4T's/bubble.png" alt="">
          <img src="4T's/bubble.png" alt="">
          <img src="4T's/bubble.png" alt="">
          <img src="4T's/bubble.png" alt="">
        </div>
        <div class="testimonals-heading">
          <span>Comments</span>
          <h1> TESTIMONALS</h1>


        </div>
<!-- testimonal-box-contaier-->
        <div class="testimonal-box-container">
          <!--BOX-1-->
            <div class="testimonal-box">
              <!-- top-->
              <div class="box-top"> 
                <!-- profile-->
                <div class="profile">
                  <!-- image-->
                  <div class="profile-img">
                    <img src ="testimonal 2.jpg" alt=""/>

                  </div>
                  <!-- name-->
                  <div class="name-user"> 
                    <strong> Emily Rodriguez </strong>
                    <span> emily.rodriguez@gmail.com</span>
                  </div>

                </div>


                  <!-- reviews-->
                  <div class="reviews">
                      <i class="fas fa-star">   </i>
                      <i class="fas fa-star">   </i>
                      <i class="fas fa-star">   </i>
                      <i class="fas fa-star">   </i>
                      <i class="far fa-star">   </i>
                  </div>

              </div>

              <!-- Comments-->
              <div class="client-comment"> 
                <p> 
                  I recently had the pleasure of utilizing the car wash service from 4T's Auto Detailing, and I must say, I am thoroughly impressed. From start to finish, the experience was nothing short of excellent.
                  The paint correction exceeded my expectations.
                  Thank you to the entire team at 4T's Auto Detailing for exceeding my expectations and providing an exceptional car wash experience.
                  I'll definitely be returning for all my future automotive detailing needs.
                </p>
              </div>
              
            </div>
            <!--BOX-2-->
            <div class="testimonal-box">
              <!-- top-->
              <div class="box-top"> 
                <!-- profile-->
                <div class="profile">
                  <!-- image-->
                  <div class="profile-img">
                    <img src ="testimonal1.avif" alt=""/>

                  </div>
                  <!-- name-->
                  <div class="name-user"> 
                    <strong> Alex Carter </strong>
                    <span> alex.carter@gmail.com</span>
                  </div>

                </div>


                  <!-- reviews-->
                  <div class="reviews">
                      <i class="fas fa-star">   </i>
                      <i class="fas fa-star">   </i>
                      <i class="fas fa-star">   </i>
                      <i class="fas fa-star">   </i>
                      <i class="fas fa-star">   </i>
                  </div>

              </div>

              <!-- Comments-->
              <div class="client-comment"> 
                <p> 
                  I recently had the pleasure of experiencing the car wash service at 4T's Auto Deatiling, and I am absolutely thrilled with the results. 
                  The staff at 4T's Auto Deatiling exhibited a level of professionalism.
                  The ceramic coating applied to my car has completely transformed its appearance and protection.
                  The combination of exceptional customer service make them stand out as a leader in the industry.
                </p>
              </div>
              
            </div>
            <!--BOX-3-->
            <div class="testimonal-box">
              <!-- top-->
              <div class="box-top"> 
                <!-- profile-->
                <div class="profile">
                  <!-- image-->
                  <div class="profile-img">
                    <img src ="testimonal5.jpg" alt=""/>

                  </div>
                  <!-- name-->
                  <div class="name-user"> 
                    <strong> Daniel Johnson</strong>
                    <span> daniel.johnson@vossie.net</span>
                  </div>

                </div>


                  <!-- reviews-->
                  <div class="reviews">
                      <i class="fas fa-star">   </i>
                      <i class="fas fa-star">   </i>
                      <i class="fas fa-star">   </i>
                      <i class="fas fa-star">   </i>
                      <i class="far fa-star">   </i>
                  </div>

              </div>

              <!-- Comments-->
              <div class="client-comment"> 
                <p> 
                  I am writing to express my utmost satisfaction with the car wash service I received from 4T's Auto Deatiling. 
                  They above and beyond by applying a top-notch paint protection film to my vehicle.
                  In addition to the outstanding paint protection film service, the car wash itself was impeccable.
                  A heartfelt thank you to the entire team at 4T's Auto Deatiling.
                  I will definitely be returning for all my future automotive detailing needs.
                </p>
              </div>
              
            </div>
            <!--BOX-4-->
            <div class="testimonal-box">
              <!-- top-->
              <div class="box-top"> 
                <!-- profile-->
                <div class="profile">
                  <!-- image-->
                  <div class="profile-img">
                    <img src ="testimonall1.jpg" alt=""/>

                  </div>
                  <!-- name-->
                  <div class="name-user"> 
                    <strong> Sophia Lee </strong>
                    <span> SophiaLee2@gmail.com</span>
                  </div>

                </div>


                  <!-- reviews-->
                  <div class="reviews">
                      <i class="fas fa-star">   </i>
                      <i class="fas fa-star">   </i>
                      <i class="fas fa-star">   </i>
                      <i class="fas fa-star">   </i>
                      <i class="fas fa-star">   </i>
                  </div>

              </div>

              <!-- Comments-->
              <div class="client-comment"> 
                <p> 
                  I am delighted to share my experience with 4T's Auto Detailing, where I recently received a top-notch car wash service that included a maintenance wash and interior detailing. 
                  The maintenance wash exceeded my expectations. 
                  Not only did it remove all traces of dirt and grime from the exterior of my vehicle, but it also left behind a streak-free shine that turned heads as I drove away.
                  The combination of exceptional customer service, meticulous attention to detail, and top-notch results!
                </p>
              </div>
              
            </div>


        </div>

      </section>

      <section id="banner" class="section-m1">
        <h4> Services </h4>\
        <h2> Up to <span> 30% off </span> -All Products and Services</h2>
        <button class="normal" onclick="window.location.href='shop.php';"> Explore </button>

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

      <section id="sm-banner" class="section-p1">
        <div class="banner-box">
          <h4> Insane Deals</h4>
          <h2> Wash Four, get the Fifth free!</h2>
          <span> Revitalize your ride! Worldclass Auto Detailing at you doorstep.</span>
          <button class="white" onclick="window.location.href='services.html';"> Explore More</button>
        </div>
        <div class="banner-box2">
          <h4> Spring/Summer</h4>
          <h2> Upcoming season: Deep Vallet </h2>
          <span> From Dust to Dazzle: Transform your Vehicle with our expert Detailing!</span>
          <button class="white" onclick="window.location.href='shop.php';" > Explore More</button>
        </div>
      </section>

      <section id="banner3">
        <div class="banner-box">
          <h2> Season Sale </h2>
          <h3> Product Collection - 30% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
          <h2> Body Collection  </h2>
          <h3> Spring/Summer 2024</h3>
        </div>
        <div class="banner-box banner-box3">
          <h2> Maintenace Wash </h2>
          <h3> Product Collection - 30% OFF</h3>
        </div>
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



        
       

        <script src="script.js"></script>
    </body>
</html>