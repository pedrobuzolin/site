<?php
    include("./template/topo.php");
?>

<div class="conteudo_centralizado">
    <section class="form_cadastro">
        <div class="card card-cadastro">
            <img src="assets/img/logo.svg" class="form_img">
            <h2 class="titulo2">Criar Conta</h2>
            <form action="login_cadastro_salvar.php" method="post">
                <label class="form_titulo">Nome</label>
                <input type="text" name="nome" class="form_campo"/>
                <br/>
                <label class="form_titulo">Sobrenome</label>
                <input type="text" name="sobrenome" class="form_campo"/>
                <br/>
                <label class="form_titulo">CPF</label>
                <input type="text" name="cpf" class="form_campo"/>
                <br/>
                <label class="form_titulo">Endereco</label>
                <input type="text" name="endereco" class="form_campo"/>
                <br/>
                <label class="form_titulo">Numero</label>
                <input type="text" name="numero" class="form_campo"/>
                <br/>
                <label class="form_titulo">Complemento</label>
                <input type="text" name="complemento" class="form_campo"/>
                <br/>
                <label class="form_titulo">Celular</label>
                <input type="text" name="celular" class="form_campo"/>
                <br/>
                <label class="form_titulo">E-mail</label>
                <input type="text" name="email" class="form_campo"/>
                <br/>
                <label class="form_titulo">Senha</label>
                <input type="password" name="senha" class="form_campo"/>
                <br/>
                <div class="form_botoes">
                    <input type="submit" value="Salvar" class="botao botao-verde botao-medio"/>
                    <button class="botao botao-cinza botao-medio"><a href="login.php" class="botao botao-cinza botao-medio">Voltar</a></button>
                </div>
            </form>
        </div>
    </section>
</div>
<?php
    include("./template/rodape.php");
?>
