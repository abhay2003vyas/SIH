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
    $state = mysqli_real_escape_string($conn, $_POST["state"]);
    $area = mysqli_real_escape_string($conn, $_POST["area"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $whs_type = mysqli_real_escape_string($conn, $_POST["whs_type"]);
    $capacity_size = mysqli_real_escape_string($conn, $_POST["capacity_size"]);
    $conditions = mysqli_real_escape_string($conn, $_POST["conditions"]);

    // Insert data into the database
    $sql = "INSERT INTO survey1 (
                state, area, city, whs_type, capacity_size, conditions
            )
            VALUES (
                '$state', '$area', '$city', '$whs_type', '$capacity_size', '$conditions'
            )";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the specified URL
        header("Location: survey.php?survey1=true");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
