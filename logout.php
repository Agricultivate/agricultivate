<?php
    session_start();
    unset($_SESSION['user-logged-in']);
    session_destroy();
    header("location: login.php?logout=successful");
?>