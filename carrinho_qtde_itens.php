<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(isset($_SESSION["carrinho"])){
        echo count($_SESSION["carrinho"]);
    }
    else{
        echo "0";
    }
?>
