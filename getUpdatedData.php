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

// Fetch new data from survey1 table
$sqlSurvey1 = "SELECT state FROM survey1";
$resultSurvey1 = $conn->query($sqlSurvey1);
$dataSurvey1 = [];

while ($rowSurvey1 = $resultSurvey1->fetch_assoc()) {
    $dataSurvey1[] = $rowSurvey1['state'];
}

// Fetch new data from survey2 table
$sqlSurvey2 = "SELECT family_members FROM survey2";
$resultSurvey2 = $conn->query($sqlSurvey2);
$dataSurvey2 = [];

while ($rowSurvey2 = $resultSurvey2->fetch_assoc()) {
    $dataSurvey2[] = $rowSurvey2['family_members'];
}

// Close the database connection
$conn->close();

// Prepare updated data to send back to the client
$updatedData = [
    'labels' => $dataSurvey1,
    'data' => $dataSurvey2,
];

// Send the updated data as JSON
header('Content-Type: application/json');
echo json_encode($updatedData);
?>
