<?php
    include("./connection/connection.php");

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sqlLogin = "UPDATE login_usr 
                    SET email = '$email', 
                        senha = '$senha' 
                    WHERE idUsuario = $id";
    $con->query($sqlLogin);

    $sqlCliente = "UPDATE clientes 
                        SET Nome = '$nome',
                            Sobrenome = '$sobrenome',
                            Cpf = '$cpf',
                            Endereco = '$endereco',
                            Numero = '$numero',
                            Complemento = '$complemento',
                            Celular = '$celular'
                        WHERE idLogin = $id";
    $con->query($sqlCliente);

    header("location: login_meusdados.php");
?>