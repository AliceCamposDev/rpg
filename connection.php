<?php
    $servername = "localhost";
    $username = "root";
    $password = "@senha1";
    $dbname = "rpg";

    $con = new mysqli($servername, $username, $password, $dbname);

    if($con->connect_error) {   
        die("Erro de conexão: " . $con->connect_error);
    }
?>