<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sih";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Clean and validate each form field
    $question1_response = mysqli_real_escape_string($conn, $_POST["question1"]);
    $question2_response = mysqli_real_escape_string($conn, $_POST["question2"]);
    $question3_response = mysqli_real_escape_string($conn, $_POST["question3"]);
    $question4_response = mysqli_real_escape_string($conn, $_POST["question4"]);
    $question5_response = mysqli_real_escape_string($conn, $_POST["question5"]);
    $question6_response = mysqli_real_escape_string($conn, $_POST["question6"]);
    $question7_response = mysqli_real_escape_string($conn, $_POST["question7"]);
    $question8_response = mysqli_real_escape_string($conn, $_POST["question8"]);
    $question9_response = mysqli_real_escape_string($conn, $_POST["question9"]);
    $question10_response = mysqli_real_escape_string($conn, $_POST["question10"]);

    // SQL query to insert data into the 'survey6' table
    $sql = "INSERT INTO survey6 (question1_response, question2_response, question3_response, question4_response, question5_response, question6_response, question7_response, question8_response, question9_response, question10_response)
            VALUES ('$question1_response', '$question2_response', '$question3_response', '$question4_response', '$question5_response', '$question6_response', '$question7_response', '$question8_response', '$question9_response', '$question10_response')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header("Location: survey.php?survey6=true");
            exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
