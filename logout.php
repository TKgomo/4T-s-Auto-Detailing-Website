<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <script>
        function showLogoutAlert() {
            alert("You have successfully logged out.");
            window.location.href = "Project.php"; // Redirect to login page after alert
        }
        window.onload = showLogoutAlert;
    </script>
</head>
<body>
</body>
</html>
