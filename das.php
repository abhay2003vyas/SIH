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

// Fetch data from the total_income_data table
$result = $conn->query("SELECT * FROM total_income_data");

// Fetch data into an array
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Function to calculate percentage for a specific key in the data array
function calculatePercentage($total, $value)
{
    return ($total > 0) ? (($value / $total) * 100) : 0;
}

// Calculate total income for normalization
$totalIncome = array_sum(array_column($data, 'farmer_total_income')) +
    array_sum(array_column($data, 'fisherman_total_income')) +
    array_sum(array_column($data, 'aquatic_plants_total_income')) +
    array_sum(array_column($data, 'industry_total_income'));

// Calculate percentage for each beneficiary
$farmerPercentage = calculatePercentage($totalIncome, array_sum(array_column($data, 'farmer_total_income')));
$fishermanPercentage = calculatePercentage($totalIncome, array_sum(array_column($data, 'fisherman_total_income')));
$aquaticPlantsPercentage = calculatePercentage($totalIncome, array_sum(array_column($data, 'aquatic_plants_total_income')));
$industryPercentage = calculatePercentage($totalIncome, array_sum(array_column($data, 'industry_total_income')));

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Income Distribution (2023)</title>
    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        .chart-container {
            width: 50%;
            margin: auto;
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .report-container {
            width: 60%;
            margin: auto;
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <h1>Income Distribution (2023)</h1>

    <!-- Display a bar chart using Chart.js -->
    <div class="chart-container">
        <canvas id="incomeDistributionChart" width="500" height="300"></canvas>
        <canvas id="incomeDistributionPieChart" width="500" height="300"></canvas>
    </div>
    <script>
        // Extract data for Chart.js
        var chartData = <?php echo json_encode($data); ?>;

        // Create a bar chart
        var ctx = document.getElementById('incomeDistributionChart').getContext('2d');
        var incomeDistributionChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Farmer', 'Fisherman', 'Aquatic Plants', 'Industry'],
                datasets: [{
                    label: 'Income Distribution',
                    data: [<?php echo $farmerPercentage; ?>, <?php echo $fishermanPercentage; ?>, <?php echo $aquaticPlantsPercentage; ?>, <?php echo $industryPercentage; ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                        ticks: {
                            callback: function (value) {
                                return value + "%";
                            }
                        }
                    }
                }
            }
        });

        // Create a pie chart
        var pieCtx = document.getElementById('incomeDistributionPieChart').getContext('2d');
        var incomeDistributionPieChart = new Chart(pieCtx, {
            type: 'doughnut',
            data: {
                labels: ['Farmer', 'Fisherman', 'Aquatic Plants', 'Industry'],
                datasets: [{
                    data: [<?php echo $farmerPercentage; ?>, <?php echo $fishermanPercentage; ?>, <?php echo $aquaticPlantsPercentage; ?>, <?php echo $industryPercentage; ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    </script>
</body>

</html>