<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="stylesheet/page.css">
    <link rel="stylesheet" type="text/css" href="pagestyle.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/login.css">
</head>

<style>
    .login-header {
        background-color: black;
        width: '100%';
        display: block;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .login-header-content {
        height: 50px;
    }
</style>
<body>
    <div class="login-header" style="height: 65px">
        <div style="padding: 20px; color: white; font-weight: bold; float: right">
            <a>regismich11@gmail.com |</a>
            <a href="#">Logout</a>
        </div>
    </div>
    <div class="header">
        <div class="header-content">
            <div style="float: left; padding: 20px;" >
                <a href="home.php">
                    <h3>AgriCultivate</h3>
                </a>
            </div>
            <div style="float: right; padding: 20px;" >
                <a href="login.php">
                    <h3>Login</h3>
                </a>
                <a><h3>
                |
                </h3></a>
                <a href="registration.php">
                    <h3>Register</h3>
                </a>
            </div>
        </div>
    </div>

    <div class="login-page-content">
        <div class="login-content">
            
        </div>

        <div class="login-form">
            <form action="/agricultivate/verifylogin.php" method="post">
                <p class=login-text>Login</p>
                <input type="text" placeholder="Username" name="username-login">
                <input type="password" placeholder="Pasword" name="password-login">
                <br />
                <button name="submit-login">login</button>
            </form>
            <a href="#">Forgot password?</a>
        </div>
    </div>

    <div class="footer" style="margin-top: 30px;">
        <div class="header-content" style="padding: 15px;">
            <h3>AgriCultivate</h3>
        </div>
    </div>
</body>
</html>