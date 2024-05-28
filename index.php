<?php
    include("./connection/connection.php");
    include("./template/topo.php");
?>
    <main class="conteudo">
        <section class="carrossel__banner">
            <div class="swiperBanner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="assets/img/banner1.svg" alt="Pontos em Dobro"></div>
                    <div class="swiper-slide"><img src="assets/img/banner2.svg" alt="Sexta da Carne"></div>
                    <div class="swiper-slide"><img src="assets/img/banner3.svg" alt="Promoção Pascoa"></div>
                </div>
    
                <div class="swiper-pagination"></div>
      
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
        <section class="produtos">
            <h2 class="produtos__titulo">Ofertas do Dia:</h2>
            <section class="produtos__conteudo">
                <?php
                    $sql = "SELECT * FROM produtos WHERE ofertaDia = 'S'";
                    
                    $rs = $con->query($sql);
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
        <section class="produtos">
            <h2 class="produtos__titulo">Mais Vendidos:</h2>
            <section class="produtos__conteudo">
                <?php
                    $sql = "SELECT * FROM produtos WHERE maisVendidos = 'S'";
                    
                    $rs = $con->query($sql);
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiperBanner = new Swiper('.swiperBanner', {
           speed: 400,
           slidesPerView: 1,

           pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
            },

           autoplay: {
            delay: 5000,
            },
        });
    </script>
<?php
    include("./template/rodape.php");
?>