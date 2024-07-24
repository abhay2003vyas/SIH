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

    button:hover {
      background-color: #0056b3;
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
      background-color: rgba(173, 253, 152, 0.9);
      color: #1a8300;
      padding: 60px;
      border-radius: 20px;
      box-shadow: 0 0 30px rgba(67, 255, 145, 0.3);
      width: 90%;
      max-width: 1200px;
      margin: 20px auto;
    }

    .styled-div h3 {
      font-size: 40px;
      margin-bottom: 30px;
    }

    .styled-div ul {
      list-style-type: none;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: left;
    }

    .styled-div li {
      margin-bottom: 30px;
      display: flex;
      align-items: center;
      font-size: 20px;
    }

    .styled-div i {
      margin-right: 30px;
      color: #1a8300;
      font-size: 30px;
    }

    .survey-button {
      text-align: center;
      margin-top: 30px;
    }

    .survey-button button {
      padding: 15px;
      font-size: 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .survey-button button:hover {
      background-color: #0056b3;
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
        <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
          <a href="survey_login.php" class="btn btn-sm btn-primary w-full w-lg-auto"
            onclick="location.href='index.html';">
            <ion-icon name="reader-sharp" style="margin-right: 5px; margin-bottom: -2px;"></ion-icon>Logout
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <div class="points-container">
    <h2 style="color: black; display: inline-block; font-family: sans-serif; margin-top: 50px;">Why this</h2>
    <h2 style="color: rgb(179, 11, 11); display: inline-block; font-family: sans-serif;">Survey ?</h2>
    <p><img src="https://bitwardha.ac.in/wp-content/themes/bajaj-institute/assets/img/topi.svg" alt="Topi"></p>
  </div>

  <div class="styled-div">
    <ul>
      <li><i class="fas fa-check-circle"></i>The survey indirectly supports environmental conservation through the
        sustainable use of water resources. Effective watershed management practices contribute to maintaining
        ecological balance and biodiversity</li>
      <li><i class="fas fa-check-circle"></i>Communities are informed about the financial opportunities available to
        them, encouraging active participation in the management and sustainability of WHSs</li>
      <li><i class="fas fa-check-circle"></i>Enhances the understanding of the role of WHSs in supporting livelihood
        activities like fisheries and aquatic vegetable cultivation etc.</li>
      <li><i class="fas fa-check-circle"></i>By diversifying income sources through activities like fisheries and
        vegetable cultivation, communities become more resilient to economic fluctuations, enhancing their ability to
        cope with challenges.</li>
      <li><i class="fas fa-check-circle"></i>In summary, the survey not only serves as a tool for evaluating and
        refining the project but also contributes to the broader goals of economic development, environmental
        sustainability, and social well-being in the project area.</li>
    </ul>
    <div class="survey-button">
      <button onclick="location.href='survey.php';">Proceed to Survey</button>
    </div>

  </div>
</body>
<script>
  localStorage.removeItem('ColorObj');
  const obj = {
    s1: false,
    s2: false,
    s3: false,
    s4: false,
    s5: false,
    s6: false,
    s7: false
  }
  window.localStorage.setItem('ColorObj', JSON.stringify(obj));
</script>

</html>