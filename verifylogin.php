<?php
    if(isset($_POST['submit-login'])) {
        $servername = "locahost";
        $username = "root";
        $password = "";
        $dbname = "agricultivate";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM login";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Success";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }
?>