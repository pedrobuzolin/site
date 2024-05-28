<?php
    include("./connection/connection.php");
    include("./template/topo.php");
    
    $total = 0;
    $pagamento = $_POST["pagamento"];
    $entrega = $_POST["entregar"];
    $id_cliente = $_SESSION["login"]["id"];

    foreach($_SESSION["carrinho"] as $idProduto => $quantidade){
        $sql = "SELECT * FROM produtos WHERE idProd = $idProduto";
        $rs = $con->query($sql);
        $produtos = $rs->fetch_assoc();
        $subtotal = $quantidade * $produtos["preco"];
        $total = $total + $subtotal;
    }

    $sql = "INSERT INTO vendas (idCliente, data_Venda, valor_Total, pagamento, entrega) VALUES($id_cliente, NOW(), $total, '$pagamento', '$entrega')";
    $rs = $con->query($sql);

    $idVenda = $con->insert_id;

    foreach($_SESSION["carrinho"] as $idProduto => $quantidade){
        $sql = "SELECT * FROM produtos WHERE idProd = $idProduto";
        $rs = $con->query($sql);
        $produtos = $rs->fetch_assoc();
        $sqlAdd = "INSERT INTO itens_venda (idProd, idVenda, valor_Prod, quantidade) 
                    VALUES(".$produtos["idProd"].", $idVenda,".$produtos["preco"].", $quantidade)";
        $rsAdd = $con->query($sqlAdd);
        unset($_SESSION["carrinho"][$idProduto]);
    }
?>

<div class="conteudo_centralizado">
    <div class="card card-compra-finalizada">
            <img src="assets/img/logo.svg" class="form_img">
            <h3 class="titulo3">Compra finalizada com sucesso!</h3>
        <div>
            <a href="index.php" class="botao botao-verde botao-medio">
                Voltar para o início
            </a>
        </div>
    </div>
</div> 

<?php
    include("./template/rodape.php");
?>