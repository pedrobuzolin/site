<?php
    include("./connection/connection.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM produtos WHERE idProd=$id";
    $sqlImg = "DELETE FROM imagens WHERE idProd=$id";

    $rsImg = $con->query($sqlImg);
    $rs = $con->query($sql);


    header("location: adm_produtos.php")

?>