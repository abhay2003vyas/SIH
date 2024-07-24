<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sih";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $sdg1_question1 = mysqli_real_escape_string($conn, $_POST["sdg1_question1"]);
    $sdg1_question2 = mysqli_real_escape_string($conn, $_POST["sdg1_question2"]);
    $sdg2_question1 = mysqli_real_escape_string($conn, $_POST["sdg2_question1"]);
    $sdg2_question2 = mysqli_real_escape_string($conn, $_POST["sdg2_question2"]);
    $sdg3_question1 = mysqli_real_escape_string($conn, $_POST["sdg3_question1"]);
    $sdg3_question2 = mysqli_real_escape_string($conn, $_POST["sdg3_question2"]);
    $sdg5_question1 = mysqli_real_escape_string($conn, $_POST["sdg5_question1"]);
    $sdg5_question2 = mysqli_real_escape_string($conn, $_POST["sdg5_question2"]);
    $sdg7_question1 = mysqli_real_escape_string($conn, $_POST["sdg7_question1"]);
    $sdg7_question2 = mysqli_real_escape_string($conn, $_POST["sdg7_question2"]);
    $sdg8_question1 = mysqli_real_escape_string($conn, $_POST["sdg8_question1"]);
    $sdg8_question2 = mysqli_real_escape_string($conn, $_POST["sdg8_question2"]);
    $sdg9_question1 = mysqli_real_escape_string($conn, $_POST["sdg9_question1"]);
    $sdg9_question2 = mysqli_real_escape_string($conn, $_POST["sdg9_question2"]);
    $sdg10_question1 = mysqli_real_escape_string($conn, $_POST["sdg10_question1"]);
    $sdg12_question1 = mysqli_real_escape_string($conn, $_POST["sdg12_question1"]);
    $sdg12_question2 = mysqli_real_escape_string($conn, $_POST["sdg12_question2"]);
    $sdg13_question1 = mysqli_real_escape_string($conn, $_POST["sdg13_question1"]);
    $sdg17_question1 = mysqli_real_escape_string($conn, $_POST["sdg17_question1"]);

    // Insert data into the sdg_responses table
    $sql = "INSERT INTO survey5 (sdg1_question1, sdg1_question2, sdg2_question1, sdg2_question2, sdg3_question1, sdg3_question2,
                                       sdg5_question1, sdg5_question2, sdg7_question1, sdg7_question2, sdg8_question1, sdg8_question2,
                                       sdg9_question1, sdg9_question2, sdg10_question1, sdg12_question1, sdg12_question2,
                                       sdg13_question1, sdg17_question1)
            VALUES ('$sdg1_question1', '$sdg1_question2', '$sdg2_question1', '$sdg2_question2', '$sdg3_question1', '$sdg3_question2',
                    '$sdg5_question1', '$sdg5_question2', '$sdg7_question1', '$sdg7_question2', '$sdg8_question1', '$sdg8_question2',
                    '$sdg9_question1', '$sdg9_question2', '$sdg10_question1', '$sdg12_question1', '$sdg12_question2',
                    '$sdg13_question1', '$sdg17_question1')";

    if ($conn->query($sql) === TRUE) {
        header("Location: survey.php?survey5=true");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
