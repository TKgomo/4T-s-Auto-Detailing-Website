<?php
include('config.php');
//include('session.php');
if (isset($_POST['register']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    // Check if the password is strong
    if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/', $password)) {
        echo '<p class="error">Password must be at least 8 characters long and include at least one letter, one number, and one special character!</p>';
    } else {
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) {
            echo '<p class="error">The email address is already registered!</p>';
        } else {
            $query = $connection->prepare("INSERT INTO users(username, password, email, address, contact) VALUES (:username, :password_hash, :email, :address, :contact)");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->bindParam("address", $address, PDO::PARAM_STR);
            $query->bindParam("contact", $contact, PDO::PARAM_STR);
            $result = $query->execute();

            if ($result) {
                echo '<p class="success">Your registration was successful!</p>';
            } else {
                echo '<p class="error">Your registration was not successful!</p>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>

    <div class="container">
        <div class="imgLog">
        <a href="#"> <img src="4T's/4T's final logo[300dpi].png"  height = "150" width ="200" 
            alt = "This is the logo " title="4T's logo"></a>
        </div>
        <form method="post" action="" name="signin-form">
            <h1>Register</h1>
            <div class="form-element">
                <label>Username</label>
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
            </div>
            <div class="form-element">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required />
            </div>
            <div class="form-element">
                <label>Password</label>
                <input type="password" name="password" required />
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
            <p>Already have an account? <a href="login.php">Login here</a></p>
            <p>Return to Home Page: <a href="Project.php">Click Here</a></p>
        </form>
        <a href="forgot-password.php">Forgot Password?</a>
    </div>
</body>
</html>

<style>

.imgLog{
    padding-left: 60px;
}
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;

}

body {
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #000000;
    position: relative;
}

body::before {
    background-image: url("G63 white wheel.jpg");
    background-size: cover;
    position: absolute;
    content: '';
    inset: 0;
    opacity: 0.2;
}

.container {
    background: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 80%;
    box-sizing: border-box;
    z-index: 1;
}

form h1 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #333;
    text-align: center;
}

label {
    display: block;
    margin-bottom: 8px;
    font-size: 1rem;
    color: #333;
}

input {
    width: 100%;
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
    color: #333;
    text-align: center;
}

p a {
    color: #007bff;
    text-decoration: none;
}

p a:hover {
    text-decoration: underline;
}

/* Responsive design */
@media (max-width: 600px) {
    .container {
        padding: 20px;
    }

    form h1 {
        font-size: 1.5rem;
    }

    label, input, button, p {
        font-size: 0.9rem;
    }
}
</style>
