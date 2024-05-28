<?php
    include("./auth/verifica_login_adm.php");
    include("./template/topo.php");
    include("./template/menu_perfil_adm.php");
    include("./connection/connection.php");
    $sql = "SELECT * FROM secoes";
    $rs = $con->query($sql);
    if(isset($_GET["localizar"])){
        $sql = "SELECT * FROM secoes WHERE nomeSecao LIKE '%{$_GET["localizar"]}%'";
        $rs = $con->query($sql);
    }

?>
<div class="tabela">
    <div class="card card-tabela">
        <div class="tabela_pesquisa">
            <div>
                <form method="GET" action="adm_secoes.php" class="tabela_input">
                    <input type="text" class="tabela_campo" name="localizar" placeholder="Digite até 3 letras para procurar">
                    <input type="submit" class="botao botao-cinza botao-medio" value="Buscar"/>
                </form>
            </div>
            <a href="adm_secoes_cadastrar.php" class="botao botao-verde botao-medio">NOVO</a>    
        </div>
        <div class="tabela_conteudo">
            <h2 class="titulo2">Listagem de Seções</h2>
            <table border="1">
                <thead class="tabela_cabecalho">
                    <tr class="tabela_linha">
                        <th>ID</th>
                        <th>Seção</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($linha = $rs->fetch_assoc()){
                            echo"<tr class='tabela_linha'>
                                    <td>" . $linha["idSecao"] . "</td>
                                    <td>". $linha["nomeSecao"] ."</td>
                                    <td>
                                        <a href='adm_secoes_alterar.php?id=" . $linha["idSecao"] . "' ' class='tabela_link''>✏️</a>
                                        <a href='adm_secoes_deletar.php?id=" . $linha["idSecao"] . "' class='tabela_link''>🗑️</a>
                                    </td>
                                </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>        