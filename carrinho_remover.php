<?php
    session_start();
    $idProduto = $_GET["id"];
    if(isset($_GET["remover"]) && $_GET["remover"] == "carrinho"){
        $idProduto = $_GET["id"];
        if(isset($_SESSION["carrinho"][$idProduto]) && $_SESSION["carrinho"][$idProduto] > 0){
            $_SESSION["carrinho"][$idProduto] -= 1;
        }
        if($_SESSION["carrinho"][$idProduto] == 0){
            unset($_SESSION["carrinho"][$idProduto]);
        }
        header("location: carrinho.php");  
    }
?>