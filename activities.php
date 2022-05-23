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
        <div id="menu">
            <a href="/LT2/index.html" target="_blank"><div id="block-1"></div></a>
            <a href="/LT3/index.html" target="_blank"><div id="block-2"></div></a>
            <a href="/CLE1MT/index.html" target="_blank"><div id="block-3"></div></a>
            <a href="/LT4/index.html" target="_blank"><div id="block-4"></div></a>
            <a href="/LT5/index.html" target="_blank"><div id="block-5"></div></a>
            
            <div id="box-1"><a href="/LT2/index.html" target="_blank">LEARNING TASK 2</a></div>
            <div id="box-2"><a href="/LT3/index.html" target="_blank">LEARNING TASK 3</a></div>
            <div id="box-3"><a href="/CLE1MT/index.html" target="_blank">CLE1MT</a></div>
            <div id="box-4"><a href="/LT4/index.html" target="_blank">LEARNING TASK 4</a></div>
            <div id="box-5"><a href="/LT5/index.html" target="_blank">LEARNING TASK 5</a></div>
        </div>
    </div>
    </body>
</html