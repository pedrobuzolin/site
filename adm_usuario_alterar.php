<?php
    include("./template/topo.php");
    include("./auth/verifica_login_adm.php");
    include("./template/menu_perfil_adm.php");
    include("./connection/connection.php");

    $id = $_GET["id"];
    $sql = "SELECT * FROM login_adm WHERE idAdm = $id";
    $rs = $con->query($sql);
    $dados = $rs->fetch_assoc(); 
?>

<div class="conteudo_centralizado">
    <section class="form_login">
        <div class="card card-login">
            <img src="assets/img/logo.svg" class="form_img">
            <form action="adm_usuario_alterar_salvar.php" method="POST">
                <input type="hidden" name="id" class="form_campo" value="<?php echo $dados["idAdm"]?>"/>
                <label class="form_titulo">Usuário</label>
                <input type="text" name="usuario" class="form_campo" value="<?php echo $dados["usuario"]?>"/>
                <br/>
                <label class="form_titulo">Senha</label>
                <input type="text" name="senha" class="form_campo" value="<?php echo $dados["senha"]?>"/>
                <br/>
                <input type="submit" value="Salvar" class="botao botao-verde botao-medio"/>
                <br/>
            </form>
            <button class="botao botao-cinza botao-medio"><a href="adm_usuarios.php" class="botao botao-cinza botao-medio">Voltar</a></button>
        </div>
    </section>
</div>