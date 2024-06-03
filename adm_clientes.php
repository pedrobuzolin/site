<?php
    include("./auth/verifica_login_adm.php");
    include("./template/topo.php");
    include("./template/menu_perfil_adm.php");
    include("./connection/connection.php");
    $sql = "SELECT * FROM clientes";
    $rs = $con->query($sql);
    if(isset($_GET["localizar"])){
        $sql = "SELECT * FROM clientes WHERE Nome LIKE '%{$_GET["localizar"]}%'";
        $rs = $con->query($sql);
    }

?>
<div class="tabela">
    <div class="card card-tabela">
        <div class="tabela_pesquisa">
            <div>
                <form method="GET" action="adm_clientes.php" class="tabela_input">
                    <input type="text" class="tabela_campo" name="localizar" placeholder="Digite até 3 letras para procurar">
                    <input type="submit" class="botao botao-cinza botao-medio" value="Buscar"/>
                </form>
            </div>
        </div>
        <div class="tabela_conteudo">
            <h2 class="titulo2">Listagem de Clientes</h2>
            <table border="1">
                <thead class="tabela_cabecalho">
                    <tr class="tabela_linha">
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Endereço</th>
                        <th>Numero</th>
                        <th>Complemento</th>
                        <th>Celular</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($linha = $rs->fetch_assoc()){
                            echo"<tr class='tabela_linha'>
                                    <td>" . $linha["idCliente"] . "</td>
                                    <td>". $linha["Nome"] . " " . $linha["Sobrenome"] ."</td>
                                    <td>" . $linha["Cpf"] . "</td>
                                    <td>". $linha["Endereco"] ."</td>
                                    <td>" . $linha["Numero"] . "</td>
                                    <td>". $linha["Complemento"] ."</td>
                                    <td>". $linha["Celular"] ."</td>
                                </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>        