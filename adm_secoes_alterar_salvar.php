<?php
    include("./connection/connection.php");
    $id = $_POST["idSecao"]; 
    $nomeSecao = $_POST["secao"];

    $sql = "SELECT COUNT(1) as total FROM secoes WHERE idSecao=$id";
    $rs = $con->query($sql);
    $total = $rs->fetch_assoc();

    if($total["total"] == 0){
        echo "id não existe";
        exit;
    }

    $sql = "UPDATE secoes 
                SET nomeSecao = '$nomeSecao' 
                WHERE idSecao = $id";

    $con->query($sql);

    header("location: adm_secoes.php");
?>