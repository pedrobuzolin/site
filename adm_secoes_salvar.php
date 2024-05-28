<?php
    include("./connection/connection.php");

    $secao = $_POST["secao"];

    $sql = "INSERT INTO secoes (nomeSecao) VALUES('$secao')";
    $rs = $con->query($sql);

    header("location: adm_secoes.php");
?>