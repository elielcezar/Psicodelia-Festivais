(function($) {
   $().ready(function() { 

      /* menu do usuario */
      $('#block-system-user-menu').appendTo('.menu-usuario');

      /* menu hamburguer*/
      $('.c-hamburger').mouseenter(function(){
          $(this).addClass('is-active');
          $('header ul.menu').addClass('is-active');
      }).mouseleave(function(){
          $(this).removeClass('is-active');
          $('header ul.menu').removeClass('is-active');
      });
      $('header .btn-group').mouseenter(function(){
          $(this).addClass('open');
      }).mouseleave(function(){
          $(this).removeClass('open');
      });

      /* placeholder no campo de busca */
      $('#busca .form-text').attr('placeholder','Pesquise por Festival ou Região');

      /* home */
      $('.front #busca').appendTo('.place-busca');
      //$('.intro-header').localScroll();
      /* campo 'Outro'*/
      //var campo_outro = $('form .form-item-submitted-o-que-voce-faz-other');
      //campo_outro.hide();
      /*$('.form-item-submitted-o-que-voce-faz-select-select-or-other input, .form-item-submitted-o-que-voce-faz-select-select-or-other input').click(function(){   
        if ($('#edit-submitted-o-que-voce-faz-select-4').is(':checked')) {
          campo_outro.show();
        } else{
          campo_outro.hide();
        }
      });*/
        /* mascara no form de edicao de venda de ingresso */
        //$('.page-node-edit.node-type-venda-ingressos .field-name-field-valor input').maskMoney();
        /* pagina de exclusao de festival */
        $('.page-node-delete.node-type-festival .region.region-content').addClass('container');
        $('.page-node-delete.node-type-festival #block-system-main').addClass('card');
        /* pop-up / form de cdastro de excursoes */
        //$('#cadastro-excursoes #edit-field-cidade2 #edit-field-cidade2-und').attr('placeholder','Saindo de');
       /*$('.banner-destaque-home').slick({
          //arrows: false,
          infinite: true,
          speed: 500,
          fade: true
        });*/


         /*$('#edit-combine').attr('placeholder','Pesquise por Festival, Cidade ou Estado');
          $('#edit-field-data-value-value-datepicker-popup-0').attr('placeholder','Pesquise a partir de uma data'); 
          $('#edit-combine-autocomplete-aria-live').click(function(){
              $('header #edit-combine-wrapper .form-item-combine').submit();
          });*/
          /* adiciona link no icone do carrinho no topo */
          //$('header #block-commerce-cart-cart h2').wrap('<a href="http://partiufestival.com/cart"></a>');
          /* aviso na pagina de um ingresso */
          //$('.node-type-ingresso #edit-line-item-fields--2').prepend('<span class="aviso">No Partiu Festival os ingressos são personalizados para cada usuário. Por isso, pedimos que você informe abaixo os dados <strong>DA PESSOA QUE IRÁ UTILIZAR O INGRESSO</strong>. Insira um por vez clique em comprar. Repita o processo para cada pessoa que você estiver comprando.</span>');
          /* ajustes na lista de pedidos do usuario */
          /*var $Divs = $('.page-meus-pedidos .view-pedidos-usuario tr td:nth-child(1)');
          $Divs.each(function(i) {
            if ($(this).find("img").length == 0) {
                 $(this).html('<img src="http://partiufestival.com/sites/all/themes/partiucadastro/img/ingresso-thumb.jpg" /  >');
            } 
          });*/
          /* ajuste na tela de vendas por usuario */
          //$('.page-minhas-vendas .conteudo table').addClass('table table-hover table-striped')
      
   			
    });
})(jQuery);