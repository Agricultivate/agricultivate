<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="homepage.css" />
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="stylesheet/page.css">
    <link rel="stylesheet" type="text/css" href="pagestyle.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/login.css">
</head>

<style>

body {
    background-image: url("/img/home_land.jpg"); /* The image used */
    height: 600px; /* You must set a specified height */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
}
</style>
<body>

<!-- header -->

    <?php
        if(isset($_SESSION['user-logged-in'])) {
    ?>
        <div class="login-header" style="height: 65px; background-color: rgba(0, 0, 0, 0.9)">
            <div style="padding: 20px; color: white; font-weight: bold; float: right">
                <a>regismich11@gmail.com |</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    <?php
        }
    ?>

    <div class="header">
        <div class="header-content">
            <div style="float: left; padding: 20px;" >
                <a href="home.php">
                    <h3>AgriCultivate</h3>
                </a>
            </div>
        </div>
    </div>

    <div class="login-page-content">
        <div class="login-content">
            
        </div>

        <div class="login-form">
            <form action="/agricultivate/verifylogin.php" method="post">
                <p class=login-text>Search</p>
                <input type="text" placeholder="Land Location" name="username-login">
                <input type="password" placeholder="Land Type" name="password-login">
                <br />
                <button name="land-search">Search</button>
            </form>
            <a>Search land by Location and Type</a>
        </div>
    </div>

    <div class="footer" style="margin-top: 30px;">
        <div class="header-content" style="padding: 15px;">
            <h3>AgriCultivate</h3>
        </div>
    </div>

</body>
</html>