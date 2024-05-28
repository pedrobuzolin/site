<?php
    include("./connection/connection.php");

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO login_adm (usuario, senha) VALUES('$usuario', '$senha')";
    $rs = $con->query($sql);

    header("location: adm_usuarios.php");
?>