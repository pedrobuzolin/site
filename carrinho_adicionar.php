<?php
    session_start();
    $idProduto = $_GET["id"];
    if(isset($_GET["adicionar"]) && $_GET["adicionar"] == "carrinho"){
        $idProduto = $_GET["id"];
        if(isset($_SESSION["carrinho"][$idProduto]) && $_SESSION["carrinho"][$idProduto] > 0){
            $_SESSION["carrinho"][$idProduto] += 1;
        }
        header("location: carrinho.php");
    }
?>