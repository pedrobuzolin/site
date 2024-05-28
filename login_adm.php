<?php
    include("./template/topo.php");
?>
<div class="conteudo_centralizado">
    <section class="form_login">
        <div class="card card-login">
            <img src="assets/img/logo.svg" class="form_img">
            <h4>Administrador</h4>
            <br/>
            <form action="./auth/valida_login_adm.php" method="post" class="login__form">
                <label class="form_titulo">Usuário</label>
                <input type="text" name="usuario" class="form_campo"/>
                <br/>
                <label class="form_titulo">Senha</label>
                <input type="password" name="senha" class="form_campo"/>
                <br/>
                <input type="submit" value="Entrar" class="botao botao-verde botao-medio"/>
                <br/>
            </form>
        </div>
    </section>
</div>
<?php
    include("./template/rodape.php");
?>