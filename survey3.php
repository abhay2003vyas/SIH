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

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      color: #2fc47c;

    }

    #survey-container {
      max-width: 1500px;
      margin: auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .box {
      width: 100%;
      padding: 8px;
      margin-top: 30px;
      box-sizing: border-box;
    }

    .button-container {
      margin-top: 20px;
      text-align: center;
    }

    .button-container button {
      margin: 0 10px;
    }
  </style>
</head>

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
    <h2 style="color: black; display: inline-block; font-family: sans-serif; margin-top: 65px; ">SOCIO</h2>
    <h2 style="color: rgb(179, 11, 11); display: inline-block; font-family: sans-serif;">ECONOMIC INDICATORS</h2>
    <p style="margin-top: -5px;margin-bottom: 10px;"><img
        src="https://bitwardha.ac.in/wp-content/themes/bajaj-institute/assets/img/topi.svg"></p>
  </div>

  <div id="survey-container">
    <form action="process_S3.php" method="post">
      <label for="1">1. How many individuals live in your household?</label>
      <select class="form-control" id="1" name="question1">
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="7">8</option>
        <option value="more than 8">more than 8</option>
      </select>

      <label for="2">2. Are there any elderly family members or dependents living with you?</label>
      <select class="form-control" id="2" name="question2">
        <option value="yes"> yes </option>
        <option value="no">no</option>
      </select>

      <label for="3">3. Are your children currently attending school? If so, which school(s) do they attend?</label>
      <select class="form-control" id="3" name="question3">
        <option value="govenment school">government school</option>
        <option value="private school">private school</option>
        <option value="public school">public school</option>
      </select>

      <label for="4">4. Are you relying on any financial support for the education of your children?</label>
      <select class="form-control" id="4" name="question4">
        <option value="yes">yes</option>
        <option value="no">no</option>
      </select>

      <label for="5">5. Do you employ any domestic help, such as a maid, nanny, or housekeeper?</label>
      <select class="form-control" id="5" name="question5">
        <option value="yes">yes</option>
        <option value="no">no</option>
      </select>

      <label for="6">6. Are there any specific reasons or needs for having household help?</label>
      <select class="form-control" id="6" name="question6">
        <option value="yes">yes</option>
        <option value="no">no</option>
      </select>

      <label for="7">7. Are there any other supplemental sources of income or employment within the household like shop
        or any
        other source?</label>
      <select class="form-control" id="7" name="question7">
        <option value="yes">yes</option>
        <option value="no">no</option>
      </select>

      <label for="8">8. Which type of housing you reside in?</label>
      <select class="form-control" id="8" name="question8">
        <option value="house">house</option>
        <option value="flat">flat</option>
        <option value="apartment">apartment</option>
        <option value="farmhouse">farmhouse</option>
        <option value="hut">hut</option>
      </select>

      <label for="9">9. Do you own or rent your house?</label>
      <select class="form-control" id="9" name="question9">
        <option value="rent">rent</option>
        <option value="own">own</option>
      </select>

      <label for="10">10. Are there any health concerns or specific healthcare needs within your household?</label>
      <select class="form-control" id="10" name="question10">
        <option value="yes">yes</option>
        <option value="no">no</option>
      </select>

      <label for="11">11. Besides fishing, does anyone in your household have another job or source of income?</label>
      <select class="form-control" id="11" name="question11">
        <option value="yes">yes</option>
        <option value="no">no</option>
      </select>

      <label for="12">12. How much of your income goes towards household expenses in a year?</label>
      <select class="form-control" id="12" name="question12">
        <option value=" ₹7,000 - ₹10,000 "> ₹7,000 - ₹10,000 </option>
        <option value=" ₹11,000 - ₹15,000 "> ₹11,000 - ₹15,000 </option>
        <option value=" ₹16,000 - ₹25,000 "> ₹16,000 - ₹25,000 </option>
        <option value=" ₹26,000 - ₹35,000 "> ₹26,000 - ₹35,000 </option>
        <option value=" more than ₹35,000 "> more than ₹35,000 </option>
      </select>

      <label for="13">13. Do you own any vehicles?</label>
      <select class="form-control" id="13" name="question13">
        <option value="yes">yes</option>
        <option value="no">no</option>
      </select>

      <label for="14">14. What type(s) of vehicle(s) do you own?</label>
      <input class="form-control"   type="text" name="question14" class="box">

      <label for="15">15. How many vehicles do you own in total?</label>
      <select class="form-control" id="15" name="question15">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="more than 4">more than 4</option>
      </select>

      <!-- Button Container -->
      <div class="button-container row"style="margin-left: 500px;">
        <div class="col-md-6 text-left">
          <button type="submit" onclick="redirectPage()" class="btn btn-primary"  >Submit</button>
        </div>
      </div>
    </form>
  </div>
  <script>
    
    function redirectPage() {
            let temp = window.localStorage.getItem('ColorObj')
            let colourState = JSON.parse(temp)
            colourState.s3 = true
            window.localStorage.setItem('ColorObj', JSON.stringify(colourState))
        }

  </script>
</body>

</html>