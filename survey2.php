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

            .button-container {
                margin-top: 20px;
                text-align: right;
            }

            .button-container button {
                margin: 0 10px;
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
            <div class=" container-xl">
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
            <h2 style="color: black; display: inline-block; font-family: sans-serif; margin-top: 65px; ">Beneficiary </h2>
            <h2 style="color: rgb(179, 11, 11); display: inline-block; font-family: sans-serif;">INFO</h2>
            <p style="margin-top: -5px;margin-bottom: 10px;"><img
                    src="https://bitwardha.ac.in/wp-content/themes/bajaj-institute/assets/img/topi.svg"></p>
        </div>

        <div class="container">

            <form action="process_S2.php" method="post">
                <div class="form-group">
                    <label for="beneficiary_name">Beneficiary's Name:</label>
                    <input type="text" class="form-control" id="beneficiary_name" name="beneficiary_name">
                </div>
                <div class="form-group">
                    <label for="gender">gender:</label><br>
                    <select class="form-control" id="gender" name="gender" onchange="getGender()">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <input type="text" class="form-control mt-3" style="display: none;" id="other_specify"
                        name="other_specify" placeholder="Specify">
                </div>

                <div class="form-group">
                    <label for="caste"> Caste:</label><br>
                    <select class="form-control" id="caste" name="caste" onchange="getCaste()">
                        <option value="General">General</option>
                        <option value="OBC">OBC</option>
                        <option value="SC">SC</option>
                        <option value="ST">ST</option>
                        <option value="Other">Other</option>
                    </select>
                    <input type="text" class="form-control mt-3" style="display: none;" id="cast_specify"
                        name="other_specify" placeholder="Specify">
                </div>

                <!-- Age -->
                <div class="form-group">
                    <label for="age">Age:</label><br>
                    <input type="text" class="form-control" id="age" name="age">
            
                </div>
                <div class="form-group">
                    <label for="occupation">Occupation:</label><br>
                    <select class="form-control" id="occupation" name="occupation" onchange="getOccupation()">
                        <option value="Farmer">Farmer</option>
                        <option value="Fisherman">Fisherman</option>
                        <option value="labourer">FPOs</option>
                        <option value="groups">Self Help Groups [SHGs]</option>
                        <option value="owner">Business owner</option>
                        <option value="seller">Fruits and Vegetable Seller</option>
                        <option value="Other">Other</option>
                    </select>
                    <input type="text" class="form-control mt-3" style="display: none;" id="occupation_specify"
                        name="occupation_specify" placeholder="Specify">
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number:</label>
                    <input type="tel" class="form-control" id="phone_number" name="phone_number"
                        oninput="validatePhoneNumber()" maxlength="10">
                    <span id="phone_number_error" style="color: red;"></span>
                </div>
                <div class="form-group">
                    <label for="phone_number">Aadhaar Card Number:</label>
                    <input type="tel" class="form-control" id="phone_number" name="aadhaar_number">
                </div>
                <div class="form-group">
                    <label for="family_members">Number of Family / Organization Members:</label>
                    <input type="number" class="form-control" id="family_members" name="family_members">
                </div>
                <!-- Contact Information -->

                <!-- Education Level -->
                <div class="form-group">
                    <label for="education_level">Education Level:</label><br>
                    <select class="form-control" id="education" name="education" onchange="geteducation()">
                        <option value="No formal education">No formal education</option>
                        <option value="Primary school">Primary school</option>
                        <option value="Secondary school">Secondary school</option>
                        <option value="diploma">Diploma</option>
                        <option value="College/University">College/University</option>
                        <option value="Other">Other</option>
                    </select>
                    <input type="text" class="form-control mt-3" style="display: none;" id="education_specify"
                        name="education_specify" placeholder="Specify">
                </div>

                <!-- Button Container -->
                <div class="button-container row">
                    <div class="col-md-6 text-left" style="margin-left: 80px;">
                        <button type="submit" onclick="redirectPage()" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            function getGender() {
                var gender = document.getElementById("gender").value;
                var other_specify = document.getElementById("other_specify");
                console.log(gender)
                if (gender == "other") {
                    other_specify.style.display = "block"
                } else {
                    other_specify.style.display = "none"
                }
            }

            function getCaste() {
                var caste = document.getElementById("caste").value;
                var other_specify = document.getElementById("cast_specify");
                console.log(caste)
                if (caste == "Other") {
                    cast_specify.style.display = "block"
                } else {
                    cast_specify.style.display = "none"
                }
            }

            function getOccupation() {
                var occupation = document.getElementById("occupation").value;
                var occupation_specify = document.getElementById("occupation_specify");
                console.log(occupation)
                if (occupation == "Other") {
                    occupation_specify.style.display = "block"
                } else {
                    occupation_specify.style.display = "none"
                }
            }

            function geteducation() {
                var education = document.getElementById("education").value;
                var education_specify = document.getElementById("education_specify");
                console.log(education)
                if (education == "Other") {
                    education_specify.style.display = "block"
                } else {
                    education_specify.style.display = "none"
                }
            }

            function validatePhoneNumber() {
                var phoneNumberInput = document.getElementById("phone_number");
                var phoneNumberError = document.getElementById("phone_number_error");

                var phoneNumber = phoneNumberInput.value.replace(/\D/g, '');

                if (phoneNumber.length === 10) {
                    phoneNumberError.textContent = '';
                } else {
                    phoneNumberError.textContent = 'Please enter a 10-digit phone number.';
                }
            }


            function redirectPage() {
                let temp = window.localStorage.getItem('ColorObj')
                let colourState = JSON.parse(temp)
                colourState.s2 = true
                window.localStorage.setItem('ColorObj', JSON.stringify(colourState))
            }

        </script>
    </body>

    </html>