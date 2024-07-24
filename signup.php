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
    <link rel="stylesheet" href="login.css">
    <style>
        /* Add these styles for the footer */
        /* 
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            background-image: url('img/img2.png');
            background-size: cover;
            background-position: center;
        } */

        .footer {
            background-color: rgb(0, 0, 0);
            /* Light green background color */
            padding: 10px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        #form-container {
            width: 546px;
            height: 730px;
            margin: 50px 0px 50px 550px;
            padding: 20px;
            background-color: #0f0b0bcf;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Increase the width of the Address text box */
        #Address {
            width: 100%;
            /* Use 100% to fill the container width */
            /* Increase the width further if needed */
        }

        /* Other styles remain unchanged */
        .form-outline .form-control {
            min-height: auto;
            padding-top: 0.32rem;
            padding-bottom: 0.32rem;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            border: 0;
            background-color: white;
            transition: all .2s linear;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.6;
            color: var(--mdb-surface-color);
            /* appearance: none; */
            background-color: var(--mdb-body-bg);
            background-clip: padding-box;
            border: var(--mdb-border-width) solid var(--mdb-border-color);
            border-radius: var(--mdb-border-radius);
            box-shadow: var(--mdb-box-shadow-inset);
            transition: all .2s linear;
        }

        .form-outline .form-control~.form-label {
            position: absolute;
            top: 0;
            max-width: 90%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            left: 0.75rem;
            padding-top: 0.37rem;
            pointer-events: none;
            transform-origin: 0 0;
            transition: all .2s ease-out;
            color: #0c0c0c;
            margin-bottom: 0;
        }

        .form-label {
            margin-bottom: 0.5rem;
            color: #f5f5f5;
        }

        label {
            display: inline-block;
            margin-bottom: 0.5rem;
            color: #f8f8f8;
        }

        .h6,
        h6 {
            font-size: 1rem;
            color: #c76464;
        }

        h3 {
            color: white;
            text-align: center;
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
            background-image: url('img/img1.png');
            /* Replace 'img/img2.png' with the actual path to your image */
            background-size: cover;
            /* Adjust the background size as needed */
            background-position: center;
            /* Adjust the background position as needed */
            background-repeat: no-repeat;
            /* Set background repeat as needed */
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
            <h1 style="font-size: 50px;color: rgb(0, 92, 191);text-align: center  ;">JalSaksham Portal</h1>
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
                <div class="d-flex align-items-lg-center mt-3 mt-lg-0" style="margin-right: 3px;">
                    <a href="signup.php" class="btn btn-sm btn-primary w-full w-lg-auto">
                        <ion-icon name="person-outline"
                            style="margin-right: 5px;margin-bottom: -2px;"></ion-icon>Register
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div id="form-container">
        <h3>New User Registeration </h3>
        <hr style="border-top: 1px solid white;">
        <form action="save_data.php" method="POST">
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="userType">User Type:</label>
                        <select id="userType" name="userType" class="form-control" required onchange="showStates()">
                            <option value="">--Select--</option>
                            <option value="Surveyor">Surveyor</option>
                            <option value="Beneficiary">Beneficiary</option>
                        </select>
                    </div>
                </div>
                <div class="col" id="stateContainer" style="display:none;">
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="state">State:</label>
                        <select id="state" name="state" class="form-control" required>
                            <option value="">--Select--</option>
                            <!-- State options will be dynamically added here -->
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" />

                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="mobile">Mobile</label>
                        <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile" />

                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email Id" />
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="phone">PhonePhone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Department" />
                    </div>
                </div>
            </div>
            <!-- Submit button -->
            <label>Enter Captcha:</label>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" readonly id="capt">
                </div>
                <div class="form-group col-md-6" style="margin-left: 260px;margin-top: -40px;">
                    <input type="text" class="form-control" id="textinput">
                </div>
            </div>

            <div class="form-group" style="margin-top: 15px;">
                <button type="submit" onclick="validcap()" class="btn btn-lg btn-success btn-block"
                    style="width: 100px;margin-left: 200px;">Submit</button>
            </div>
        </form>
        <h6>Captcha not visible <img src="img/refresh.jpg" width="40px" onclick="cap()"></h6>

    </div>
    <script>
        // Initialization for ES Users
        import { Input, Ripple, initMDB } from "mdb-ui-kit";

        initMDB({ Input, Ripple });

    </script>
    <script>
        function cap() {
            var alpha = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V'
                , 'W', 'X', 'Y', 'Z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i',
                'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '!', '@', '#', '$', '%', '^', '&', '*', '+'];
            var a = alpha[Math.floor(Math.random() * 71)];
            var b = alpha[Math.floor(Math.random() * 71)];
            var c = alpha[Math.floor(Math.random() * 71)];
            var d = alpha[Math.floor(Math.random() * 71)];
            var e = alpha[Math.floor(Math.random() * 71)];
            var f = alpha[Math.floor(Math.random() * 71)];

            var final = a + b + c + d + e + f;
            document.getElementById("capt").value = final;
        }
        function validcap() {
            var stg1 = document.getElementById('capt').value;
            var stg2 = document.getElementById('textinput').value;
            if (stg1 == stg2) {
                alert("Form is validated Succesfully");
                return true;
            } else {
                alert("Please enter a valid captcha");
                return false;
            }
        }
        function showStates() {
            var userType = document.getElementById("userType").value;
            var stateContainer = document.getElementById("stateContainer");
            var stateSelect = document.getElementById("state");
            var states = [];

            // Define states based on the selected user type
            switch (userType) {
                case "Surveyor":
                    states = ["Maharashtra", "Karnataka", "Tamil Nadu"];
                    break;
                case "Beneficiary":
                    states = ["Madhya Pradesh", "Chhattisgarh", "Rajasthan"];
                    break;
                default:
                    states = [];
                    break;
            }

            // Update state options
            stateSelect.innerHTML = '<option value="">--Select--</option>';
            states.forEach(function (state) {
                var option = document.createElement("option");
                option.value = state;
                option.text = state;
                stateSelect.add(option);
            });

            // Show/hide the state container based on user type
            stateContainer.style.display = states.length > 0 ? "block" : "none";
        }
    </script>

    <!-- MDB -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>
<footer class="footer">
    <p>&copy; 2023 Your Website. All Rights Reserved.</p>
</footer>

</html>