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

    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #f5f5f5;
    }

    .survey-container {
      max-width: 800px;
      margin: auto;
      background-color: #aad5f8;
      ;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .survey-option {
      margin-bottom: 20px;
    }

    .survey-option a {
      display: block;
      padding: 15px;
      color: #fff;
      text-align: center;
      text-decoration: none;
      border-radius: 5px;
      background-color: #808080;
      /* Initial color is grey */
      transition: background-color 0.3s ease;
    }

    .survey-option a.completed {
      background-color: #1f9d60;
      /* Color turns green after completing the survey */
    }
  </style>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
</head>

<body style="background-color: #fff9d2;  ">
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
      <h1 style="font-size: 50px;color: rgb(0, 92, 191);text-align: center  ;">JalSaksham Portal</h1>
      <h2 style="font-size: 20px;color: rgb(35, 37, 38);text-align: center  ;text-decoration: underline;">जल से सशक्ति,
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
            <ion-icon name="person-outline" style="margin-right: 5px;margin-bottom: -2px;"></ion-icon>Register
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
    <h2 style="color: black; display: inline-block; font-family: sans-serif; margin-top: 65px; ">Survey</h2>
    <h2 style="color: rgb(179, 11, 11); display: inline-block; font-family: sans-serif;">Types</h2>
    <p style="margin-top: -5px;margin-bottom: 10px;"><img
        src="https://bitwardha.ac.in/wp-content/themes/bajaj-institute/assets/img/topi.svg"></p>
  </div>

  <div class="survey-container">
    <div class="survey-option">
      <a href="survey1.php" class="survey-link" id="survey1">Survey 1: WHS INFO</a>
    </div>

    <div class="survey-option">
      <a href="survey2.php" class="survey-link" id="survey2">Survey 2: BENEFICIARY INFO</a>
    </div>
    <div class="survey-option">
      <a href="survey3.php" class="survey-link" id="survey3">Survey 3: SOCIO ECONOMIC INDICATORS</a>
    </div>
    <div class="survey-option">
      <a href="survey4.php" class="survey-link" id="survey4">Survey 4: ALTERNATE INCOME DATA</a>
    </div>

    <button type="submit"  style="margin-left:340px ;background-color: rgb(44, 219, 44);" onclick="location.href='https://nmsa.dac.gov.in/';" class="btn">Submit</button>



    <!-- <div class="survey-option">
      <a href="survey5.php" class="survey-link" id="survey5">Survey 5: SDG Questionnaire</a>
    </div>
    <div class="survey-option">
      <a href="survey6.php" class="survey-link" id="survey6">Survey 6: UNCCD Questionnaire</a>
    </div>
    <div class="survey-option">
      <a href="survey7.php" class="survey-link" id="survey7">Survey 7: UNFCCC Questionnaire</a>
    </div>
    Add other survey options here -->
  </div>

  <script>
    let x = window.localStorage.getItem('ColorObj');
    let temp = JSON.parse(x);
    console.log(x);
    // Update the style based on the completion status
    if (temp.s1) {
      document.getElementById('survey1').classList.add('completed');
    }
    if (temp.s2) {
      document.getElementById('survey2').classList.add('completed');
    }
    if (temp.s3) {
      document.getElementById('survey3').classList.add('completed');
    }
    if (temp.s4) {
      document.getElementById('survey4').classList.add('completed');
    }
    // if (temp.s5) {
    //   document.getElementById('survey5').classList.add('completed');
    // }
    // if (temp.s6) {
    //   document.getElementById('survey6').classList.add('completed');
    // }
    // if (temp.s7) {
    //   document.getElementById('survey7').classList.add('completed');
    // }
  </script>

</body>
<!-- Remove the container if you want to extend the Footer to full width. -->


<!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color: rgb(0, 92, 191);">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-between p-4" style="background-color: rgb(6, 6, 6)">
    <div class="me-5">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-github"></i>
      </a>
    </div>
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
          <h6 class="text-uppercase fw-bold">Company name</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
          <p>
            Here you can use rows and columns to organize your footer
            content. Lorem ipsum dolor sit amet, consectetur adipisicing
            elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Products</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
          <p>
            <a href="#!" class="text-white">MDBootstrap</a>
          </p>
          <p>
            <a href="#!" class="text-white">MDWordPress</a>
          </p>
          <p>
            <a href="#!" class="text-white">BrandFlow</a>
          </p>
          <p>
            <a href="#!" class="text-white">Bootstrap Angular</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Useful links</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
          <p>
            <a href="#!" class="text-white">Your Account</a>
          </p>
          <p>
            <a href="#!" class="text-white">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!" class="text-white">Shipping Rates</a>
          </p>
          <p>
            <a href="#!" class="text-white">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Contact</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
          <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


<!-- End of .container -->

</html>