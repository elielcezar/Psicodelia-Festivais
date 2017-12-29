     <div class="cadastro-festival">

            <div class="container">              



                <div class="col-sm-12 col-md-6 col-sm-8">

                    <h3>Está faltando algum festival em nossa lista?</h3>

                </div>

                <div class="col-sm-12 col-md-6 col-sm-4">

                    <a href="#" class="btn envie-agora" data-toggle="modal" data-target="#cadastro-festivais">Envie agora mesmo!</a>

                    <a href="http://partiufestival.com/festivais" class="btn confira-lista">Confira a Lista Completa</a>

                </div>

            </div>

        </div>

    <!-- Footer -->

    <footer>
    <div class="newsletter">
        <div class="container">
            <?php print render($page['rodape1']);  ?>
        </div>
    </div>
    <div class="conteudo-rodape"> 
        <div class="container">
            <div class="row">
                <div class="col-sm-3 cogumelo"> </div>
                <div class="col-sm-3">
                    <ul>
                        <li><a href="http://psicodelia.org/">Home</a></li>
                        <li><a href="http://psicodelia.org/noticias">Notícias</a></li>
                        <li><a href="http://psicodelia.org/videos">Vídeos</a></li>
                        <li><a href="http://loja.psicodelia.org">Loja</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#enviar-noticia">Envie uma Notícia</a></li>
                        <li><a href="http://psicodelia.org/anuncie-no-psicodelia">Anuncie</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#contato">Contato</a></li>

                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="menu links-sociais">
                        <li class="leaf first RSS"><a href="http://feeds.feedburner.com/psicodelia" title="RSS do Psicodelia">RSS</a></li>
                        <li class="leaf Facebook"><a href="http://www.facebook.com/Psicodelia.org" title="">Facebook</a></li>
                        <li class="leaf Twitter"><a href="http://twitter.com/psicodelia" title="">Twitter</a></li>
                        <li class="leaf Instagram"><a href="http://instagram.com/psicodelia_org" title="">Instagram</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="fb-page" data-href="https://www.facebook.com/Psicodelia.org/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Psicodelia.org/" class="fb-xfbml-parse-ignore"></blockquote></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 termos">
                    <p>As opiniões e comentários publicados no Psicodelia são de responsabilidade de seus respectivos autores.&nbsp;<span style="line-height: 1.6em;">O conteúdo deste site é livre para ser reproduzido, desde que a fonte seja citada de maneira clara junto de um link para o artigo original. Dúvidas, reclamações ou sugestões: </span><a href="mailto:contato@psicodelia.org">contato@psicodelia.org</a></p>
                    <p>Desenvolvido por&nbsp;<a href="http://agenciam2e.com.br" target="_blank">M2E Comunicação Digital</a>.&nbsp;O Psicodelia.org é movido a&nbsp;<a href="http://drupal.org" target="_blank">Drupal</a></p>  
                </div>
            </div>
            
            <?php print render($page['rodape2']);  ?>
    </div>
 </footer>

  

 <!-- Modal -->

<div class="modal fade" id="cadastro-festivais" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

        <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <h2 class="modal-title" id="myModalLabel">Indique um festival e ajude<br/> a completar o nosso mapa!</h2>

          </div>

      <div class="modal-body">             

        <?php

            $block = module_invoke('webform', 'block_view', 'client-block-23');

            print render($block['content']);

        ?>

      </div>             

    </div>

  </div>

</div>



<!-- Modal -->

<div class="modal fade" id="form-contato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

        <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <h2 class="modal-title" id="myModalLabel">Entre com Contato</h2>

          </div>

      <div class="modal-body">             

        <?php

            $block = module_invoke('webform', 'block_view', 'client-block-165');

            print render($block['content']);

        ?>

      </div>             

    </div>

  </div>

</div>





<!-- Modal -->

<div class="modal fade" id="cadastro-excursoes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

        <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <h2 class="modal-title" id="myModalLabel">Cadastro de Excursões</h2>

          </div>

      <div class="modal-body">             

        <?php

            $block = module_invoke('formblock', 'block_view', 'excursao');

            print render($block['content']);



            $block = module_invoke('formblock', 'excursao');

            print render($block['content']);

        ?>



      </div>             

    </div>

  </div>

</div>

    

 <!-- Modal -->

<div class="modal fade" id="denunciar-conteudo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

        <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <h2 class="modal-title" id="myModalLabel">Denunciar Conteúdo</h2>

          </div>

      <div class="modal-body">             

        <?php

            $block = module_invoke('webform', 'block_view', 'client-block-164');

            print render($block['content']);

        ?>

      </div>             

    </div>

  </div>

</div>

<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.scrollTo-min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js" type="text/javascript" ></script>

<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.localscroll-min.js"></script>

<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.maskedinput.min.js" type="text/javascript"></script>

<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.maskMoney.js" type="text/javascript"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<script type="text/javascript">

jQuery(function( $ ){

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

	

});

</script>





<script type="text/javascript">

jQuery(document).ready(function ($) {

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

</script>
