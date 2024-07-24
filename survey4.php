<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://unpkg.com/@webpixels/css@1.0/dist/index.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <style>
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #f5f5f5;
    }

        .nav {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            font-weight: 500;
            margin-top: 4px;
            color: #f8faff;
            text-decoration: none;
        }

        .nav:hover {
            color: #ffffff;
            /* Set the hover color to your desired value */
        }

        #survey-container {
            background-color: yellow;
            max-width: 1000px;
            margin: auto;
            background-color: #FFFACD;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            4
        }

        fieldset {
            border: 2px solid #3498db;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 20px;
            transition: border-color 0.3s ease-in-out;
            text-align: center;
        }

        fieldset:hover {
            border-color: #2980b9;
        }

        legend {
            margin-top: 40px;
            font-size: 1.5em;
            font-weight: bold;
            color: #3498db;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        .box {
            width: calc(100% - 20px);
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .button-container {
            margin-top: 20px;
            text-align: center;
            width: 100%;

        }

        .button-container button {
            margin: 0 10px;
            padding: 10px 20px;
            background-color: #34db54;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .button-container button:hover {
            background-color: #2980b9;
        }

        /* Media query for responsiveness */
        @media (max-width: 768px) {
            fieldset {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="image-container">
        <div class="image-item">
            <img src="img/1.png" alt="Image 1" style="height: auto; width: 63px;margin: 10px 0px 0px 20px;">
        </div>
        <div class="image-item">
            <img src="img/2.png" alt="Image 2" style="margin: 15px 0px 0px -200px;">
        </div>
        <div style="margin-left: -200px; margin-right: -50px;     text-align: center;
    padding-top: 10px;
    color: rgb(0, 92, 191);">
            <h1 style="font-size: 50px;color: rgb(0, 92, 191);text-align: center  ;    ">JalSaksham Portal</h1>
            <h2 style="font-size: 20px;color: rgb(35, 37, 38);text-align: center  ;text-decoration: underline;">जल से
                सशक्ति,
                समृद्धि की ओर
            </h2>
        </div>
        <div class="image-item" style="margin-right: -100px;">
            <img src="img/3.png" alt="Image 4" style="margin: 15px 100px 0px 60px;">
        </div>
        <div class="image-item" style="margin-top: -40px;margin-right:100px ;">
            <img src="img/4.png" alt="Image 4" style="margin: 15px 50px 0px 50px;">
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-0 py-3">
        <div class="container-xl">
            <!-- Logo -->
            <!-- Navbar toggle -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Nav -->
                <div class="navbar-nav mx-lg-auto">
                    <a class="nav-item nav" href="#" aria-current="page"><ion-icon name="home-sharp"
                            style="margin-right: 5px;margin-top: 4px;"></ion-icon>HOME</a>
                    <a class="nav-item nav" href="#about"><ion-icon name="people-sharp"
                            style="margin-right: 5px;margin-top:4px;"></ion-icon>ABOUT</a></a>
                    <a class="nav-item nav" href="#"><ion-icon name="receipt-sharp"
                            style="margin-right: 5px;margin-top: 4px;"></ion-icon>REPORTS</a>
                    <a class="nav-item nav" href="#"><ion-icon name="people-sharp"
                            style="margin-right: 5px;margin-top: 4px;"></ion-icon>DASHBOARD</a>
                    <a class="nav-item nav" href="rec.html"><ion-icon name="thumbs-up-sharp"
                            style="margin-right: 5px;margin-top: 4px;"></ion-icon>RECOMMENDATION</a>
                    <a class="nav-item nav" href="#"><ion-icon name="chatbox-ellipses-sharp"
                            style="margin-right: 5px;margin-top: 4px;"></ion-icon>FEEDBACK</a>
                    <a class="nav-item nav" href="#"><ion-icon name="call-sharp"
                            style="margin-right: 5px;margin-top: 4px;"></ion-icon>CONTACT US</a>
                </div>
                <!-- Right navigation -->
                <div class="navbar-nav ms-lg-4">
                    <a class="nav-item nav" href="login.php"><ion-icon name="log-in-outline"
                            style="margin-right: 10px;height: 20px;width: 20px;margin-bottom: -5px;"></ion-icon>LOGIN</a>
                </div>
                <!-- Action -->
                <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
                    <a href="signup.php" class="btn btn-sm btn-primary w-full w-lg-auto">
                        <ion-icon name="person-outline"
                            style="margin-right: 5px;margin-bottom: -2px;"></ion-icon>Register
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div style="text-align: center;margin-top: -42px;">
        <h2 style="color: black; display: inline-block; font-family: sans-serif; margin-top: 65px; ">Income </h2>
        <h2 style="color: rgb(179, 11, 11); display: inline-block; font-family: sans-serif;">Data</h2>
        <p style="margin-top: -5px;margin-bottom: 10px;"><img
                src="https://bitwardha.ac.in/wp-content/themes/bajaj-institute/assets/img/topi.svg"></p>
    </div>
    <div id="survey-container">
        <form action="process_S4.php" method="post">
            <!-- Farmer Section -->
            <fieldset>
                <legend>FARMER:</legend>
                <label>Crop Type (Name): <input type="text" name="farmer_crop_type" class="box"></label>
                <label>Crop area (Hectare): <input type="text" name="farmer_crop_area" class="box"></label>
                <label>Crop yield (kg/hectare): <input type="text" name="farmer_crop_yield" class="box"></label>
                <label>Crop frequency (per year): <input type="text" name="farmer_crop_frequency" class="box"></label>
                <label>Crop Rate (INR/quintal): <input type="text" name="farmer_crop_rate" class="box"></label>
                <label>Income/hectare (INR/hectare): <input type="text" name="farmer_income_per_hectare"
                        class="box"></label>
            </fieldset>

            <!-- Fisherman Section -->
            <fieldset>
                <legend>FISHERMAN:</legend>
                <label>Fish Type  (Name): <input type="text" name="fisherman_fish_type" class="box"></label>
                <label>Catch Volume  (kg): <input type="text" name="fisherman_catch_volume" class="box"></label>
                <label>Average Fish Size (kg): <input type="text" name="fisherman_avg_fish_size"
                        class="box"></label>
                <label>Discard Rate[%]: <input type="text" name="fisherman_discard_rate" class="box"></label>
                <label>Equipments Cost (INR): <input type="text" name="fisherman_equipments_cost"
                        class="box"></label>
                <label>Income/Activity (INR): <input type="text" name="fisherman_income_per_activity"
                        class="box"></label>
            </fieldset>

            <!-- Poultry Section -->
            <!-- <fieldset>
                <legend>POULTRY:</legend>
                <label>Chicken Breed (Name): <input type="text" name="poultry_chicken_breed" class="box"></label>
                <label>Poultry Flock Size: <input type="text" name="poultry_flock_size" class="box"></label>
                <label>Conversion Feed Ratio: <input type="text" name="poultry_feed_conversion_ratio"
                        class="box"></label>
                <label>Input Cost (INR): <input type="text" name="poultry_input_cost" class="box"></label>
                <label>Poultry Product Sales: <input type="text" name="poultry_product_sales" class="box"></label>
                <label>Income/Activity (INR/kg): <input type="text" name="poultry_income_per_activity"
                        class="box"></label>
            </fieldset> -->

            <!-- Dairy Section -->
            <!-- <fieldset>
                <legend>DAIRY:</legend>
                <label>Cattle Type (Name): <input type="text" name="dairy_cattle_type" class="box"></label>
                <label>Milk Production per Cattle (ltrs): <input type="text" name="dairy_milk_production_per_cattle"
                        class="box"></label>
                <label>No. of Milking Animals: <input type="text" name="dairy_number_of_milking_animals"
                        class="box"></label>
                <label>Feed Costs: <input type="text" name="dairy_feed_costs" class="box" style="margin-top: 25px;" ></label>
                <label>Milk Price (INR/ltr): <input type="text" name="dairy_milk_price" class="box"></label>
                <label>Income/Activity (INR): <input type="text" name="dairy_income_per_activity"
                        class="box"></label>
            </fieldset> -->

            <!-- Aquatic Plants Section -->
            <fieldset>
                <legend>AQUATIC PLANTS:</legend>
                <label>Yield Type (Name): <input type="text" name="aquatic_plants_yield_type" class="box"></label>
                <label>Harvested Area(Hectares): <input type="text" name="aquatic_plants_harvested_area"
                        class="box"></label>
                <label>Yield/Area (tons/hectare): <input type="text" name="aquatic_plants_yield_per_area"
                        class="box"></label>
                <label>Frequency(no. of harvest/year): <input type="text"
                        name="aquatic_plants_harvest_frequency" class="box"></label>
                <label>Operating Costs: <input type="text" name="aquatic_plants_operating_costs" class="box"></label>
                <label>Income/hectare (INR/hectare): <input type="text" name="aquatic_plants_income_per_hectare"
                        class="box"></label>
            </fieldset>

            <!-- Small Scale Industry Section -->
            <fieldset>
                <legend>SMALL SCALE INDUSTRY:</legend>
                <label>Industry Type (Name): <input type="text" name="industry_industry_type" class="box"></label>
                <label>Average Income/Unit: <input type="text" name="industry_average_income_per_unit"
                        class="box"></label>
                <label>Total Revenue (no. of harvest/year): <input type="text" name="industry_total_revenue"
                        class="box"></label>
                <label>Operating <br>Costs: <input type="text" name="industry_operating_costs" class="box"></label>
                <label>Profit Margin (percentage[%]): <input type="text" name="industry_profit_margin"
                        class="box"></label>
                <label>Income per Activity (INR): <input type="text" name="industry_income_per_activity"
                        class="box"></label>
            </fieldset>

            <div class="button-container row">
                <div class="col-md-6 text-left" style="margin-left: 280px;">
                    <button type="submit" onclick="redirectPage()" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script>

        function redirectPage() {
            let temp = window.localStorage.getItem('ColorObj')
            let colourState = JSON.parse(temp)
            colourState.s4 = true
            window.localStorage.setItem('ColorObj', JSON.stringify(colourState))
        }

    </script>
</body>

</html>