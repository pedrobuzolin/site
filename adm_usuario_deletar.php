<?php
    include("./connection/connection.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM login_adm WHERE idAdm = $id";
    $con->query($sql);

    header("location: adm_usuarios.php");
?>