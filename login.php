<?php
    include("./template/topo.php");
?>
<div class="conteudo_centralizado">
    <section class="form_login">
        <div class="card card-login">
            <img src="assets/img/logo.svg" class="form_img">
            <form action="./auth/valida_login.php" method="post">
                <label class="form_titulo">E-mail</label>
                <input type="text" name="email" class="form_campo"/>
                <br/>
                <label class="form_titulo">Senha</label>
                <input type="password" name="senha" class="form_campo"/>
                <br/>
                <input type="submit" value="Entrar" class="botao botao-verde botao-medio"/>
                <br/>
                <a href="login_cadastro.php" class="form_link">
                    Criar Conta
                </a>
                <br/>
            </form>
        </div>
    </section>
</div>
<?php
    include("./template/rodape.php");
?>