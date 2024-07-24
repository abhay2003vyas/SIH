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

    // SQL query to insert data into the 'survey6' table
    $sql = "INSERT INTO survey7 (question1_response, question2_response, question3_response, question4_response, question5_response, question6_response)
            VALUES ('$question1_response', '$question2_response', '$question3_response', '$question4_response', '$question5_response', '$question6_response')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header("Location: survey.php?survey7=true");
            exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// Close the connection
$conn->close();
?>
