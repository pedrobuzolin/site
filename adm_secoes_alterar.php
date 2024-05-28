<?php
    include("./auth/verifica_login_adm.php");
    include("./template/topo.php");
    include("./template/menu_perfil_adm.php");
    include("./connection/connection.php");

    $id = $_GET["id"];
    $sql = "SELECT * FROM secoes WHERE idSecao = $id";
    $rs = $con->query($sql);
    $dados = $rs->fetch_assoc();
?>

<div class="conteudo_centralizado">
    <section class="form_cadastro">
        <div class="card card-cadastro">
            <img src="assets/img/logo.svg" class="form_img">
            <form action="adm_secoes_alterar_salvar.php" method="post" class="form_cadastro" enctype="multipart/form-data">
                <input type="hidden" name="idSecao" value="<?php echo $dados["idSecao"];?>"/>
                <label class="form_titulo">Seção</label>
                <input type="text" name="secao" value="<?php echo $dados["nomeSecao"];?>" class="form_campo"/>
                <br/>
                <input type="submit" value="Salvar" class="botao botao-verde botao-medio"/>
                <br/>
            </form>
            <button class="botao botao-cinza botao-medio"><a href="adm_secoes.php" class="botao botao-cinza botao-medio">Voltar</a></button>
        </div>
    </section>
</div>