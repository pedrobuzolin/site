<?php
    if(!isset($_SESSION)){
        session_start();
    }
    
    if(!isset($_SESSION["login"]["email"])){
        $_SESSION["pagina_destino"] = $_SERVER["REQUEST_URI"];
        header("location: login.php");
    }
?>