<?php
    if(isset($_POST['submit-register'])) {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "agricultivate";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if(!$conn) {
            die("Database connection failed: " . mysqli_connect_error() . 
            " (" . mysqli_connect_errno() . ")");
        }

        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $surname = $_POST['surname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        if(isset($_POST['firstname'])) {
            echo "Firstname TRUE";
        }
        if(isset($_POST['middlename'])) {
            echo "Middlename TRUE";
        }
        if(isset($_POST['firstname'])) {
            echo "Surname TRUE";
        }
        if(isset($_POST['gender'])) {
            echo "Gender TRUE";
        }
        if(isset($_POST['email'])) {
            echo "Email TRUE";
        }
        if(isset($_POST['address'])) {
            echo "Address TRUE";
        }
        

         // My SQL Query
         $query = "INSERT INTO user_data(firstname, middlename, surname, gender, email, address) 
         VALUES('$firstname', '$middlename', '$surname', '$gender', '$email', '$address' )";
         
         // Checks if successfull
         if(mysqli_query($conn, $query)) {
             header("location: login.php?registration=successful");
         } else {
             echo "Registration Failed!" . mysqli_error($conn);
         }

         mysqli_close($conn);
    }
?>