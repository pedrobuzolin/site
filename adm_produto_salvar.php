<?php
    include("./connection/connection.php");

    $descricao = $_POST["descricao"];
    $unidade = $_POST["unidade"];
    $secao = $_POST["secao"];
    $preco = $_POST["preco"];
    $maisVendido = $_POST["maisVendido"];
    $ofertaDia = $_POST["ofertaDia"];

    $sql = "INSERT INTO produtos (descricao, unidade, secao, preco, maisVendidos, ofertaDia)
            VALUES ('$descricao', '$unidade', '$secao', '$preco', '$maisVendido', '$ofertaDia')
            ";

    $rs = $con->query($sql);

    $idProd = $con->insert_id;

    if(isset($_FILES["imagem"])){
        $extensao = strtolower(substr($_FILES["imagem"]["name"], -4));

        $novo_nome = md5(time()) . $extensao;
        $caminho = "./assets/img_prod/"; 

        move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho.$novo_nome);

        $sqlImg = "INSERT INTO imagens (idProd, nome, dataImg)
                        VALUES('$idProd', '$novo_nome', NOW())";

        $rs = $con->query($sqlImg);
    }

    header("location: adm_produtos.php");
?>