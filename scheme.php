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
            scroll-behavior: smooth;
        }

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

        .points-container {
            text-align: center;
            margin-top: -25px;
        }

        .points-container h2 {
            display: inline-block;
            font-family: sans-serif;
            margin-top: 50px;
        }

        .points-container h2:last-child {
            color: rgb(179, 11, 11);
        }

        .points-container p img {
            margin-top: -5px;
        }

        .styled-div {
            background-color: #bdfa8c;
            color: #333;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(67, 255, 145, 0.3);
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            position: relative;
            /* Add relative positioning */
        }

        .styled-div h3 {
            font-size: 40px;
            margin-bottom: 30px;
            text-align: center;
            /* Center the text */
        }

        .styled-div ul {
            list-style-type: none;
            padding: 0;
        }

        .scheme-item {
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            font-size: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 15px;
            position: relative;
            /* Add relative positioning */
        }

        .scheme-item i {
            margin-right: 20px;
            font-size: 30px;
        }

        .scheme-details {
            flex-grow: 1;
        }

        .scheme-details h4 {
            margin: 0;
            font-size: 24px;
            color: #555;
        }

        .scheme-details p {
            margin: 10px 0;
            color: #555;
        }

        .apply-button {
            text-align: right;
            /* Align the button to the right */
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
        }

        .apply-button a {
            padding: 10px;
            font-size: 16px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            /* Remove underline from the link */
            display: inline-block;
            transition: background-color 0.3s;
        }

        .apply-button a:hover {
            background-color: #2980b9;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="styles.css">
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
                    <a class="nav-item nav" href="index3.html" aria-current="page"><ion-icon name="home-sharp"
                            style="margin-right: 5px;margin-top: 4px;"></ion-icon>HOME</a>
                    <a class="nav-item nav" href="#about"><ion-icon name="people-sharp"
                            style="margin-right: 5px;margin-top:4px;"></ion-icon>ABOUT</a></a>
                    <a class="nav-item nav" href="#"><ion-icon name="receipt-sharp"
                            style="margin-right: 5px;margin-top: 4px;"></ion-icon>REPORTS</a>
                    <a class="nav-item nav" href="dashboard.html"><ion-icon name="people-sharp"
                            style="margin-right: 5px;margin-top: 4px;"></ion-icon>DASHBOARD</a>
                    <a class="nav-item nav" href="rec.html"><ion-icon name="thumbs-up-sharp"
                            style="margin-right: 5px;margin-top: 4px;"></ion-icon>RECOMMENDATION</a>
                    <a class="nav-item nav" href="feedback.html"><ion-icon name="chatbox-ellipses-sharp"
                            style="margin-right: 5px;margin-top: 4px;"></ion-icon>FEEDBACK</a>
                    <a class="nav-item nav" href="#"><ion-icon name="call-sharp"
                            style="margin-right: 5px;margin-top: 4px;"></ion-icon>CONTACT US</a>
                </div>
                <!-- Right navigation -->
                <!-- Action -->
                <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
                    <a href="index.html" class="btn btn-sm btn-primary w-full w-lg-auto">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="points-container">
        <h2>Incentivize</h2>
        <h2 style="color: rgb(179, 11, 11);">Schemes</h2>
        <p><img src="https://bitwardha.ac.in/wp-content/themes/bajaj-institute/assets/img/topi.svg" alt="Topi"></p>
    </div>

    <!-- ... (previous code) ... -->
    <!-- ... (previous code) ... -->

    <div class="styled-div">
        <ul>
            <!-- Scheme 1 -->
            <li class="scheme-item" style="border-bottom: 1px solid #000000;">
                <i class="fas fa-seedling" style="color: #00b94d;"></i>
                <div class="scheme-details">
                    <h4><a  style="color: #555;">Pradhan Mantri Kisan Samman Nidhi
                            (PM-KISAN)</a></h4>
                    <p>Rs. 6,000 per year in three equal installments for all small and marginal farmers.</p>
                </div>
                <div class="apply-button">
                    <a href="survey_schemes1.php" class="btn btn-primary">Apply</a>
                </div>
            </li>

            <!-- Scheme 2 -->
            <li class="scheme-item" style=" border-bottom: 1px solid #000000;">
                <i class="fas fa-seedling" style="color: #00b94d;"></i>
                <div class="scheme-details">
                    <h4><a href="" style="color: #555;">Pradhan Mantri Fasal Bima Yojana
                            (PMFBY)</a></h4>
                    <p> Premium is subsidized, and the insured amount varies based on the crop and area.</p>
                </div>
                <div class="apply-button">
                    <a href="survey_schemes2.php" class="btn btn-primary">Apply</a>
                </div>
            </li>

            <!-- Scheme 3 -->
            <li class="scheme-item" style=" border-bottom: 1px solid #000000;">
                <i class="fas fa-seedling" style="color: #00b94d;"></i>
                <div class="scheme-details">
                    <h4><a href="" style="color: #555;">National Mission for Sustainable
                            Agriculture (NMSA)</a></h4>
                    <p>Financial support for various sustainable agriculture practices</p>
                </div>
                <div class="apply-button">
                    <a href="survey_schemes3.php" class="btn btn-primary">Apply</a>
                </div>
            </li>

            <!-- Scheme 4 -->
            <li class="scheme-item" style=" border-bottom: 1px solid #000000; ">
      <i class=" fas fa-seedling" style="color: #00b94d;"></i>
                <div class="scheme-details">
                    <h4><a href="" style="color: #555;">National Horticulture
                            Mission (NHM)</a></h4>
                    <p>Financial support for the development of horticulture, including fruits, vegetables, and flowers.
                    </p>
                </div>
                <div class="apply-button">
                    <a href="survey_schemes4.php" class="btn btn-primary">Apply</a>
                </div>
            </li>

            <!-- Scheme 5 -->
            <li class="scheme-item" style=" border-bottom: 1px solid #000000;">
                <i class="fas fa-seedling" style="color: #00b94d;"></i>
                <div class="scheme-details">
                    <h4><a href="#" style="color: #555;">National Livestock Mission (NLM)</a></h4>
                    <p>Financial support for various activities related to livestock development.</p>
                </div>
                <div class="apply-button">
                    <a href="survey_schemes5.php" class="btn btn-primary">Apply</a>
                </div>
            </li>

            <!-- Scheme 6 -->
            <li class="scheme-item" style=" border-bottom: 1px solid #000000;">
                <i class="fas fa-fish" style="color: #000000;"></i>
                <div class="scheme-details">
                    <h4><a href="#" style="color: #555;">Blue Revolution - Integrated Development and Management of
                            Fisheries</a></h4>
                    <p>Financial support for fisheries development and infrastructure</p>
                </div>
                <div class="apply-button">
                    <a href="survey_schemes6.php" class="btn btn-primary">Apply</a>
                </div>
            </li>

            <!-- Scheme 7 -->
            <li class="scheme-item" style=" border-bottom: 1px color;">
                <i class="fas fa-coins" style="color: #f39c12;"></i>
                <div class="scheme-details">
                    <h4><a href="#" style="color: #555;">Pradhan Mantri Mudra Yojana (PMMY)</a></h4>
                    <p>To ensure that farmers receive financial support through premium subsidies</p>
                </div>
                <div class="apply-button">
                    <a href="survey_schemes7.php" class="btn btn-primary">Apply</a>
                </div>
            </li>
              
        </ul>
    </div>