<?php

    $server = "localhost";
    $user = "root";
    $pass = "passbase";
    $db = "db_optehub";

    try {
        $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $erro) {
        echo "Erro ao se conectar com o banco de dados {$erro->getMessage()}";
        $conn = null;
    }

?>
