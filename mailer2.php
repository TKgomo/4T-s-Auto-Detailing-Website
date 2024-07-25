<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $contact = htmlspecialchars($_POST['contact']);
    $email = htmlspecialchars($_POST['email']);
    $card_number = htmlspecialchars($_POST['card_number']);
    $expiry_date = htmlspecialchars($_POST['expiry_date']);
    $cvv = htmlspecialchars($_POST['cvv']);
    $total = htmlspecialchars($_POST['total']);
    $products = htmlspecialchars($_POST['products']);

    $orderDescription = "Products Ordered: $products";

    $clientMail = new PHPMailer(true);
    $ownerMail = new PHPMailer(true);

    try {
        // Server settings
        $clientMail->isSMTP();
        $clientMail->Host = 'smtp.gmail.com';
        $clientMail->SMTPAuth = true;
        $clientMail->Username = 'tshego.tk123@gmail.com'; // Replace with your Gmail address
        $clientMail->Password = 'enhk dguv kovy ozxn'; // Replace with your Gmail password or app-specific password
        $clientMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $clientMail->Port = 587;

        $ownerMail->isSMTP();
        $ownerMail->Host = 'smtp.gmail.com';
        $ownerMail->SMTPAuth = true;
        $ownerMail->Username = 'tshego.tk123@gmail.com';
        $ownerMail->Password = 'enhk dguv kovy ozxn';
        $ownerMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $ownerMail->Port = 587;

        // Recipients
        $clientMail->setFrom('your-email@gmail.com', '4T\'s Auto Detailing');
        $clientMail->addAddress($email, $name);

        $ownerMail->setFrom('your-email@gmail.com', '4T\'s Auto Detailing');
        $ownerMail->addAddress('tshego.tk123@gmail.com', '4T\'s Auto Detailing Owner'); // Replace with the owner's email address

        // Content for client email
        $clientMail->isHTML(true);
        $clientMail->Subject = 'Order Confirmation';
        $clientMail->Body    = "Dear $name,<br><br>Thank you for your order. Here are your order details:<br>
                               <strong>Order Description:</strong> $orderDescription<br>
                               <strong>Total Amount:</strong> R$total<br><br>Regards,<br>4T's Auto Detailing";

        // Content for owner email
        $ownerMail->isHTML(true);
        $ownerMail->Subject = 'New Order Received';
        $ownerMail->Body    = "New order received:<br><br>
                              <strong>Name:</strong> $name<br>
                              <strong>Contact:</strong> $contact<br>
                              <strong>Email:</strong> $email<br>
                              <strong>Order Description:</strong> $orderDescription<br>
                              <strong>Total Amount:</strong> R$total";

        // Send email
        $clientMail->send();
        $ownerMail->send();

        $message = 'Thank you, Order confirmation email has been sent!';
    
    } catch (Exception $e) {
        $message = "Message could not be sent. Mailer Error: {$clientMail->ErrorInfo}";
    }
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
    <!--<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> or use this one-->
    <link rel="stylesheet" href="Style.css">
    <!-- Poppins font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c8e4d183c3.js" crossorigin="anonymous"></script>
    <style>
        #confirmation{
      position:relative;
      place-items: center;
      display: grid;
  
      padding: 0 80px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: center;
      background-color: #000000;
  
  }
  
  #confirmation::before{
    background-image: url("Uruswhitefront.jpg");
    background-size: cover;
      /*background-position: top 25% right 0;*/
      position:absolute;
      inset:0;
    content: '';
    opacity: 0.20;
  }
        body {
         
            justify-content: center;
            align-items: center;
            height: 60vh;
            margin: 0;
            background-color: #f5f5f5;
            font-family: 'Poppins', sans-serif;
        }

        #confirmation {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            text-align: center;
        }

        .message-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        .confirmation-message {
            font-size: 1.5rem;
            color: #333;
        }
    </style>
</head>
<body>
<section id="header">   
            <a href="Project.php"> <img src="4T's/4T's final logo[300dpi].png"  height = "150" width ="200" 
            alt = "This is the logo " title="4T's logo" ></a>

         
            <div class="form-element">
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
                </div>
        </section>
    <section id="confirmation">
        <div class="message-container">
            <p class="confirmation-message"><?php echo $message; ?></p>
        </div>
    </section>
</body>
</html>