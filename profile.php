<?php
$param = (isset($_GET['load']) && $_GET['load'] != '') ? $_GET['load'] : '';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MyPortfolio</title>
        <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/stylesheet.css"/>
    </head>
    <body>
        <div id="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="activities.php">Activities</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </div>
        
        <div id="name">
            <a href="index.php">MyPortfolio</a>
        </div>
        

        <div id="profile">
            <div id="profile-pic"></div>
            <div id="contact">
                https://www.facebook.<br>com/eric.angelo.9619/<br><br>
                s2120517@usls.edu.ph<br><br>
                0963-525-5135
            </div>
            <div id="info">
                Eric Angelo V. Deypalobos<br>
                BSIT_1B<br>
                University of St. La Salle<br><br>
                <h1>Eric is a 19 year old college student, studying Information Technology at the University of St. La Salle.</h1>
            </div>
        </div>

    </body>
</html