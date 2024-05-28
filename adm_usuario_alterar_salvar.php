<?php
    include("./connection/connection.php");

    $id = $_POST["id"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT COUNT(1) as total FROM login_adm WHERE idAdm = $id";
    $rs = $con->query($sql);
    $total = $rs->fetch_assoc();

    if($total["total"] == 0){
        echo "id não existe";
        exit;
    }

    $sql = "UPDATE login_adm
                SET usuario = '$usuario',
                    senha = '$senha'
                WHERE idAdm = $id";
    $con->query($sql);

    header("location: adm_usuarios.php");
?>