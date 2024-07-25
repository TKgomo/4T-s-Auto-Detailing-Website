<?php
// start the session
session_start();
// check if the user is not logged in, then redirect user to login page
if(!isset($_SESSION['user_name']) && ($_SESSION['user_name']) !== true)
{
	header('location: login.php');
	exit;
}
else{
    $user_name = isset($_SESSION["user_name"]) ? $_SESSION["user_name"] : null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointment Booking</title>
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
      <section id="header">   
            <a href="Project.php"> <img src="4T's/4T's final logo[300dpi].png"  height = "150" width ="200" 
            alt = "This is the logo " title="4T's logo"></a>


            <div class="form-element">

            <label><?php echo $user_name; ?>, fill the form below to book you appointment!</label>
            <div id="nav-button">
                <ul id="navigationBar"> 
                    <li> <a href="Project.php"> Home </a></li>
                    <li> <a class="active" href="booking.php"> Book a Service </a></li>
                    <li> <a href="services.html"> Services </a></li>
                    <li> <a href="shop.php"> Shop </a></li>
                    <li> <a href="blog.html"> Blog </a></li>
                    <li> <a href="about.html"> About </a></li>
                    <li> <a href="contact.html"> Contact </a></li>
                    <li id="lg-bag"> <a href="cart.php"><i class="far fa-shopping-bag" ></i> </a></li>
                    <a href="# " id="close"><i class="far fa-times"></i> </a>
                    
                </ul>
        </section>
      </head>
      <hr>
      <br>
        
    <body>
        
    <style>
        /* Add some basic styling */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Book an Appointment</h2>
        <form id="bookingForm">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                <input type="time" id="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Book Appointment</button>
            </div>
        </form>
        <div id="confirmation" style="display:none;">
            <p>Appointment successfully booked!</p>
        </div>
        <hr>
        <hr>
    </div>
    <br>
    <hr>
    <br>
    <script>
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            fetch('book_appointment.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('bookingForm').style.display = 'none';
                    document.getElementById('confirmation').style.display = 'block';
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>

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
</html>
