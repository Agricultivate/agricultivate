<?php
    session_start();
    if(isset($_POST['submit-login'])) {
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

        $sql = "SELECT username, password FROM login";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if($row['username'] == $_POST['username-login'] 
                && $row['password'] == $_POST['password-login']) {
                    header("location: homepage.php?login=successful");
                    $_SESSION['user-logged-in'] = true;
                }
            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
    }
?>