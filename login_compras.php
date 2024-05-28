<?php
    include("./auth/verifica_login.php");
    include("./template/topo.php");
    include("./template/menu_perfil_cliente.php");
    include("./connection/connection.php");

    $id = $_SESSION["login"]["id"];
    $sql = "SELECT * FROM vendas WHERE idCliente = $id";
    $rs = $con->query($sql);
?>
    <div class="tabela">
        <div class="card card-tabela">
            <div class="tabela_conteudo">
                <h2 class="titulo2">Listagem de Compras</h2>
                <table>
                    <thead class="tabela_cabecalho">
                        <tr class="tabela_linha">
                            <th scope="col">Código Venda</th>
                            <th scope="col">Data</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Pagamento</th>
                            <th scope="col">Entrega</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($linha = $rs->fetch_assoc()){
                                $idVenda = $linha["cod_Venda"];
                                $sqlProdutos = "SELECT * FROM itens_venda WHERE idVenda = $idVenda";
                                $rsProd = $con->query($sqlProdutos);
                                echo"<tr>
                                <td>" . $idVenda . "</td>
                                <td>" . date("d/m/Y", strtotime($linha["data_Venda"])) . "</td>
                                <td>". number_format($linha["valor_Total"], 2, ",", ".") ."</td>
                                <td>" . $linha["pagamento"] . "</td>
                                <td>". $linha["entrega"] ."</td>
                                <td>
                                    <button class='botao_mais' data-id='$idVenda'>+</button>
                                </td>
                                </tr>
                                <tr class='compra$idVenda' style='display: none;'>
                                    <th>Descrição</th>
                                    <th>Quantidade</th>
                                    <th>Valor</th>  
                                </tr>";
                                while($dadosProd = $rsProd->fetch_assoc()){
                                    $idProd = $dadosProd["idProd"];
                                    $sqlProd = "SELECT * FROM produtos WHERE idProd = $idProd";
                                    $rsP = $con->query($sqlProd);
                                    $produto = $rsP->fetch_assoc();
                                    echo"
                                        <tr class='compra$idVenda' style='display: none;'>
                                            <td>" . $produto["descricao"] . "</td>
                                            <td>". $dadosProd["quantidade"] ."</td>
                                            <td>". number_format($dadosProd["valor_Prod"], 2, ",", ".") ."</td>
                                        </tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script>
    var botao_mais = document.querySelectorAll('.botao_mais');
    botao_mais.forEach(function(button) {
        button.addEventListener('click', function() {
            var idVenda = this.getAttribute('data-id');
            var produtos = document.querySelectorAll('.compra' + idVenda);

            produtos.forEach(function(produto) {
                produto.style.display = produto.style.display === 'none' ? 'table-row' : 'none';
            });
        });
    });
</script>