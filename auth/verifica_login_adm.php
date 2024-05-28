<?php
    if(!isset($_SESSION)){
        session_start();
    }
    
    if(!isset($_SESSION["login"]["usuario"])){
        header("location: login_adm.php");
        exit;
    }
?>