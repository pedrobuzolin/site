<?php
    include("../connection/connection.php");
    if(!isset($_SESSION)){
        session_start();
    }

    $email = isset($_POST["email"]) ? addslashes(trim($_POST["email"])) : FALSE;
    $senha = isset($_POST["senha"]) ? addslashes(trim($_POST["senha"])) : FALSE;

    $sql = "SELECT COUNT(1) as total FROM login_usr WHERE email = '$email'";
    $rs = $con->query($sql);
    $total = $rs->fetch_assoc();


    if($total["total"]){
        $sql = "SELECT * FROM login_usr WHERE email = '$email'";
        $rs = $con->query($sql);
        $dados = $rs->fetch_assoc();
        if(!strcmp($senha, $dados["senha"])){
            $_SESSION["login"]["id"] = $dados["idUsuario"];
            $_SESSION["login"]["email"] = $dados["email"];
            if(isset($_SESSION["pagina_destino"])){

                header("location:" . $_SESSION["pagina_destino"]);
            }
            else{
                header("location: ../login_meuperfil.php");
            }
            exit;
        }
        else{
            header("location: ../login_falha.php");
            exit;
        }
    }
    else{
        header("location: ../login_falha.php");
        exit;
    }
?>