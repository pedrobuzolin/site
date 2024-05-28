$(document).ready(function(){
  $('.add-carrinho').click(function(){
     var idProd = $(this).data('id-produto');
     $.ajax({
        url: 'carrinho.php',
        type: 'POST',
        data: {idProd: idProd},
        success: function(response){
           $('#carrinho').html(response);
           atualizarNumeroCarrinho();
        }
     });
  });

  function atualizarNumeroCarrinho() {
      $.ajax({
          url: 'carrinho_qtde_itens.php',
          type: 'GET',
          success: function(response){
              $('#carrinho_itens').text(response);
          }
      });
  }
  atualizarNumeroCarrinho();
});