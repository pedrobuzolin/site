<?php
    include("./auth/verifica_login_adm.php");
    include("./template/topo.php");
    include("./template/menu_perfil_adm.php");
    include("./connection/connection.php");
    $sql = "SELECT * FROM vendas";
    $rs = $con->query($sql);
    if(isset($_GET["pesquisa"]) && $_GET["pesquisa"] == "cdVenda"){
        if(isset($_GET["localizar"])){
            $sql = "SELECT * FROM vendas WHERE cod_Venda LIKE '%{$_GET["localizar"]}%'";
            $rs = $con->query($sql);
        }
    }
    if(isset($_GET["pesquisa"]) && $_GET["pesquisa"] == "nomeCliente"){
        if(isset($_GET["localizar"])){
            $sqlCliente = "SELECT * FROM clientes WHERE nome LIKE '%{$_GET["localizar"]}%'";
            $rsCliente = $con->query($sqlCliente);
            $dados = $rsCliente->fetch_assoc();
            $idCliente = $dados["idCliente"];
            $sql = "SELECT * FROM vendas WHERE idCliente = $idCliente";
            $rs = $con->query($sql);
        }
    }
    if(isset($_GET["pesquisa"]) && $_GET["pesquisa"] == "data"){
        if(isset($_GET["localizar"])){
            $sql = "SELECT * FROM vendas WHERE data_Venda LIKE '%{$_GET["localizar"]}%'";
            $rs = $con->query($sql);
        }
    }
    if(isset($_GET["pesquisa"]) && $_GET["pesquisa"] == "pagamento"){
        if(isset($_GET["localizar"])){
            $sql = "SELECT * FROM vendas WHERE pagamento LIKE '%{$_GET["localizar"]}%'";
            $rs = $con->query($sql);
        }
    }
    if(isset($_GET["pesquisa"]) && $_GET["pesquisa"] == "entrega"){
        if(isset($_GET["localizar"])){
            $sql = "SELECT * FROM vendas WHERE entrega LIKE '%{$_GET["localizar"]}%'";
            $rs = $con->query($sql);
        }
    }

?>
<div class="tabela">
    <div class="card card-tabela">
        <div class="tabela_pesquisa">
            <div>
                <form method="GET" action="adm_vendas.php" class="tabela_input">
                    <fildeset>
                        <legend>Escolha uma opção de pesquisa</legend>
                        <input type="radio" name="pesquisa" value="cdVenda"/>
                        Codigo Venda 
                        <input type="radio" name="pesquisa" value="nomeCliente"/>
                        Nome Cliente                
                        <input type="radio" name="pesquisa" value="data"/>
                        Data                        
                        <input type="radio" name="pesquisa" value="pagamento"/>
                        Pagamento
                        <input type="radio" name="pesquisa" value="entrega"/>
                        Entrega
                    </fieldset>
                    <br><input type="text" class="tabela_campo" name="localizar" placeholder="Digite até 3 letras para procurar">
                    <input type="submit" class="botao botao-cinza botao-medio" value="Buscar"/>
                </form>
            </div>   
        </div>
        <div class="tabela_conteudo">
            <h2 class="titulo2">Listagem de Vendas</h2>
            <table>
                <thead class="tabela_cabecalho">
                    <tr class="tabela_linha">
                        <th scope="col">Código Venda</th>
                        <th scope="col">Nome Cliente</th>
                        <th scope="col">Data</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Pagamento</th>
                        <th scope="col">Entrega</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($linha = $rs->fetch_assoc()){
                            $idCliente = $linha["idCliente"];
                            $sqlCliente = "SELECT nome, sobrenome FROM clientes WHERE idCliente = $idCliente";
                            $rsCliente = $con->query($sqlCliente);
                            $idVenda = $linha["cod_Venda"];
                            $sqlProdutos = "SELECT * FROM itens_venda WHERE idVenda = $idVenda";
                            $rsProd = $con->query($sqlProdutos);
                            while($cliente = $rsCliente->fetch_assoc()){
                                echo"<tr>
                                        <td>" . $idVenda . "</td>
                                        <td>". $cliente["nome"] . " " . $cliente["sobrenome"]."</td>
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
                                            <tr class='venda$idVenda' style='display: none;'>
                                                <td>" . $produto["descricao"] . "</td>
                                                <td>". $dadosProd["quantidade"] ."</td>
                                                <td>". number_format($dadosProd["valor_Prod"], 2, ",", ".") ."</td>
                                            </tr>";
                                }
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
            var produtos = document.querySelectorAll('.venda' + idVenda);

            produtos.forEach(function(produto) {
                produto.style.display = produto.style.display === 'none' ? 'table-row' : 'none';
            });
        });
    });
</script>