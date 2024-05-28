<?php
    include("./connection/connection.php");
    $id = $_POST["idProd"];
    $descricao = $_POST["descricao"];
    $unidade = $_POST["unidade"];
    $secao = $_POST["secao"];
    $preco = $_POST["preco"];
    $maisVendido = $_POST["maisVendido"];
    $ofertaDia = $_POST["ofertaDia"];

    $sql = "SELECT COUNT(1) as total FROM produtos WHERE idProd=$id";
    $rs = $con->query($sql);
    $total = $rs->fetch_assoc();

    if($total["total"] == 0){
        echo "id não existe";
        exit;
    }

    $sql = "UPDATE produtos 
                SET descricao = '$descricao', 
                    unidade = '$unidade',
                    secao = '$secao',
                    preco = '$preco',
                    maisVendidos = '$maisVendido',
                    ofertaDia = '$ofertaDia'
                WHERE idProd = $id";

    $con->query($sql);

    $idProd = $con->insert_id;

    if(isset($_FILES["imagem"])){
        $extensao = strtolower(substr($_FILES["imagem"]["name"], -4));

        $novo_nome = md5(time()) . $extensao;
        $caminho = "C:/xampp/htdocs/site/assets/img_prod/"; 

        move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho.$novo_nome);

        $sqlImg = "UPDATE imagens 
                    SET idProd = '$id',
                        nome = '$novo_nome',
                        dataImg = NOW()
                        WHERE idProd = '$id'";
        $rs = $con->query($sqlImg);
    }

    header("location: adm_produtos.php");
?>