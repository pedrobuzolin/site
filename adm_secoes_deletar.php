<?php
    include("./connection/connection.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM secoes WHERE idSecao=$id";
    $rs = $con->query($sql);

    header("location: adm_secoes.php")

?>