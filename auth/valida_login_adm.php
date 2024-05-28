<?php
    include("../connection/connection.php");
    session_start();

    $usuario = isset($_POST["usuario"]) ? addslashes(trim($_POST["usuario"])) : FALSE;
    $senha = isset($_POST["senha"]) ? addslashes(trim($_POST["senha"])) : FALSE;

    $sql = "SELECT COUNT(1) as total FROM login_adm WHERE usuario = '$usuario'";
    $rs = $con->query($sql);
    $total = $rs->fetch_assoc();


    if($total["total"]){
        $sql = "SELECT * FROM login_adm WHERE usuario = '$usuario'";
        $rs = $con->query($sql);
        $dados = $rs->fetch_assoc();
        if(!strcmp($senha, $dados["senha"])){
            $_SESSION["login"]["id"] = $dados["idAdm"];
            $_SESSION["login"]["usuario"] = $dados["usuario"];
            header("location: ../login_perfil_adm.php");
            exit;
        }
        else{
            header("location: ../login_falha_adm.php");
            exit;
        }
    }
    else{
        header("location: ../login_falha_adm.php");
        exit;
    }
?>