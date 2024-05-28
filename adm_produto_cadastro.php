<?php
    include("./auth/verifica_login_adm.php");
    include("./template/topo.php");
    include("./template/menu_perfil_adm.php");
    include("./connection/connection.php");

    $sql = "SELECT * FROM secoes";
    $rs = $con->query($sql);
?>

<div class="conteudo_centralizado">
    <section class="form_cadastro">
        <div class="card card-cadastro">
            <img src="assets/img/logo.svg" class="form_img">
            <form action="adm_produto_salvar.php" method="post" enctype="multipart/form-data">
                <label class="form_titulo">Descrição</label>
                <input type="text" name="descricao" class="form_campo"/>
                <br/>
                <label class="form_titulo">Seção</label>
                <select name="secao" class="form_campo">
                        <?php
                        while($linha = $rs->fetch_assoc()){
                            echo "<option value='".$linha["idSecao"]."'>".$linha["nomeSecao"]."</option>";
                        }
                    ?>
                </select>
                <br/>
                <label class="form_titulo">Unidade</label>
                <input type="text" name="unidade" class="form_campo"/>
                <br/>
                <label class="form_titulo">Valor</label>
                <input type="text" name="preco" class="form_campo"/>
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