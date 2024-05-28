<?php
        include("./auth/verifica_login_adm.php");
        include("./template/topo.php");
        include("./template/menu_perfil_adm.php");
?>

<div class="conteudo_centralizado">
    <section class="form_cadastro">
        <div class="card card-cadastro">
            <img src="assets/img/logo.svg" class="form_img">
            <form action="adm_secoes_salvar.php" method="post" class="form_cadastro">
                <label class="form_titulo">Seção</label>
                <input type="text" name="secao" class="form_campo"/>
                <br/>
                <input type="submit" value="Salvar" class="botao botao-verde botao-medio"/>
                <br/>
            </form>
            <button class="botao botao-cinza botao-medio"><a href="adm_secoes.php" class="botao botao-cinza botao-medio">Voltar</a></button>
        </div>
    </section>
</div>