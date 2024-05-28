<?php
    include("./connection/connection.php");
    include("./template/topo.php");

    if(isset($_POST["idProd"])) {
        $idProduto = $_POST["idProd"];
        adicionarProdutoAoCarrinho($idProduto);
    }
    if(!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }

    function adicionarProdutoAoCarrinho($idProduto) {
        if(isset($_SESSION["carrinho"][$idProduto])) {
            $_SESSION["carrinho"][$idProduto]++;
        } else {
            $_SESSION["carrinho"][$idProduto] = 1;
        }
    }
    
    function atualizarConteudoCarrinho() {
        include("./connection/connection.php");
        $total = 0;
        $indice = 0;
        $conteudo = "
                        <div>
                        <h2 class='titulo2'>Meu Carrinho</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th scope='col' class='tabela_celula_carrinho_cabecalho'>#</th>
                                    <th scope='col' class='tabela_celula_carrinho_cabecalho'>Imagem</th>
                                    <th scope='col' class='tabela_celula_carrinho_cabecalho'>Descrição</th>
                                    <th scope='col' class='tabela_celula_carrinho_cabecalho'>Preço</th>
                                    <th scope='col' class='tabela_celula_carrinho_cabecalho'>Quantidade</th>
                                    <th scope='col' class='tabela_celula_carrinho_cabecalho'>SubTotal</th>
                                </tr>
                            </thead>
                            <tbody>       
                    ";
        foreach($_SESSION["carrinho"] as $idProduto => $quantidade) {
            $sql = "SELECT * FROM produtos WHERE idProd = $idProduto";
            $sqlImg = "SELECT * FROM imagens WHERE idProd = $idProduto";
            $rs = $con->query($sql);
            $rsImg = $con->query($sqlImg);
            $produtos = $rs->fetch_assoc();
            $img = $rsImg->fetch_assoc();
            $subtotal = $quantidade * $produtos["preco"];
            $total = $total + $subtotal;
            $indice +=1;
            $conteudo .= "
                                <tr carrinho_conteudo>
                                    <td class='tabela_celula_carrinho_conteudo_indice'>".$indice."</td>
                                    <td class='tabela_celula_carrinho_conteudo'><img src ='assets/img_prod/". $img["nome"] ."' class='carrinho_img'></td>
                                    <td class='tabela_celula_carrinho_conteudo'>" .$produtos["descricao"]."</td>
                                    <td class='tabela_celula_carrinho_conteudo'>R$ " .number_format($produtos["preco"], 2, ",", ".") . "</td>
                                    <td class='tabela_celula_carrinho_conteudo'>
                                        <div>
                                            <a href='carrinho_remover.php?remover=carrinho&id=" .$idProduto . "' class='carrinho_link'>-</a>
                                            <input type='text' name='quantidade' value ='".$quantidade ."' class='carrinho_campo'/>
                                            <a href='carrinho_adicionar.php?adicionar=carrinho&id=" .$idProduto . "' class='carrinho_link'>+</a>
                                        </div>
                                    </td>
                                    <td class='tabela_celula_carrinho_conteudo'>R$ " .number_format($subtotal, 2, ",", ".") . "</td>
                                </tr>
                            ";
        }
            $conteudo .= "
                                </tbody>
                                <tfoot>
                                        <tr>
                                            <th scope='row' colspan='5'>TOTAL: </th>
                                            <td>R$ " .number_format($total, 2, ",", ".") . "</td>
                                        </tr>
                                </tfoot>
                                </table>
                                </div>
                                <div class='carrinho_botoes-finalizar'>
                                    <a href='carrinho_finalizar.php' class='botao botao-carrinho botao-verde'>Finalizar Compra</a>
                                </div>
                                ";
        return $conteudo;
    }

?>
<div class="conteudo-carrinho">
    <div class="carrinho">
        <div class="card card-carrinho">
            <?php
                if(count($_SESSION["carrinho"]) == 0){
                    echo "
                    <div class='carrinho_vazio'>
                        <img src='./assets/img/carrinho_vazio.png' alt='carrinho vazio' class='img_carrinho_vazio'>
                        <h3 class='texto_carrinho_vazio'>Carrinho Vazio</h3>
                    </div>";
                }
                else{
                    echo atualizarConteudoCarrinho();
                }
            ?>
            <div class='carrinho_botoes'>
                <a href='index.php' class='botao botao-carrinho botao-verde'>Adicionar produtos</a>
            </div>
        </div>
    </div>
</div>
<?php
    include("./template/rodape.php");
?>