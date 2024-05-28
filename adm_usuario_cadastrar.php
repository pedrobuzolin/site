<?php
        include("./auth/verifica_login_adm.php");
        include("./template/topo.php");
        include("./template/menu_perfil_adm.php");
?>

<div class="conteudo_centralizado">
    <section class="form_cadastro">
        <div class="card card-login">
            <img src="assets/img/logo.svg" class="form_img">
            <form action="adm_usuario_salvar.php" method="post">
                <label class="form_titulo">Usuário</label>
                <input type="text" name="usuario" class="form_campo"/>
                <br/>
                <label class="form_titulo">Senha</label>
                <input type="password" name="senha" class="form_campo"/>
                <br/>
                <input type="submit" value="Cadastrar" class="botao botao-verde botao-medio"/>
                <br/>
            </form>
            <button class="botao botao-cinza botao-medio"><a href="adm_usuarios.php" class="botao botao-cinza botao-medio">Voltar</a></button>
        </div>
    </section>
</div>