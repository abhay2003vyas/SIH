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

// Fetch data from the survey2 table
$sqlOccupationEducation = "SELECT occupation, education, COUNT(*) AS count FROM survey2 GROUP BY occupation, education";
$resultOccupationEducation = $conn->query($sqlOccupationEducation);

if (!$resultOccupationEducation) {
    die("Query failed: " . $conn->error);
}

// Organize the data for Chart.js - Occupation vs Education
$dataOccupationEducation = [];
while ($rowOccupationEducation = $resultOccupationEducation->fetch_assoc()) {
    $occupationOE = $rowOccupationEducation['occupation'];
    $educationOE = $rowOccupationEducation['education'];
    $countOE = $rowOccupationEducation['count'];

    if (!isset($dataOccupationEducation[$occupationOE])) {
        $dataOccupationEducation[$occupationOE] = [];
    }

    $dataOccupationEducation[$occupationOE][$educationOE] = $countOE;
}

// Fetch data from the database (modify table name as needed)
$sqlStateWhsType = "SELECT state, whs_type, COUNT(*) AS count FROM survey1 GROUP BY state, whs_type";
$resultStateWhsType = $conn->query($sqlStateWhsType);

if (!$resultStateWhsType) {
    die("Query failed: " . $conn->error);
}

// Organize the data for Chart.js - State vs Types of Dam
$dataStateWhsType = [];
while ($rowStateWhsType = $resultStateWhsType->fetch_assoc()) {
    $stateSWT = $rowStateWhsType['state'];
    $whsTypeSWT = $rowStateWhsType['whs_type'];
    $countSWT = $rowStateWhsType['count'];

    if (!isset($dataStateWhsType[$stateSWT])) {
        $dataStateWhsType[$stateSWT] = [];
    }

    $dataStateWhsType[$stateSWT][$whsTypeSWT] = $countSWT;
}

// Fetch data from survey2 table for Caste Distribution
$sqlCasteDistribution = "SELECT caste, COUNT(*) as count FROM survey2 GROUP BY caste";
$resultCasteDistribution = $conn->query($sqlCasteDistribution);

// Process data for Chart.js - Caste Distribution
$dataCasteDistribution = [];
$totalPersonsCaste = 0;

while ($rowCasteDistribution = $resultCasteDistribution->fetch_assoc()) {
    $totalPersonsCaste += $rowCasteDistribution['count'];
    $dataCasteDistribution[$rowCasteDistribution['caste']] = $rowCasteDistribution['count'];
}

// Calculate percentages for Caste Distribution
$percentagesCaste = [];
foreach ($dataCasteDistribution as $keyCaste => $valueCaste) {
    $percentagesCaste[$keyCaste] = ($valueCaste / $totalPersonsCaste) * 100;
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>JAL SAKSHAM</title>
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/@webpixels/css@1.0/dist/index.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body style="background-color: #f8f9fa;">
    <div class="header-container">
        <div class="images">
            <img src="img/4.png" alt="Left Image 1">
            <img src="img/2.png" alt="Left Image 2">
        </div>
        <div class="text-container">
            <h1>JalSaksham Portal</h1>
            <h2>जल से सशक्ति, समृद्धि की ओर</h2>
        </div>
        <div class="images" id="left">
            <img src="img/1.png" alt="Right Image 1">
            <img src="img/3.png" alt="Right Image 2">
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-0 py-3">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-lg-auto">
                    <a class="nav-item nav-link" href="index.html" aria-current="page"><ion-icon
                            name="home-sharp"></ion-icon>HOME</a>
                    <a class="nav-item nav-link" href="#about"><ion-icon name="people-sharp"></ion-icon>ABOUT</a>
                    <a class="nav-item nav-link" href="#"><ion-icon name="receipt-sharp"></ion-icon>REPORTS</a>
                    <a class="nav-item nav-link" href="dashboard.php"><ion-icon
                            name="people-sharp"></ion-icon>DASHBOARD</a>
                    <a class="nav-item nav-link" href="rec.html"><ion-icon
                            name="thumbs-up-sharp"></ion-icon>RECOMMENDATION</a>
                    <a class="nav-item nav-link" href="feedback.php"><ion-icon
                            name="chatbox-ellipses-sharp"></ion-icon>FEEDBACK</a>
                    <a class="nav-item nav-link" href="contactus.html"><ion-icon name="call-sharp"></ion-icon>CONTACT
                        US</a>
                </div>
                <div class="navbar-nav ms-lg-4">
                    <a class="nav-item nav-link" href="login.php"><ion-icon name="log-in-outline"
                            style="margin-right: 10px; height: 20px; width: 20px; margin-bottom: -5px;"></ion-icon>LOGIN</a>
                </div>
                <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
                    <a href="signup.php" class="btn btn-sm btn-primary w-full w-lg-auto">
                        <ion-icon name="person-outline"
                            style="margin-right: 5px; margin-bottom: -2px;"></ion-icon>Register
                    </a>
                </div>
            </div>
        </div>
    </nav>


    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <div class="card">
        <div class="card-header" style="width:100%;heigth:2px; background-color:rgb(240, 128, 128); ">
            <h2 style="text-align: center;">State wise WHS Distribution</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-12 col-lg-8">
                    <!-- Adjust your chart container here -->
                    <canvas id="damChart" width="800" height="250"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="card" style="height:500px;width:701px;float:right;margin-top:-1px;">
        <div class="card-header" style="width:100%;heigth:10px; background-color:#9FE2BF; ">
            <h2 style="text-align: center;">Caste wise Beneficiary</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-12 col-lg-8">
                    <!-- Adjust your chart container here -->
                    <canvas id="casteChart" width="600" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="card" style="width: 800px;">
        <div class="card-header" style="width:100%;heigth:2px; background-color:#40E0D0; ">
            <h2 style="text-align: center;">Occupation vs Education</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-12 col-lg-8">
                    <canvas id="occupationEducationChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div style=" 
            padding: 20px;
            margin: 20px;">
        <div class="class-header" style="width:100%;heigth:2px; background-color:#00D67B; ">
            <h2 style="text-align: center;height:70px;padding-top:15px;border-radius:5px">SDG Goals - Percentage
                Increase</h2>
        </div>

        <canvas id="sdgGoalsChart" width="800" height="400"></canvas>
    </div>
    <div class="card" style="width: 850px; margin: 20px;">
        <div class="card-header" style="width:100%;heigth:2px; background-color:#00D67B;">
            <h4 class="card-title" style="text-align: center; margin-top:10px; border-radius:5px">Survey Data</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-12 col-lg-8">
                    <canvas id="surveyChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="card" style="width: 600px; margin: 20px;float:right;    width: 600px;
    margin: 20px;
    float: right;
    padding-bottom: 70px;
    margin-top: -566px;">
        <div class="card-header" style="width:100%;heigth:2px; background-color:#C39BD3 ;">
            <h4 class="card-title" style="text-align: center; margin-top:10px; border-radius:5px">Income Distribution</h4>
        </div>
        <div class="chart-container" style="margin-top:25px;">
            <canvas id="incomeDistributionPieChart" width="500" height="350"></canvas>
        </div>
    </div>



    <footer class="text-center text-lg-start text-white" style="background-color: rgb(97, 120, 178);">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4" style="background-color: rgb(4, 4, 4);height: 2px;">

            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold" style="color: rgb(7, 77, 152);">Jalshaksham Portal</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            Explore water harvesting initiatives and information on Jalshaksham Portal. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold" style="color: rgb(7, 77, 152);">Quick Links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">Home</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">About Us</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Contact</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold" style="color: rgb(7, 77, 152);">Resources</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">Water Harvesting Schemes</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Reports</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Dashboard</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold" style="color: rgb(7, 77, 152);">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fas fa-envelope mr-3"></i> info@jalshaksham.gov</p>
                        <p><i class="fas fa-phone mr-3"></i> +1 234 567 890</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2024 Jalshaksham Portal. All rights reserved. |
            <a class="text-white" href="#">Privacy Policy</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script>
        var id = 0;
        // Initialize Chart.js data with initial survey data
        const chartData = {
            labels: [],
            datasets: [{
                label: 'Family Members',
                data: [],
                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
            }],
        };

        // Render chart using Chart.js
        const surveyCtx = document.getElementById('surveyChart').getContext('2d');
        const surveyChart = new Chart(surveyCtx, {
            type: 'bar',
            data: chartData,
            options: {
                scales: {
                    x: { stacked: false },
                    y: { stacked: false, beginAtZero: true },
                },
            },
        });

        // Function to update chart data using AJAX
        function updateChartData() {
            // Fetch new data from the server (you need to implement this endpoint)
            // Example: Fetch data from a PHP script that queries the database
            fetch('getUpdatedData.php')
                .then(response => response.json())
                .then(newData => {
                    // Remove duplicates from labels
                    const uniqueLabels = [...new Set(newData.labels)];
                    console.log(newData);

                    // Update chart data and redraw
                    surveyChart.data.labels = uniqueLabels;
                    surveyChart.data.datasets[0].data = newData.data;
                    //  surveyChart.update();

                    var data = surveyChart.data.datasets[0].data;
                    data.push(newData.data);    // add the new value to the right
                    data.shift();
                    surveyChart.update();
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        // Update chart data every 5 seconds (adjust the interval as needed)
        setInterval(updateChartData, 5000);
    </script>
    <script>
        // Organized data from PHP for Dam Chart
        const damChartData = <?php echo json_encode($dataStateWhsType); ?>;

        // Extract labels (states) and datasets from the organized data
        const damLabels = Object.keys(damChartData);
        const damDatasets = Object.keys(damChartData[damLabels[0]]);

        // Prepare datasets for Chart.js
        const damChartDatasets = damDatasets.map(type => ({
            label: type,
            data: damLabels.map(state => damChartData[state][type] || 0),
            backgroundColor: getRandomColor(),
            borderColor: getRandomColor(),
            borderWidth: 1,
        }));

        // Render chart using Chart.js for Dam Chart
        const damCtx = document.getElementById('damChart').getContext('2d');
        new Chart(damCtx, {
            type: 'bar',
            data: {
                labels: damLabels,
                datasets: damChartDatasets,
            },
            options: {
                scales: {
                    x: { stacked: true },
                    y: { stacked: true },
                },
            },
        });

        // Organized data from PHP for Caste Chart
        const casteChartData = <?php echo json_encode(array_values($percentagesCaste)); ?>;
        const casteChartLabels = <?php echo json_encode(array_keys($percentagesCaste)); ?>;
        const casteChartColors = getRandomColors(casteChartLabels.length);

        // Render chart using Chart.js for Caste Chart
        const casteCtx = document.getElementById('casteChart').getContext('2d');
        new Chart(casteCtx, {
            type: 'pie',
            data: {
                labels: casteChartLabels,
                datasets: [{
                    data: casteChartData,
                    backgroundColor: casteChartColors,
                    borderColor: casteChartColors,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            },
        });

        // Organized data from PHP for Occupation vs Education Chart
        const occupationEducationChartData = <?php echo json_encode($dataOccupationEducation); ?>;
        const occupationEducationLabels = Object.keys(occupationEducationChartData);
        const educationLevels = Array.from(new Set(Object.values(occupationEducationChartData).flatMap(Object.keys)));

        // Prepare datasets for Chart.js - Occupation vs Education Chart
        const occupationEducationChartDatasets = occupationEducationLabels.map(occupation => ({
            label: occupation,
            data: educationLevels.map(education => {
                const totalCount = educationLevels.reduce((sum, edu) => sum + (occupationEducationChartData[occupation]?.[edu] || 0), 0);
                return ((occupationEducationChartData[occupation]?.[education] || 0) / totalCount) * 100;
            }),
            backgroundColor: getRandomColor(),
            borderColor: getRandomColor(),
            borderWidth: 1,
        }));

        // Render chart using Chart.js for Occupation vs Education Chart
        const occupationEducationCtx = document.getElementById('occupationEducationChart').getContext('2d');
        new Chart(occupationEducationCtx, {
            type: 'bar',
            data: {
                labels: educationLevels,
                datasets: occupationEducationChartDatasets,
            },
            options: {
                scales: {
                    x: { stacked: true },
                    y: { stacked: true, ticks: { callback: value => `${value.toFixed(2)}%` } },
                },
            },
        });

        // Helper function to generate random colors
        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        // Helper function to generate an array of random colors
        function getRandomColors(count) {
            const colors = [];
            for (let i = 0; i < count; i++) {
                colors.push(getRandomColor());
            }
            return colors;
        }


        // Updated dummy data with additional SDG goals
        const sdgGoalsData = {
            'No Poverty': { '2021': 20, '2022': 30 },
            'Zero Hunger': { '2021': 15, '2022': 25 },
            'Good Health': { '2021': 10, '2022': 20 },
            'Gender Equality': { '2021': 5, '2022': 15 },
            'Clean Energy': { '2021': 25, '2022': 35 },
            'Economic Growth': { '2021': 18, '2022': 28 },
            'Industry, Innovation, and Infrastructure': { '2021': 12, '2022': 22 },
            'Reduced Inequality': { '2021': 8, '2022': 18 },
            'Responsible Consumption and Production': { '2021': 14, '2022': 24 },
            'Climate Action': { '2021': 30, '2022': 40 },
            'Partnerships for the Goals': { '2021': 10, '2022': 20 },
        };

        // Extract labels and data from the dummy data
        const sdgGoalsLabels = Object.keys(sdgGoalsData);
        const percentageIncrease2021 = sdgGoalsLabels.map(goal => sdgGoalsData[goal]['2021']);
        const percentageIncrease2022 = sdgGoalsLabels.map(goal => sdgGoalsData[goal]['2022']);

        // Render chart using Chart.js
        const ctx = document.getElementById('sdgGoalsChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: sdgGoalsLabels,
                datasets: [
                    {
                        label: 'Percentage Increase in 2021',
                        backgroundColor: 'teal',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        data: percentageIncrease2021,
                    },
                    {
                        label: 'Percentage Increase in 2022',
                        backgroundColor: 'pink',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1,
                        data: percentageIncrease2022,
                    },
                ],
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'SDG Goals',
                        },
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Percentage Increase (%)',
                        },
                    },
                },
            },
        });
    </script>
    <script>
        // Extract data for Chart.js

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