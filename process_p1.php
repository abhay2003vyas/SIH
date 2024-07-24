<?php
// Database connection parameters
$servername = "localhost";  // Usually "localhost" if the database is on the same server
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
    $beneficiary_name = mysqli_real_escape_string($conn, $_POST["beneficiary_name"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $caste = mysqli_real_escape_string($conn, $_POST["caste"]);
    $age = mysqli_real_escape_string($conn, $_POST["age"]);
    $phone_number = mysqli_real_escape_string($conn, $_POST["phone_number"]);
    $aadhaar_card_number = mysqli_real_escape_string($conn, $_POST["aadhaar_card_number"]);
    $family_members = mysqli_real_escape_string($conn, $_POST["family_members"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $occupation = mysqli_real_escape_string($conn, $_POST["occupation"]);
    $organisation_name = mysqli_real_escape_string($conn, $_POST["organisation_name"]);
    $education_level = mysqli_real_escape_string($conn, $_POST["education_level"]);
    $direct_beneficiary = mysqli_real_escape_string($conn, $_POST["direct_beneficiary"]);
    $income_increase = mysqli_real_escape_string($conn, $_POST["income_increase"]);
    $benefits_description = mysqli_real_escape_string($conn, $_POST["benefits_description"]);

    // Insert data into the database
    $sql = "INSERT INTO water_harvesting_structure (
                state, area, city, whs_type, capacity_size, conditions,
                beneficiary_name, gender, caste, age, phone_number, 
                 aadhaar_card_number, family_members, 
                email, occupation, organisation_name, education_level, 
                direct_beneficiary, income_increase, benefits_description
            )
            VALUES (
                '$state', '$area', '$city', '$whs_type', '$capacity_size', '$conditions',
                '$beneficiary_name', '$gender', '$caste', '$age', '$phone_number',
                '$aadhaar_card_number', '$family_members',
                '$email', '$occupation', '$organisation_name', '$education_level',
                '$direct_beneficiary', '$income_increase', '$benefits_description'
            )";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>