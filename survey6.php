<!DOCTYPE html>
<html>

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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
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

    .container {
        background-color: #ffffff;
        margin-top: 20px;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #2fc47c;
    }

    label {
        font-weight: bold;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>

<body style="background-color: #fff9d2;">
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

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div style="text-align: center;margin-top: -42px;">
        <h2 style="color: black; display: inline-block; font-family: sans-serif; margin-top: 65px; ">UNCCD</h2>
        <h2 style="color: rgb(179, 11, 11); display: inline-block; font-family: sans-serif;">Questionnaire</h2>
        <p style="margin-top: -5px;margin-bottom: 10px;"><img
                src="https://bitwardha.ac.in/wp-content/themes/bajaj-institute/assets/img/topi.svg"></p>
    </div>

    <div class="container">
        <form action="process_S6.php" method="post">
            <br>
            <h2>UNCCD Objective 1: No Poverty</h2><br>
            <div class="form-group">
                <label>1. Have you observed an increase in land Productivity (eg. crop yield) since the implementation
                    of WHS?</label>
                <select class="form-control" name="question1">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <label>2. How much degraded land has been restored or reclaimed through WHS in your area (in hectares)?
                </label>
                <select class="form-control" name="question2">
                    <option value="Less than 10 hectares">Less than 10 hectares</option>
                    <option value="Between 10 and 100 hectares">Between 10 and 100 hectares</option>
                    <option value="Between 100 and 500 hectares">Between 100 and 500 hectares</option>
                    <option value="Between 500 and 1,000 hectares">Between 500 and 1,000 hectares</option>
                    <option value="More than 1,000 hectares">More than 1,000 hectares</option>
                </select>
                <br>
                <h2>UNCCD Objective 2: Sustainable land management</h2><br>
                <label>3. Have sustainable land management practices been adopted in your community as a result of WHS
                    initiatives?</label>
                <select class="form-control" name="question3">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                </select>
                <br>
                <h2>UNCCD Objective 3:Rehabilitation and Restoration of Degraded Ecosystems</h2><br>
                <label>4. How would you rate the overall health and condition of ecosystems (e.g., soil, vegetation,
                    water bodies) in areas with WHS? </label>
                <select class="form-control" name="question4">
                    <option value="Excellent">Excellent</option>
                    <option value="Good">Good</option>
                    <option value="Fair">Fair</option>
                    <option value="Poor">Poor</option>
                    <option value="Very poor">Very poor</option>
                </select>

                <label>5. Have you observed improvements in local biodiversity (e.g., plant and animal species) due to
                    WHS-related land restoration efforts?</label>
                <select class="form-control" name="question5">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>

                </select>

                <h2><br>UNCCD Objective 4: Mitigation and Adaptation to Climate Change</h2><br>

                <label>6. To what extent has WHS helped control soil erosion in your area?</label>
                <select class="form-control" name="question6">
                    <option value="Not at all">Not at all</option>
                    <option value="To small extent">To small extent</option>
                    <option value="Moderately">Moderately</option>
                    <option value="To a great extent">To a great extent</option>
                    <option value="Completely ">Completely </option>
                    <option value="Not sure ">Not sure </option>
                </select>

                <h2><br>UNCCD Objective 7: Awareness Raising and Advocacy:</h2><br>

                <label>7.Are local communities aware about the importance of WHS and their Role in combating
                    desertification?</label>
                <select class="form-control" name="question7">
                    <option value="Yes">Yes</option>
                    <option value="No ">No </option>
                </select>

                <label><br>8. Have advocacy efforts influenced local policies or practices related to land
                    management and WHS? </label>
                <select class="form-control" name="question8">
                    <option value="Yes">Yes</option>
                    <option value="No ">No </option>
                </select>
            </div>

            <h2><br>UNCCD Objective 8: Mobilisation of Resources:</h2><br>

            <label>9.Is the allocation and utilisation of financial and technical resources for WHS
                implementation transparent and Accountable?</label>
            <select class="form-control" name="question9">
                <option value="Yes">Yes</option>
                <option value="No  ">No </option>
            </select>

            <div class="form-group">
                <label><br>10. Has there been a long term commitment to sustaining WHS and their benefits?
                </label>
                <select class="form-control" name="question10">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="button-container row" style="margin-left:600px;margin-top:25px;" >
                <div class="col-md-6 text-left">
                    <button type="submit" onclick="redirectToSurveyLogin()" class="btn btn-primary" >Finish</button>
                </div>
            </div>
        </form>
    </div>
    <script>
    function redirectToSurveyLogin() {
      // Set the URL to redirect to
      var targetUrl = "location.survey_login.php";

      // Redirect the page
      window.location.href = targetUrl;
    }
  </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>