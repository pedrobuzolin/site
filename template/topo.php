<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadinho</title>
    <link rel="shortcut icon" href="./assets/img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jua&family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script assync src="./js/carrinho.js"></script>
</head>
<body>
    <header class="cabecalho">
        <nav class="cabecalho__menu">
            <input type="checkbox" id="menu" class="cabecalho-dropdown">
            <label for="menu" class="menu_hamburguer_label">
                <span class="cabecalho__menu-hamburguer cabecalho__imagem" ></span>
            </label>
            <ul class="menu-secoes">
                <li class="menu-secoes_titulo">Seções</li>
                <li class="menu-secoes_item">
                    <img src="assets/img/bebidas-preto.svg" alt="Icone bebidas" class="menu-secoes_img">
                    <a href="bebidas.php" class="menu_link">Bebidas</a>
                </li>
                <li class="menu-secoes_item">
                    <img src="assets/img/carnes-preto.svg" alt="Icone carnes" class="menu-secoes_img">
                    <a href="carnes.php" class="menu_link">Carnes</a>
                </li>
                <li class="menu-secoes_item">
                    <img src="assets/img/doces-preto.svg" alt="Icone doces" class="menu-secoes_img">
                    <a href="doces.php" class="menu_link">Doces</a>
                </li>
                <li class="menu-secoes_item">
                    <img src="assets/img/graos-preto.svg" alt="Icone graos" class="menu-secoes_img">
                    <a href="graos.php" class="menu_link">Grãos</a>
                </li>
                <li class="menu-secoes_item">
                    <img src="assets/img/hortifruti-preto.svg" alt="Icone hortifruti" class="menu-secoes_img">
                    <a href="hortifruti.php" class="menu_link">HortiFruti</a>
                </li>
                <li class="menu-secoes_item">
                    <img src="assets/img/limpeza-preto.svg" alt="Icone limpeza" class="menu-secoes_img">
                    <a href="limpeza.php" class="menu_link">Limpeza</a>
                </li>
            </ul>
            <a href="index.php" class="cabecalho__atalhos-link"><img src="assets/img/logo.svg" alt="Logo Mercadinho"></a>
            <h1 class="cabecalho__titulo">Mercadinho</h1>
        </nav>
        <nav class="cabecalho__atalhos"> 
            <div class="cabecalho_carrinho">
                <a href="carrinho.php" class="cabecalho__atalhos-link"><img src="assets/img/cesta.svg" alt="Minha Cesta" class="cabecalho__atalhos_imagem"><h2 class="cabecalho__atalhos-titulo">Carrinho</h2></a>
                <span id="carrinho_itens" class="cabecalho_carrinho_itens">0</span>
            </div>
            <a href="login_meuperfil.php" class="cabecalho__atalhos-link"><img src="assets/img/perfil.svg" alt="Meu Perfil" class="cabecalho__atalhos_imagem"><h2 class="cabecalho__atalhos-titulo">Meu Perfil</h2></a>  
        </nav>
    </header>