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
    $beneficiary_name = mysqli_real_escape_string($conn, $_POST["beneficiary_name"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $caste = mysqli_real_escape_string($conn, $_POST["caste"]);
    $age = mysqli_real_escape_string($conn, $_POST["age"]);
    $occupation = mysqli_real_escape_string($conn, $_POST["occupation"]);
    $phone_number = mysqli_real_escape_string($conn, $_POST["phone_number"]);
    $aadhaar_number = mysqli_real_escape_string($conn, $_POST["aadhaar_number"]);
    $family_members = mysqli_real_escape_string($conn, $_POST["family_members"]);
    $education = mysqli_real_escape_string($conn, $_POST["education"]);

    // Insert data into the beneficiaries table
    $sql = "INSERT INTO survey2 (
                beneficiary_name, gender, caste, age, occupation, phone_number, aadhaar_number, 
                family_members, education
            )
            VALUES (
                '$beneficiary_name', '$gender', '$caste', '$age', '$occupation', '$phone_number', 
                '$aadhaar_number', '$family_members', '$education'
            )";

    if ($conn->query($sql) === TRUE) {
        header("Location: survey.php?survey2=true");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
<script>
    console.log("oops");
    let temp = window.localStorage.getItem('ColorObj')
    let colourState = JSON.parse(temp)
    colourState.s2 = true
    window.localStorage.setItem('ColorObj', JSON.stringify(colourState))
</script>