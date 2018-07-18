

<div class="top-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php
					global $messages;
					if($messages){ print $messages; }
				?>
				<h1><?php print $title; ?></h1>

				<div class="info-data">
					<?php print views_embed_view('festival_data', 'block_1', $nid); ?>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="container">

		<div class="row">

			<div class="col-md-8">

				<div class="conteudo">

					<div class="tab-content">

						<div class="tab-pane active" id="sobre">

							<div class="header header-filter">
						    	<div class="capa">
						    		<?php print views_embed_view('festival_capa', 'default', $nid); ?>
						    	</div>
							</div>

							<?php if($user->uid){ ?>
				      			<div class="container-form">
				      				<?php print views_embed_view('festival_sobre', 'default', $nid); ?>
				      			</div>

				      			<div class="info-mapa">
									<?php print views_embed_view('festival_data', 'attachment_1', $nid); ?>
								</div>
							<?php } else { ?>
									<div class="aviso"><h4><a href="<?php print base_path() ?>user/register" target="_blank">Crie uma conta</a> ou <a href="<?php print base_path() ?>user" target="_blank">faça login</a> para ver todas as informações desse festival.<br/><br/>É rápido e o melhor, de graça! =)</h4></div>
							<?php } ?>
					      </div>

					</div>

				</div>
			</div>

		<div class="col-md-4">

			<div class="banner-1">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Festivais - Sidebar -->
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-7864415239368120"
				     data-ad-slot="6413474152"
				     data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>

			<!--div class="banner-2">

			</div-->

		</div>

	</div><!-- row -->

</div><!-- container -->



  <div class="proximos-festivais">

    	<div class="container">
      	<h2>Próximos Festivais</h2>
      	<?php print views_embed_view('festivais_proximos', 'default'); ?>
      </div>

  </div>





<script type="text/javascript">

jQuery(document).ready(function ($) {

   		/*var image = $('.views-field-field-imagem-de-capa img').attr('src');
      $('.header-filter .capa').css({
         'background-image': 'url('+ image +')'
      });*/

    /* seleciona o evento no form de resposta */
    /*var node_nid = Drupal.settings.nid;
    $(".form-item-field-evento-und select").val(node_nid);*/

    /* posiciona os forms nas abas */
    /*$('.shortcuts').prependTo('.top-content .container');
    $('#block-formblock-compra-ingressos').appendTo('.form-compra');
    $('#block-formblock-venda-ingressos').appendTo('.form-venda');
    $('#block-formblock-excursao').appendTo('.form-excursoes');
    $('#block-formblock-procura-carona').appendTo('.form-procura-carona');
    $('#block-formblock-oferecendo-carona').appendTo('.form-oferece-carona');*/


    /*ajuste na area sobr o evento */
    if ( $('.view-festival-sobre .col-sm-4').children().length == 0 ) {
	  $('.view-festival-sobre .col-sm-8').css('width','100%');
	  $('.view-festival-sobre .col-sm-4').hide();
	}


    /* abas com link */
    $(function(){
      var hash = window.location.hash;
      hash && $('ul.nav a[href="' + hash + '"]').tab('show');
      $('.nav-tabs a').click(function (e) {
        $(this).tab('show');
        var scrollmem = $('body').scrollTop() || $('html').scrollTop();
        window.location.hash = this.hash;
        $('html,body').scrollTop(scrollmem);
      });
    });

    /* ajustes no form de venda de ingressos */
    $('#venda-ingressos-node-form .field-name-field-valor input').maskMoney().attr('placeholder','Valor do seu ingresso');
    $('#venda-ingressos-node-form textarea').attr('placeholder','Informe mais detalhes como sua cidade e condições de pagamento');

    /* colorbox */
    $('p.acoes a').addClass('colorbox-node');


 });



</script>
