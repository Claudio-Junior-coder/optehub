<?php
    session_start();

    if (isset($_SESSION["user"]) && is_array($_SESSION["user"])) {
        $name = $_SESSION["user"][0];
        

        require("../includes/header.php");
        
        require("../includes/content-dashboard.php");

        require("../includes/footer.php");


    } else {
        echo "<script> window.location = '../app/login-register.php' </script>";
    }
?>
