<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="registration_css.css" />
</head>
<body>

    <div class="header">
        <!-- <a href="#default" class="logo">  -->
            <img src="img/agrilogo.png" width="65" height="50">
        <!-- </a> -->
        <div class="header-right">
            <a class="active" href="#home">Home</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>
    </div>

    <form action="action_page.php">
        <div class="container">

            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required><br>
                
            <label for="email"><b>Birthdate</b></label>
            <input type="date" name="email" required><br><br>

            <label for="sex"><b>Sex</b></label><br>
            <input type="radio" name="gender" value="male"> Male<br>
            <input type="radio" name="gender" value="female"> Female<br><br>

            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="Enter Adress" name="address" required><br>
        
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
        
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
            <hr>
        
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="registerbtn">Register</button>
        </div>
      
        <div class="container signin">
          <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
      </form>
</body>
</html>