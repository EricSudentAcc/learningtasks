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
    
    <div id="wrapper">
        <h2>Welcome to<br> My Website!<br> I'm Eric Deypalobos</h2>
        <div id="more">
        <a href="/LT6/profile.php">know the author</a>
        </div>
    </div> 
    </body>
</html