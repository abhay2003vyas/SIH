

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
    // ... (Same as your existing code)
    $farmer_crop_type = mysqli_real_escape_string($conn, $_POST["farmer_crop_type"]);
    $farmer_crop_area = mysqli_real_escape_string($conn, $_POST["farmer_crop_area"]);
    $farmer_crop_yield = mysqli_real_escape_string($conn, $_POST["farmer_crop_yield"]);
    $farmer_crop_frequency = mysqli_real_escape_string($conn, $_POST["farmer_crop_frequency"]);
    $farmer_crop_rate = mysqli_real_escape_string($conn, $_POST["farmer_crop_rate"]);
    $farmer_income_per_hectare = mysqli_real_escape_string($conn, $_POST["farmer_income_per_hectare"]);

    $fisherman_fish_type = mysqli_real_escape_string($conn, $_POST["fisherman_fish_type"]);
    $fisherman_catch_volume = mysqli_real_escape_string($conn, $_POST["fisherman_catch_volume"]);
    $fisherman_avg_fish_size = mysqli_real_escape_string($conn, $_POST["fisherman_avg_fish_size"]);
    $fisherman_discard_rate = mysqli_real_escape_string($conn, $_POST["fisherman_discard_rate"]);
    $fisherman_equipments_cost = mysqli_real_escape_string($conn, $_POST["fisherman_equipments_cost"]);
    $fisherman_income_per_activity = mysqli_real_escape_string($conn, $_POST["fisherman_income_per_activity"]);

    // $poultry_chicken_breed = mysqli_real_escape_string($conn, $_POST["poultry_chicken_breed"]);
    // $poultry_flock_size = mysqli_real_escape_string($conn, $_POST["poultry_flock_size"]);
    // $poultry_feed_conversion_ratio = mysqli_real_escape_string($conn, $_POST["poultry_feed_conversion_ratio"]);
    // $poultry_input_cost = mysqli_real_escape_string($conn, $_POST["poultry_input_cost"]);
    // $poultry_product_sales = mysqli_real_escape_string($conn, $_POST["poultry_product_sales"]);
    // $poultry_income_per_activity = mysqli_real_escape_string($conn, $_POST["poultry_income_per_activity"]);

    // $dairy_cattle_type = mysqli_real_escape_string($conn, $_POST["dairy_cattle_type"]);
    // $dairy_milk_production_per_cattle = mysqli_real_escape_string($conn, $_POST["dairy_milk_production_per_cattle"]);
    // $dairy_number_of_milking_animals = mysqli_real_escape_string($conn, $_POST["dairy_number_of_milking_animals"]);
    // $dairy_feed_costs = mysqli_real_escape_string($conn, $_POST["dairy_feed_costs"]);
    // $dairy_milk_price = mysqli_real_escape_string($conn, $_POST["dairy_milk_price"]);
    // $dairy_income_per_activity = mysqli_real_escape_string($conn, $_POST["dairy_income_per_activity"]);

    $aquatic_plants_yield_type = mysqli_real_escape_string($conn, $_POST["aquatic_plants_yield_type"]);
    $aquatic_plants_harvested_area = mysqli_real_escape_string($conn, $_POST["aquatic_plants_harvested_area"]);
    $aquatic_plants_yield_per_area = mysqli_real_escape_string($conn, $_POST["aquatic_plants_yield_per_area"]);
    $aquatic_plants_harvest_frequency = mysqli_real_escape_string($conn, $_POST["aquatic_plants_harvest_frequency"]);
    $aquatic_plants_operating_costs = mysqli_real_escape_string($conn, $_POST["aquatic_plants_operating_costs"]);
    $aquatic_plants_income_per_hectare = mysqli_real_escape_string($conn, $_POST["aquatic_plants_income_per_hectare"]);

    $industry_industry_type = mysqli_real_escape_string($conn, $_POST["industry_industry_type"]);
    $industry_average_income_per_unit = mysqli_real_escape_string($conn, $_POST["industry_average_income_per_unit"]);
    $industry_total_revenue = mysqli_real_escape_string($conn, $_POST["industry_total_revenue"]);
    $industry_operating_costs = mysqli_real_escape_string($conn, $_POST["industry_operating_costs"]);
    $industry_profit_margin = mysqli_real_escape_string($conn, $_POST["industry_profit_margin"]);
    $industry_income_per_activity = mysqli_real_escape_string($conn, $_POST["industry_income_per_activity"]);

    // Insert data into the survey4 table
    $sql = "INSERT INTO survey4 (farmer_crop_type, farmer_crop_area, farmer_crop_yield, farmer_crop_frequency, farmer_crop_rate, farmer_income_per_hectare,
                                    fisherman_fish_type, fisherman_catch_volume, fisherman_avg_fish_size, fisherman_discard_rate, fisherman_equipments_cost, fisherman_income_per_activity,
                                    -- poultry_chicken_breed, poultry_flock_size, poultry_feed_conversion_ratio, poultry_input_cost, poultry_product_sales, poultry_income_per_activity,
                                    -- dairy_cattle_type, dairy_milk_production_per_cattle, dairy_number_of_milking_animals, dairy_feed_costs, dairy_milk_price, dairy_income_per_activity,
                                    aquatic_plants_yield_type, aquatic_plants_harvested_area, aquatic_plants_yield_per_area, aquatic_plants_harvest_frequency, aquatic_plants_operating_costs, aquatic_plants_income_per_hectare,
                                    industry_industry_type, industry_average_income_per_unit, industry_total_revenue, industry_operating_costs, industry_profit_margin, industry_income_per_activity)
            VALUES ('$farmer_crop_type', '$farmer_crop_area', '$farmer_crop_yield', '$farmer_crop_frequency', '$farmer_crop_rate', '$farmer_income_per_hectare',
                    '$fisherman_fish_type', '$fisherman_catch_volume', '$fisherman_avg_fish_size', '$fisherman_discard_rate', '$fisherman_equipments_cost', '$fisherman_income_per_activity',
                    -- '$poultry_chicken_breed', '$poultry_flock_size', '$poultry_feed_conversion_ratio', '$poultry_input_cost', '$poultry_product_sales', '$poultry_income_per_activity',
                    -- '$dairy_cattle_type', '$dairy_milk_production_per_cattle', '$dairy_number_of_milking_animals', '$dairy_feed_costs', '$dairy_milk_price', '$dairy_income_per_activity',
                    '$aquatic_plants_yield_type', '$aquatic_plants_harvested_area', '$aquatic_plants_yield_per_area', '$aquatic_plants_harvest_frequency', '$aquatic_plants_operating_costs', '$aquatic_plants_income_per_hectare',
                    '$industry_industry_type', '$industry_average_income_per_unit', '$industry_total_revenue', '$industry_operating_costs', '$industry_profit_margin', '$industry_income_per_activity')";

    if ($conn->query($sql) === TRUE) {
        // Calculate and insert total income into total_income_data table
        $lastInsertedId = $conn->insert_id;
        $totalIncome = calculateTotalIncome($lastInsertedId);

        $sqlTotalIncome = "INSERT INTO total_income_data (farmer_total_income, fisherman_total_income, aquatic_plants_total_income, industry_total_income)
                           VALUES ('$totalIncome[farmer]', '$totalIncome[fisherman]', '$totalIncome[aquatic_plants]', '$totalIncome[industry]')";
        
        if ($conn->query($sqlTotalIncome) === TRUE) {
            header("Location: survey.php?survey4=true");
            exit();
        } else {
            echo "Error: " . $sqlTotalIncome . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

// Function to calculate total income based on survey4 ID
function calculateTotalIncome($surveyId) {
    global $conn;

    // Fetch data from survey4 for the given ID
    $result = $conn->query("SELECT * FROM survey4 WHERE id = $surveyId");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Implement your logic to calculate total income based on survey4 data
        // For example, you can use the formula provided earlier
        $farmerIncome = $row['farmer_crop_area'] * $row['farmer_crop_yield'] * $row['farmer_crop_frequency'] * $row['farmer_income_per_hectare'];
        $fishermanIncome = $row['fisherman_catch_volume'] * $row['fisherman_avg_fish_size'] * $row['fisherman_discard_rate'] * $row['fisherman_income_per_activity'];
        // $poultryIncome = $row['poultry_flock_size'] * $row['poultry_feed_conversion_ratio'] * $row['poultry_income_per_activity'];
        // $dairyIncome = $row['dairy_milk_production_per_cattle'] * $row['dairy_number_of_milking_animals'] * $row['dairy_milk_price'] * $row['dairy_income_per_activity'];
        $aquaticPlantsIncome = $row['aquatic_plants_harvested_area'] * $row['aquatic_plants_yield_per_area'] * $row['aquatic_plants_harvest_frequency'] * $row['aquatic_plants_income_per_hectare'];
        $industryIncome = $row['industry_total_revenue'] - $row['industry_operating_costs'] + $row['industry_income_per_activity'];

        // Return an associative array with keys corresponding to income categories
        return ['farmer' => $farmerIncome, 'fisherman' => $fishermanIncome, 'aquatic_plants' => $aquaticPlantsIncome, 'industry' => $industryIncome];
    } else {
        return null;
    }
}
?>
