<?php

$username = "root";
$password = "";
$database = "sih";

try {
    $pdo = new PDO("mysql:host=localhost;database=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}

// Fetch data from the database
try {
    $sql = "SELECT caste, COUNT(*) as count FROM sih.water_harvesting_structure GROUP BY caste";
    $result = $pdo->query($sql);
    $data = $result->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
unset($pdo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pie Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <canvas id="casteChart" width="400" height="400"></canvas>

    <script>
        // Prepare data for Chart.js
        var labels = <?php echo json_encode(array_column($data, 'caste')); ?>;
        var values = <?php echo json_encode(array_column($data, 'count')); ?>;

        var ctx = document.getElementById('casteChart').getContext('2d');
        var casteChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: values,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                    ],
                    borderWidth: 1,
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
