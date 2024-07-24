<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sih";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userType = $_POST['userType'];
$state = $_POST['state'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Add this line to get the role from userType
$role = $userType;

$username = strtolower(str_replace(' ', '', $name)) . rand(1000, 9999);
$password = $name . rand(1000, 9999);
$hashedPassword = md5($password);
//$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO users (userType, state, name, mobile, email, phone, username, password, role)
        VALUES ('$userType', '$state', '$name', '$mobile', '$email', '$phone', '$username', '$hashedPassword', '$role')";

if ($conn->query($sql) === TRUE) {
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'co.2021.asvyas@bitwardha.ac.in';
        $mail->Password = 'dohf laau ywhp jbmk';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('co.2021.asvyas@bitwardha.ac.in', 'JalSaksham Login Credentials');
        $mail->addAddress($email, $name);
        $mail->isHTML(true);
        $mail->Subject = 'Registration Confirmation';
        $mail->Body = "Hello $name,<br><br>
                         Thank you for registering. Your login details are as follows:<br>
                         <strong>Username:</strong> $username<br>
                         <strong>Password:</strong> $password<br><br>
                         You can use these credentials to log in to our system.<br><br>
                         After logging in, you will have specific control of the website.<br><br>
                         Best regards,<br>
                         JalSaksham ";

        $mail->send();

        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['userType'] = $userType;
        $_SESSION['role'] = $role; // Add this line to store the role in the session

        header("Location: login.php");  // Redirect to login page
        exit();
    } catch (Exception $e) {
        echo "Error sending email: {$mail->ErrorInfo}";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>