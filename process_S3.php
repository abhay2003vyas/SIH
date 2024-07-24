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
    $question1 = mysqli_real_escape_string($conn, $_POST["question1"]);
    $question2 = mysqli_real_escape_string($conn, $_POST["question2"]);
    $question3 = mysqli_real_escape_string($conn, $_POST["question3"]);
    $question4 = mysqli_real_escape_string($conn, $_POST["question4"]);
    $question5 = mysqli_real_escape_string($conn, $_POST["question5"]);
    $question6 = mysqli_real_escape_string($conn, $_POST["question6"]);
    $question7 = mysqli_real_escape_string($conn, $_POST["question7"]);
    $question8 = mysqli_real_escape_string($conn, $_POST["question8"]);
    $question9 = mysqli_real_escape_string($conn, $_POST["question9"]);
    $question10 = mysqli_real_escape_string($conn, $_POST["question10"]);
    $question11 = mysqli_real_escape_string($conn, $_POST["question11"]);
    $question12 = mysqli_real_escape_string($conn, $_POST["question12"]);
    $question13 = mysqli_real_escape_string($conn, $_POST["question13"]);
    $question14 = mysqli_real_escape_string($conn, $_POST["question14"]);
    $question15 = mysqli_real_escape_string($conn, $_POST["question15"]);
    

    // ... Repeat for other questions

    // Insert data into the database
    $sql = "INSERT INTO survey3 (question1, question2, question3, question4, question5, question6, question7, question8, question9, question10, question11, question12, question13, question14, question15)
            VALUES ('$question1', '$question2', '$question3', '$question4', '$question5', '$question6', '$question7', '$question8', '$question9', '$question10', '$question11', '$question12', '$question13', '$question14', '$question15')";

    if ($conn->query($sql) === TRUE) {
        header("Location: survey.php?survey3=true");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
