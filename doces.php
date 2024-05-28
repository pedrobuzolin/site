<?php
    include("./connection/connection.php");
    include("./template/topo.php");
    $sqlSecao = "SELECT * FROM secoes WHERE nomeSecao = 'Doces'";
    $rs = $con->query($sqlSecao);
    $dados = $rs->fetch_assoc();
    $idSecao = $dados["idSecao"];
    $sql = "SELECT * FROM produtos WHERE secao = $idSecao";         
    $rs = $con->query($sql);
?>
    <main class="conteudo">
        <section class="conteudo__banner">
            <img src="assets/img/doces-banner.svg" alt="Banner Bebidas" class="conteudo__banner-img">
        </section>
        <section class="produtos">
            <h2 class="produtos__titulo">Produtos:</h2>
            <section class="produtos__conteudo">
                <?php
                    while($linha = $rs->fetch_assoc()){
                        $produto = $linha["idProd"];
                        $sqlImg = "SELECT * FROM imagens WHERE idProd = $produto";
                        $rsImg = $con->query($sqlImg);
                        while($img = $rsImg->fetch_assoc()){
                            echo "
                                <div class='card card-produto'>
                                    <div>
                                        <img src='assets/img_prod/". $img["nome"] .  "' class='descricao__imagem' alt='" .$linha["descricao"]. "'>
                                    </div>    
                                    <div>
                                        <p class='descricao__produto'>" . $linha["descricao"] . "</p>
                                        <h3 class='descricao__preco'>R$" . number_format($linha["preco"], 2, ",", ".") . "</h3>
                                    </div>
                                    <div>
                                        <button class='add-carrinho botao botao-verde' data-id-produto=".$linha["idProd"].">Comprar</button>
                                    </div>
                                </div>    
                            ";
                        }
                    }
                ?>    
            </section>
        </section>
    </main>
<?php
    include("./template/rodape.php");
?>