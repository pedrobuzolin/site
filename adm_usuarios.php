<?php
    include("./auth/verifica_login_adm.php");
    include("./template/topo.php");
    include("./template/menu_perfil_adm.php");
    include("./connection/connection.php");
    $sql = "SELECT * FROM login_adm";
    $rs = $con->query($sql);
    if(isset($_GET["localizar"])){
        $sql = "SELECT * FROM login_adm WHERE usuario LIKE '%{$_GET["localizar"]}%'";
        $rs = $con->query($sql);
    }

?>
<div class="tabela">
    <div class="card card-tabela">
        <div class="tabela_pesquisa">
            <div>
                <form method="GET" action="adm_usuarios.php" class="tabela_input">
                    <input type="text" class="tabela_campo" name="localizar" placeholder="Digite até 3 letras para procurar">
                    <input type="submit" class="botao botao-cinza botao-medio" value="Buscar"/>
                </form>
            </div>
            <a href="adm_usuario_cadastrar.php" class="botao botao-verde botao-medio">NOVO</a>    
        </div>
        <div class="tabela_conteudo">
            <h2 class="titulo2">Listagem de Usuários</h2>
            <table border="1">
                <thead class="tabela_cabecalho">
                    <tr class="tabela_linha">
                        <th>ID</th>
                        <th>Usuário</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($linha = $rs->fetch_assoc()){
                            echo"<tr class='tabela_linha'>
                                    <td>" . $linha["idAdm"] . "</td>
                                    <td>". $linha["usuario"] ."</td>
                                    <td>
                                        <a href='adm_usuario_alterar.php?id=" . $linha["idAdm"] . "' ' class='tabela_link''>✏️</a>
                                        <a href='adm_usuario_deletar.php?id=" . $linha["idAdm"] . "' class='tabela_link''>🗑️</a>
                                    </td>
                                </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>        