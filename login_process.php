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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Hash the entered password using MD5

    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Debugging line
            echo "Debug: Retrieved Hashed Password from DB - " . $row['password'] . "<br>";

            // Use MD5 for password comparison
            if ($password == $row['password']) {
                session_start();
                $_SESSION['username'] = $row['username'];
                $_SESSION['userType'] = $row['userType'];
                $_SESSION['role'] = $row['role'];

                // Redirect based on role
                if ($_SESSION['role'] == 'Surveyor') {  // Match the case
                    header("Location: index2.html");
                    exit();
                } 
                else if ($_SESSION['role'] == 'Beneficiary') {  // Match the case
                    header("Location: index3.html");
                    exit();
                }else {
                    header("Location: index.html");
                    exit();
                }
            } else {
                echo "Invalid username or password";
            }
        } else {
            echo "Invalid username or password";
        }
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
    