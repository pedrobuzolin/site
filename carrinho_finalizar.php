<?php
    include("./template/topo.php");
    include("./auth/verifica_login.php");
?>
<div class="finalizar_conteudo">
    <div class="card card-finalizar">
        <div class="finalizar_img">
            <img src="assets/img/logo.svg" class="login__img">
        </div>
        <form action="carrinho_finalizar_salvar.php" method="POST">
            <fieldset class="finalizar_opcao">
                <legend>Selecione o meio de pagamento:</legend>
                <div class="finalizar_radio">
                    <input type="radio" id="boleto" name="pagamento" value="boleto" checked/>
                    <label for="boleto">Boleto</label>
                    <input type="radio" id="credito" name="pagamento" value="credito"/>
                    <label for="credito">Cartão de Crédito</label> 
                    <input type="radio" id="debito" name="pagamento" value="debito"/>
                    <label for="debito">Cartão de Débito</label> 
                    <input type="radio" id="pix" name="pagamento" value="pix"/>
                    <label for="pix">PIX</label>
                </div>
            </fieldset>
            <fieldset class="finalizar_opcao">
                <legend>Selecione a forma de entrega:</legend>
                <div>
                    <input type="radio" id="entrega" name="entregar" value="entrega" checked/>
                    <label for="entrega">Entrega</label>
                    <input type="radio" id="retirada" name="entregar" value="retirada"/>
                    <label for="retirada">Retirada</label> 
                </div>
            </fieldset>
            <input type="submit" value="Finalizar" class="botao botao-carrinho botao-verde"/>
        </form>    
    </div>
</div>

<?php
    include("./template/rodape.php");
?>