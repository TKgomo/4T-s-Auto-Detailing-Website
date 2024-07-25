<?php
require 'vendor/autoload.php';  // Assuming you installed PHPMailer via Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appointment_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect and sanitize form data
$name = $conn->real_escape_string($_POST['name']);
$contact = $conn->real_escape_string($_POST['contact']);
$email = $conn->real_escape_string($_POST['email']);
$date = $conn->real_escape_string($_POST['date']);
$time = $conn->real_escape_string($_POST['time']);
$message = $conn->real_escape_string($_POST['message']);

// Check if the time slot is available
$sql = "SELECT * FROM appointments WHERE date = '$date' AND time = '$time'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode(['success' => false, 'message' => 'This time slot is already booked.']);
    $conn->close();
    exit;
}

// Insert the appointment into the database
$sql = "INSERT INTO appointments (name, contact, email, date, time, message) VALUES ('$name', '$contact', '$email', '$date', '$time', '$message')";

if ($conn->query($sql) === TRUE) {
    // Send confirmation email to client
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tshego.tk123@gmail.com';
        $mail->Password = 'enhk dguv kovy ozxn';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('your_email@gmail.com', '4T Auto Detailing ');
        $mail->addAddress($email, $name);  // Client's email
        $mail->addAddress('tshego.tk123@gmail.com');  // Owner's email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Appointment Confirmation';
        $mail->Body = "Dear $name,<br><br>Your appointment is confirmed for $date at $time.<br><br>Message: $message<br><br>Best Regards,<br>4T's Auto Detailing Team!";

        $mail->send();
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo]);
        $conn->close();
        exit;
    }

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error: ' . $conn->error]);
}

$conn->close();
?>
