<?php
    session_start();

    if (isset($_SESSION["user"]) && is_array($_SESSION["user"])) {
        $name = $_SESSION["user"][0];

        echo "<a href='../configs/logout.php'> Logout </a>";

    } else {
        echo "<script> window.location = '../app/login-register.php' </script>";
    }
?>
