<?php
    session_start();
    include('config-admin.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM admins WHERE username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<p class="error">Username password combination is wrong!</p>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['user_id'] = $result['id'];
                header("location: admin.php");
                 exit;
            } else {
                echo '<p class="error">Username password combination is wrong!</p>';
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
        <a href="Project.php"> <img src="4T's/4T's final logo[300dpi].png"  height = "150" width ="200" 
            alt = "This is the logo " title="4T's logo"></a>
        </div>
        <form method="post" action="" name="signin-form">
            <h1>Admin Login</h1>
            <div class="form-element">
                <label>Username</label>
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
            </div>
            <div class="form-element">
                <label>Password</label>
                <input type="password" name="password" required />
            </div>
            <button type="submit" name="login" value="login">Log In</button>
            <p>Do not have an account? <a href="register.php">Register here</a></p>
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
