<?php
    include("./auth/verifica_login_adm.php");
    include("./template/topo.php");
    include("./template/menu_perfil_adm.php");
    include("./connection/connection.php");
    $sql = "SELECT * FROM produtos";
    $rs = $con->query($sql);
    if(isset($_GET["pesquisa"]) && $_GET["pesquisa"] == "id"){
        if(isset($_GET["localizar"])){
            $sql = "SELECT * FROM produtos WHERE idProd LIKE '%{$_GET["localizar"]}%'";
            $rs = $con->query($sql);
        }
    }
    if(isset($_GET["pesquisa"]) && $_GET["pesquisa"] == "descricao"){
        if(isset($_GET["localizar"])){
            $sql = "SELECT * FROM produtos WHERE descricao LIKE '%{$_GET["localizar"]}%'";
            $rs = $con->query($sql);
        }
    }
    if(isset($_GET["pesquisa"]) && $_GET["pesquisa"] == "secao"){
        if(isset($_GET["localizar"])){
            $sqlSecao = "SELECT * FROM secoes WHERE nomeSecao LIKE '%{$_GET["localizar"]}%'";
            $rsSecao = $con->query($sqlSecao);
            $dadosSecao = $rsSecao->fetch_assoc();
            $idSecao = $dadosSecao["idSecao"];
            $sql = "SELECT * FROM produtos WHERE secao = $idSecao";
            $rs = $con->query($sql);
        }
    }
    if(isset($_GET["pesquisa"]) && $_GET["pesquisa"] == "ofertaDia"){
        if(isset($_GET["localizar"])){
            $sql = "SELECT * FROM produtos WHERE ofertaDia LIKE '%{$_GET["localizar"]}%'";
            $rs = $con->query($sql);
        }
    }
    if(isset($_GET["pesquisa"]) && $_GET["pesquisa"] == "maisVendidos"){
        if(isset($_GET["localizar"])){
            $sql = "SELECT * FROM produtos WHERE maisVendidos LIKE '%{$_GET["localizar"]}%'";
            $rs = $con->query($sql);
        }
    }
?>
<div class="tabela">
    <div class="card card-tabela">
        <div class="tabela_pesquisa">
            <div class="tabela_input">
                <form method="GET" action="adm_produtos.php">
                    <fildeset>
                        <legend>Escolha uma opção de pesquisa</legend>
                        <input type="radio" name="pesquisa" value="id"/>
                        ID 
                        <input type="radio" name="pesquisa" value="descricao"/>
                        Descrição                
                        <input type="radio" name="pesquisa" value="secao"/>
                        Seção                        
                        <input type="radio" name="pesquisa" value="ofertaDia"/>
                        Oferta do Dia
                        <input type="radio" name="pesquisa" value="maisVendidos"/>
                        Mais Vendidos
                    </fieldset>
                    <br><input type="text" class="tabela_campo" name="localizar" placeholder="Digite até 3 letras para procurar">
                    <input type="submit" class="botao botao-cinza botao-medio" value="Buscar"/>
                </form>
            </div>
            <a href="adm_produto_cadastro.php" class="botao botao-verde botao-medio">NOVO</a>    
        </div>
        <div class="tabela_conteudo">
            <h2 class="titulo2">Listagem de Produtos</h2>
            <table>
                <thead class="tabela_cabecalho">
                    <tr class="tabela_linha">
                        <th scope="col">ID</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Unidade</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Seção</th>
                        <th scope="col">Oferta do Dia</th>
                        <th scope="col">Mais Vendido</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($linha = $rs->fetch_assoc()){
                            $idSecao = $linha["secao"];
                            $sqlSecao = "SELECT * FROM secoes WHERE idSecao = $idSecao";
                            $rsSecao = $con->query($sqlSecao);
                            while($secao = $rsSecao->fetch_assoc()){
                                echo"<tr>
                                        <td>" . $linha["idProd"] . "</td>
                                        <td>". $linha["descricao"] ."</td>
                                        <td>" . $linha["unidade"] . "</td>
                                        <td>". number_format($linha["preco"], 2, ",", ".") ."</td>
                                        <td>" . $secao["nomeSecao"] . "</td>
                                        <td>". $linha["ofertaDia"] ."</td>
                                        <td>" . $linha["maisVendidos"] . "</td>
                                        <td>
                                            <a href='adm_produto_alterar.php?id=" . $linha["idProd"] . "' class='tabela_link''>✏️</a>
                                            <a href='adm_produto_deletar.php?id=" . $linha["idProd"] . "' class='tabela_link''>🗑️</a>
                                        </td>
                                    </tr>";
                            } 
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>        