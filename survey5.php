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
        <h2 style="color: black; display: inline-block; font-family: sans-serif; margin-top: 65px; ">SDG</h2>
        <h2 style="color: rgb(179, 11, 11); display: inline-block; font-family: sans-serif;">Questionnaire</h2>
        <p style="margin-top: -5px;margin-bottom: 10px;"><img
                src="https://bitwardha.ac.in/wp-content/themes/bajaj-institute/assets/img/topi.svg"></p>
    </div>

    <div class="container">
        <form action="process_S5.php" method="post">
            <!-- SDG 1: No Poverty -->
            <h2>SDG 1: No Poverty</h2>
            <div class="form-group">
                <label>1. Have water harvesting structures led to income generation opportunities for local communities,
                    such as through increased agricultural productivity, micro-enterprises, or jobs related to water
                    management and infrastructure?
                </label>
                <select class="form-control" name="sdg1_question1">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <label>2. Have these projects empowered women economically by providing them with opportunities for
                    income generation and financial independence?

                </label>
                <select class="form-control" name="sdg1_question2">
                    <option value="yes,significantly"> yes</option>
                    <option value="No change">No change</option>
                </select>

                <br>
                <h2>SDG 2: Zero Hunger</h2>

                <label>3. Have water harvesting structures led to increased agricultural productivity in the area,
                    resulting in higher crop yields and improved food production?</label>
                <select class="form-control" name="sdg2_question1">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <label>4. Has the availability of water from these structures facilitated irrigation for agricultural
                    purposes, especially during dry seasons, thus enhancing food production and crop
                    reliability?</label>
                <select class="form-control" name="sdg2_question2">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <h2><br>SDG 3: Good Health and Well-being</h2>

                <label>5. Does the water harvesting structure provide access to clean and safe drinking water for the
                    community or individuals?</label>
                <select class="form-control" name="sdg3_question1">
                    <option value="Strongly agree">Strongly agree</option>
                    <option value="Agree">Agree</option>
                    <option value="Neutral">Neutral</option>
                    <option value="Agree">Disagree</option>
                    <option value="Strongly disagree">Strongly disagree</option>
                </select>

                <label>6. Has the availability of water from these structures enabled improved food production, such as
                    irrigation for agriculture or access to water for livestock?</label>
                <select class="form-control" name="sdg3_question2">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <br>
                <h2>SDG 5:Gender Equality:</h2>

                <label>7. Do women and men have equal access to and control over the benefits and decision-making
                    related to water harvesting structures, including the use of harvested water?</label>
                <select class="form-control" name="sdg5_question1">
                    <option value="Yes">Yes</option>
                    <option value="No">No change</option>
                </select><br>

                <label>8. Have water harvesting projects contributed to income generation and economic empowerment?
                    If yes, please specify the beneficiaries and the extent of impact.</label>
                <select class="form-control" name="sdg5_question2">
                    <option value="Yes">Yes, for both women and men</option>
                    <option value="Yes_women">Yes, with a focus on women's economic empowerment</option>
                    <option value="No">No, there has been no significant impact on income generation or economic
                        empowerment.</option>
                </select>

                <h2><br>SDG 7:Affordable and Clean Energy:</h2>

                <label>9. Do the water harvesting structures incorporate energy generation components, such as
                    micro-hydroelectric systems or solar-powered pumps, to provide clean and affordable energy to
                    the community?</label>
                <select class="form-control" name="sdg7_question1">
                    <option value="Strongly agree">Strongly agree</option>
                    <option value="Agree ">Agree </option>
                    <option value="Neutral">Neutral</option>
                    <option value="Disagree ">Disagree </option>
                    <option value="Strongly Disagree ">Strongly Disagree </option>
                </select>

                <label>10. Has the availability of energy from these structures enabled income-generating
                    activities or improved access to education and healthcare services, contributing to
                    poverty reduction and economic development?
                </label>
                <select class="form-control" name="sdg7_question2">
                    <option value="Yes">Yes</option>
                    <option value="No ">No </option>
                </select>

                <h2><br>SDG 8:Decent Work and Economic growth: </h2><br>

                <label>11. Have water harvesting projects led to the creation of new jobs, both directly
                    (e.g., construction and maintenance of structures) and indirectly (e.g., related to
                    agriculture, small businesses, or water management)?
                </label>
                <select class="form-control" name="sdg8_question1">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <label>12. Have these projects facilitated the establishment or growth of small-scale
                    enterprises, such as agribusinesses, water-related businesses, or local markets,
                    promoting economic growth?</label>
                <select class="form-control" name="sdg8_question2">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select><br>

                <h2>SDG 9: Industry, Innovation, and Infrastructure: </h2>

                <label>13. Have water harvesting structures contributed to the development of
                    infrastructure within the community, such as roads, irrigation systems, and storage
                    facilities?</label>
                <select class="form-control" name="sdg9_question1">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <label>14. Have digital technologies or data collection tools been used to monitor
                    and optimise the performance of water harvesting structures or to manage water
                    resources more effectively?
                </label>
                <select class="form-control" name="sdg9_question2">
                    <option value="Yes">Yes</option>
                    <option value="No">No change</option>
                </select>

                <h2><br>SDG 10:Reduced Inequality:</h2>

                <label>15. Do water harvesting structures ensure equitable access to water resources,
                    particularly for marginalised or vulnerable groups, including women, minorities,
                    and people with disabilities?
                </label>
                <select class="form-control" name="sdg10_question1">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <h2><br>SDG 12:Responsible Consumption and Production </h2>

                <label>16. Have these structures contributed to the reduction of water wastage in
                    agriculture, industry, or domestic use, aligning with responsible consumption
                    and production practices?</label>
                <select class="form-control" name="sdg12_question1">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <label>17. Have water harvesting initiatives promoted sustainable agricultural
                    practices, such as efficient irrigation and soil conservation, to reduce water use and
                    promote responsible production?
                </label>
                <select class="form-control" name="sdg12_question2">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <br>
                <h2>SDG 13: Climate Action: </h2>
                <label>18. Have water harvesting projects been designed to address climate-related
                    extreme weather events, such as heavy rainfall, floods, or prolonged droughts?
                </label>
                <select class="form-control" name="sdg13_question1">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <br>
                <h2>SDG 17:Partnerships for the Goals: </h2>

                <label>19. Is there a system in place for sharing data and information related to water
                    resources, climate, and sustainability among partners to inform decision-making and enhance
                    transparency?
                </label>
                <select class="form-control" name="sdg17_question1">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="button-container row">
                <div class="col-md-6 text-left" style="margin-left: 600px; margin-top: 25px;">
                    <button type="submit" onclick="redirectPage()" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        
        function redirectPage() {
            let temp = window.localStorage.getItem('ColorObj')
            let colourState = JSON.parse(temp)
            colourState.s5 = true
            window.localStorage.setItem('ColorObj', JSON.stringify(colourState))
        }

    </script>
</body>

</html>