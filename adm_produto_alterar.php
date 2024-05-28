<?php
    include("./auth/verifica_login_adm.php");
    include("./template/topo.php");
    include("./template/menu_perfil_adm.php");
    include("./connection/connection.php");

    $id = $_GET["id"];
    $sql = "SELECT * FROM produtos WHERE idProd = $id";
    $sqlImg = "SELECT * FROM imagens WHERE idProd = $id";
    $rs = $con->query($sql);
    $rsImg = $con->query($sqlImg);
    $dados = $rs->fetch_assoc();
    $img = $rsImg->fetch_assoc();
    $idSecao = $dados["secao"];
    $sqlSecao = "SELECT * FROM secoes";
    $rsSecao = $con->query($sqlSecao);

?>

<div class="conteudo_centralizado">
    <section class="form_cadastro">
        <div class="card card-cadastro">
            <img src="assets/img/logo.svg" class="form_img">
            <form action="adm_produto_alterar_salvar.php" method="post" class="form_cadastro" enctype="multipart/form-data">
                <input type="hidden" name="idProd" value="<?php echo $dados["idProd"];?>" class="form_campo"/>
                <br/>
                <label class="form_titulo">Descrição</label>
                <input type="text" name="descricao" value="<?php echo $dados["descricao"];?>" class="form_campo"/>
                <br/>
                <label class="form_titulo">Seção</label>
                <select name="secao" class="form_campo">
                    <?php
                        $sqlSecaoProd = "SELECT * FROM secoes WHERE idSecao = $idSecao";
                        $rsSecaoProd = $con->query($sqlSecaoProd);
                        $dadosSecao = $rsSecaoProd->fetch_assoc();

                        echo"<option value='".$dadosSecao["idSecao"]."'>".$dadosSecao["nomeSecao"]."</option>";
                        while($secao = $rsSecao->fetch_assoc()){
                            echo "<option value='".$secao["idSecao"]."'>".$secao["nomeSecao"]."</option>";
                        }
                    ?>
                    </select>
                <br/>
                <label class="form_titulo">Unidade</label>
                <input type="text" name="unidade" value="<?php echo $dados["unidade"];?>" class="form_campo"/>
                <br/>
                <label class="form_titulo">Valor</label>
                <input type="text" name="preco" value="<?php echo $dados["preco"];?>" class="form_campo"/>
                <br/>
                <label class="form_titulo">Mais Vendidos</label>
                <select name="maisVendido" class="form_campo">
                        <option value="N">Não</option>
                        <option value="S">Sim</option>
                </select>
                <br/>
                <label class="form_titulo">Ofertas do Dia</label>
                <select name="ofertaDia" class="form_campo">
                        <option value="N">Não</option>
                        <option value="S">Sim</option>
                </select>
                </br>
                <label class="form_titulo">Adicione a imagem</label>
                <br/>
                <input type="file" name="imagem" class="form_arquivo"/>
                <br/>
                <input type="submit" value="Salvar" class="botao botao-verde botao-medio"/>
                <br/>
            </form>
            <button class="botao botao-cinza botao-medio"><a href="adm_produtos.php" class="botao botao-cinza botao-medio">Voltar</a></button>
        </div>
    </section>
</div>