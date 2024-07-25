<?php
    session_start();
    include('config-admin.php');
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p class="error">The email address is already registered!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO adminlog(username,password,email) VALUES (:username,:password_hash,:email)");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                echo '<p class="success">Your registration was successful!</p>';
            } else {
                echo '<p class="error">Something went wrong!</p>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - 4T's Auto Detailing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="containers">
        <form method="post" action="" name="signup-form">
          
            
            <div class="form-element">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" pattern="[a-zA-Z0-9]+" required />
            </div>
            
            <div class="form-element">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required />
            </div>
            
            <div class="form-element">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required />
            </div>

            <div class="form-element">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required />
            </div>

            <div class="form-element">
                <label for="contact">Contact</label>
                <input type="text" id="contact" name="contact" required />
            </div>
            
            <button type="submit" name="register" value="register">Register</button>
            <p>Already have an account? <a href="login-admin.php">Login here</a></p>
            <p>Return to Home Page: <a href="Project.php">Click Here</a></p>
        </form>
    </div>
</body>
</html>


<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    
    
    height: 80vh;
    margin-top: 80px;
      
      position:relative;
      place-items: center;
      display: grid;
  
      padding: 0 80px;
      display: flex;
      flex-direction: column;
      align-items:center;
      justify-content: center;
      background-color: #000000;
  }
  
  body::before{
    background-image: url("G63 white whole.jpg");
    background-size: cover;
      /*background-position: top 25% right 0;*/
      position:absolute;
      inset:0;
    content: '';
    opacity: 0.20;
  }

.container {
    background: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 20px, 20px, 20px, 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
}

form h1 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #333;
}

label {
    display: block;
    margin-bottom: 8px;
    font-size: 1rem;
    color: #fff;
}

input {
    width: calc(100% - 22px);
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

button {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

p {
    margin-top: 10px;
    color: #fff;
}

p a {
    color: #007bff;
    text-decoration: none;
}

p a:hover {
    text-decoration: underline;
}
</style>