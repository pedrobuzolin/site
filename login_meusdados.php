<?php
    include("./connection/connection.php");
    include("./template/topo.php");
    include("./template/menu_perfil_cliente.php");

    $id = $_SESSION["login"]["id"];

    $sqlLogin = "SELECT * FROM login_usr WHERE idUsuario = $id";
    $rsLogin = $con->query($sqlLogin);
    $dadosLogin = $rsLogin->fetch_assoc();

    $sql = "SELECT * FROM clientes WHERE idLogin = $id";
    $rs = $con->query($sql);
    $dados = $rs->fetch_assoc();
?>
<div class="conteudo_centralizado">
    <section class="form_cadastro">
        <div class="card card-cadastro">
            <img src="assets/img/logo.svg" class="form_img">
            <form action="login_meusdados_alterar.php" method="post">
                <label class="form_titulo">Nome</label>
                <input type="text" name="nome" class="form_campo" value="<?php echo $dados["Nome"]; ?>" disabled/>
                <br/>
                <label class="form_titulo">Sobrenome</label>
                <input type="text" name="sobrenome" class="form_campo" value="<?php echo $dados["Sobrenome"]; ?>" disabled/>
                <br/>
                <label class="form_titulo">CPF</label>
                <input type="text" name="cpf" class="form_campo" value="<?php echo $dados["Cpf"]; ?>" disabled/>
                <br/>
                <label class="form_titulo">Endereco</label>
                <input type="text" name="endereco" class="form_campo" value="<?php echo $dados["Endereco"]; ?>" disabled/>
                <br/>
                <label class="form_titulo">Numero</label>
                <input type="text" name="numero" class="form_campo" value="<?php echo $dados["Numero"]; ?>" disabled/>
                <br/>
                <label class="form_titulo">Complemento</label>
                <input type="text" name="complemento" class="form_campo" value="<?php echo $dados["Complemento"]; ?>" disabled/>
                <br/>
                <label class="form_titulo">Celular</label>
                <input type="text" name="celular" class="form_campo" value="<?php echo $dados["Celular"]; ?>" disabled/>
                <br/>
                <label class="form_titulo">E-mail</label>
                <input type="text" name="email" class="form_campo" value="<?php echo $dadosLogin["email"]; ?>" disabled/>
                <br/>
                <label class="form_titulo">Senha</label>
                <input type="text" name="senha" class="form_campo" value="<?php echo $dadosLogin["senha"]; ?>" disabled/>
                <br/>
                <input type="submit" value="Alterar" class="botao botao-verde botao-medio"/>
                <br/>
            </form>
        </div>
    </section>
</div>