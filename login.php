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
  <link rel="stylesheet" href="login.css">
  <style>
    /* Add these styles for the footer */
    .footer {
      background-color: rgb(0, 0, 0);
      /* Light green background color */
      padding: 10px;
      text-align: center;
      position: relative;
      bottom: 0;
      width: 100%;
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
    body {
  margin: 0;
  font-family: 'Roboto', sans-serif;
  background-color: #f5f5f5;
  background-image: url('img/img2.png'); /* Replace 'img/img2.png' with the actual path to your image */
  background-size: cover; /* Adjust the background size as needed */
  background-position: center; /* Adjust the background position as needed */
  background-repeat: no-repeat; /* Set background repeat as needed */
}

  </style>
</head>

<body >
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
          <a class="nav-item nav" href="index.html" aria-current="page"><ion-icon name="home-sharp"
              style="margin-right: 5px;margin-top: 4px;"></ion-icon>HOME</a>
          <a class="nav-item nav" href="#"><ion-icon name="people-sharp"
              style="margin-right: 5px;margin-top:4px;"></ion-icon>ABOUT</a></a>
          <a class="nav-item nav" href="#"><ion-icon name="receipt-sharp"
              style="margin-right: 5px;margin-top: 4px;"></ion-icon>REPORTS</a>
          <a class="nav-item nav" href="Dashboard.php"><ion-icon name="people-sharp"
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
        <div class="d-flex align-items-lg-center mt-3 mt-lg-0" style="margin-right: 3px;" >
          <a href="signup.php" class="btn btn-sm btn-primary w-full w-lg-auto">
            <ion-icon name="person-outline" style="margin-right: 5px;margin-bottom: -2px;"></ion-icon>Register
          </a>
        </div>
      </div>
    </div>
  </nav>

  <div class="login-box">
    <h2>Login</h2>
    <form action="login_process.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit" class="btn">Login</button>
    </form>
    <p>Don't have an account? <a href="signup.php ">Register here</a></p>
  </div>
  <script type="text/javascript"></script>
</body>
<footer class="footer">
  <p>&copy; 2023 Your Website. All Rights Reserved.</p>
</footer>

</html>