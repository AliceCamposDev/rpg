<?php
    session_start();
    require_once("connection.php");
    
    if(empty($_POST["loginName"]) || empty($_POST["senha"])) {
        header('Location: index.php');
        exit();
    }

    $loginName = $con->real_escape_string($_POST["loginName"]);
    $senha = $_POST["senha"];

    $query = "SELECT * from perfil where nome = '$loginName' and senha = '$senha'";

    echo($loginName);
    echo($senha);
    $result = $con->query($query);

    if($result->num_rows > 0){
        $dados_usuario = $result->fetch_assoc();
        $_SESSION["loginName"] = $dados_usuario["loginName"];
        $_SESSION["senha"] = $dados_usuario["senha"];
        $_SESSION["autenticado"] = true;
        print_r($_SESSION);
        header('Location: ficha.php');
    }else{
        $_SESSION["autenticado"] = false;
        header('Location: loginSite.php');
    }
?>