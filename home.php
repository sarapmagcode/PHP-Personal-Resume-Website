<?php
    // LEFT
    // profile
    $name = "Mark Jason T. Galang";
    $status = "Computer Science Student";
    $contact = "Contact me:";
    $phone = "+63 908 599 6647";
    $email = "jason.talusig00@gmail.com";
    $website = "github.com/sarapmagcode";
    $location = "Cainta, Rizal";

    // about me
    $about = "About me";
    $about_info = "Hi I am Mark Jason T. Galang! A 3rd year Computer Science
                student at FEU Institute of Technology. My areas of interest
                are Software Development, Web Programming, and Competitive 
                Programming.";

    // objectives
    $objective = "Objectives";
    $goal1 = "To graduate and help my parents";
    $goal2 = "Become a Software Engineer";
    $goal3 = "Travel the whole world";

    // RIGHT
    // education
    $right_heading1 = "Education";
    $year1 = "2019 - Present";
    $school1 = "FEU Institute of Technology";
    $data1 = "Bachelor of Computer Science w/ Specialization in Software Engineering";
    $year2 = "2017 - 2019";
    $school2 = "STI College Ortigas-Cainta";
    $data2 = "Senior High School - IT in Mobile App & Web Development";
    $year3 = "2013 - 2017";
    $school3 = "Siena College of Taytay";
    $data3 = "Junior High School";

    // programming skills
    $right_heading2 = "Programming Skills";
    $language1 = "C++";
    $language2 = "Java";
    $language3 = "HTML";
    $language4 = "CSS";
    $language5 = "PHP";
    $language6 = "Python";
    $language7 = "Oracle";
    $language8 = "Assembly";

    // awards
    $right_heading3 = "Awards";
    $award1 = "FEU Tech: Clash of Coders 2021 Champion";
    $award2 = "FEU Alabang: CODEVENTION 2021 1st Runner-up";
    $award3 = "MTA: Introduction to Programming Using Java";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="icon" href="https://www.pngplay.com/wp-content/uploads/8/Xbox-Green-Logo-PNG-Clipart-Background.png">
        <title>Resume</title>
    </head>
    <body>
        <div class="container">
            <!-- Left Part -->
            <div class="left">
                <div class="profile">
                    <img src="./images/photo.JPG" alt="photo">
                    <h1 class="name"><?php echo $name; ?></h1>
                    <h1 class="status"><?php echo $status; ?></h1>
                    <ul>
                        <li><i class="uil uil-mobile-vibrate"></i> <?php echo $contact; ?></li>
                        <li><i class="uil uil-phone"></i> <?php echo $phone; ?></li>
                        <li><i class="uil uil-envelope"></i> <?php echo $email; ?></li>
                        <li><i class="uil uil-github-alt"></i> <a href="https://www.github.com/sarapmagcode"><?php echo $website; ?></a></li>
                        <li><i class="uil uil-location-pin-alt"></i> <?php echo $location; ?></li>
                    </ul>
                </div>
                <hr>
                <div class="info">
                    <i class="uil uil-arrow"></i>
                    <h1><?php echo $about; ?></h1>
                    <p><?php echo $about_info; ?></p>
                </div>
                <hr>
                <div class="objectives">
                    <i class="uil uil-focus-target"></i>
                    <h1><?php echo $objective; ?></h1>
                    <ul>
                        <li><i class="uil uil-step-forward"></i><?php echo $goal1; ?></li>
                        <li><i class="uil uil-step-forward"></i><?php echo $goal2; ?></li>
                        <li><i class="uil uil-step-forward"></i><?php echo $goal3; ?></li>
                    </ul>
                </div>
                <hr>
                <div class="end">
                    <i class="uil uil-cell"></i>
                    <i class="uil uil-cell"></i>
                    <i class="uil uil-cell"></i>
                </div>
            </div>

            <!-- Right Part -->
            <div class="right">
                <div class="right-heading">
                    <i class="uil uil-book-medical"></i>
                    <h1><?php echo $right_heading1; ?></h1>
                </div>
                <div class="content">
                    <div class="content-block">
                        <div class="c1">
                            <i class="uil uil-arrow-circle-right"></i>
                            <h2><?php echo $year1; ?></h2>
                        </div>
                        <div class="c2">
                            <h3><?php echo $school1; ?></h3>
                            <h4><?php echo $data1; ?></h4>
                        </div>
                    </div>
                    <div class="content-block">
                        <div class="c1">
                            <i class="uil uil-arrow-circle-right"></i>
                            <h2><?php echo $year2; ?></h2>
                        </div>
                        <div class="c2">
                            <h3><?php echo $school2; ?></h3>
                            <h4><?php echo $data2; ?></h4>
                        </div>
                    </div>
                    <div class="content-block">
                        <div class="c1">
                            <i class="uil uil-arrow-circle-right"></i>
                            <h2><?php echo $year3; ?></h2>
                        </div>
                        <div class="c2">
                            <h3><?php echo $school3; ?></h3>
                            <h4><?php echo $data3; ?></h4>
                        </div>
                    </div>
                </div>
                <div class="right-heading">
                    <i class="uil uil-code-branch"></i>
                    <h1><?php echo $right_heading2; ?></h1>
                </div>
                <div class="content">
                    <div class="content-block">
                        <div class="c1">
                            <i class="uil uil-rocket"></i>
                            <h2><?php echo $language1; ?></h2>
                        </div>
                        <div class="c2">
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                        </div>
                    </div>
                    <div class="content-block">
                        <div class="c1">
                            <i class="uil uil-rocket"></i>
                            <h2><?php echo $language2; ?></h2>
                        </div>
                        <div class="c2">
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                        </div>
                    </div>
                    <div class="content-block">
                        <div class="c1">
                            <i class="uil uil-rocket"></i>
                            <h2><?php echo $language3; ?></h2>
                        </div>
                        <div class="c2">
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                        </div>
                    </div>
                    <div class="content-block">
                        <div class="c1">
                            <i class="uil uil-rocket"></i>
                            <h2><?php echo $language4; ?></h2>
                        </div>
                        <div class="c2">
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                        </div>
                    </div>
                    <div class="content-block">
                        <div class="c1">
                            <i class="uil uil-rocket"></i>
                            <h2><?php echo $language5; ?></h2>
                        </div>
                        <div class="c2">
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                        </div>
                    </div>
                    <div class="content-block">
                        <div class="c1">
                            <i class="uil uil-rocket"></i>
                            <h2><?php echo $language6; ?></h2>
                        </div>
                        <div class="c2">
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                        </div>
                    </div>
                    <div class="content-block">
                        <div class="c1">
                            <i class="uil uil-rocket"></i>
                            <h2><?php echo $language7; ?></h2>
                        </div>
                        <div class="c2">
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                        </div>
                    </div>
                    <div class="content-block">
                        <div class="c1">
                            <i class="uil uil-rocket"></i>
                            <h2><?php echo $language8; ?></h2>
                        </div>
                        <div class="c2">
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                        </div>
                    </div>
                </div>
                <div class="right-heading">
                    <i class="uil uil-trophy"></i>
                    <h1><?php echo $right_heading3; ?></h1>
                </div>
                <div class="awards">
                    <div class="awards-container">
                        <i class="uil uil-award"></i>
                        <h2><?php echo $award1; ?></h2>
                        <img class="a1" src="./images/a1.png" alt="clash">
                    </div>
                    <div class="awards-container">
                        <i class="uil uil-award"></i>
                        <h2><?php echo $award2; ?></h2>
                        <img class="a2" src="./images/a2.png" alt="codevention">
                    </div>
                    <div class="awards-container">
                        <i class="uil uil-award"></i>
                        <h2><?php echo $award3; ?></h2>
                        <img class="a3" src="./images/a3.jpg" alt="mta">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>