<?php
    include("./connection/connection.php");

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sqlLogin = "INSERT INTO login_usr (email, senha) VALUES('$email', '$senha')";
    $con->query($sqlLogin);

    $idLogin = $con->insert_id;

    $sqlCliente = "INSERT INTO clientes (Nome, Sobrenome, Cpf, Endereco, Numero, Complemento, Celular, idLogin)
                    VALUES('$nome', '$sobrenome', '$cpf', '$endereco', '$numero', '$complemento', '$celular', $idLogin)";
    $con->query($sqlCliente);

    header("location: login.php");
?>