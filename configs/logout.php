<?php

    session_start();
    session_destroy();
    echo "<script> window.location = '../app/login-register.php' </script>";

?>