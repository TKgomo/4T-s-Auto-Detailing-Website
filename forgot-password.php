<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatable" content = "IE=edge">
        <meta name = "viewpoint" content = "width=device-width, initial-scale=1.0">
        <title>Forgot Password</title>
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

    <h1> Forgot Password </h1>
    <form method="post" action="send-password-reset.php">

        <label for="email">email</label>
        <input type="email" name="email" id="email">

        <button>Send</button>

    </form>
</body>
</html>
