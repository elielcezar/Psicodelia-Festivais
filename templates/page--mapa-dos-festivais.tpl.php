<header>
	<div class="container">
		<ul>
		</ul>
		<div class="logo"><a href="http://partiufestival.com"><img src="<?php print base_path() . path_to_theme() ?>/img/partiufestival.png" /></a></div>
	</div>
</header>
<section class="mapa">
		          <?php print render($page['content']); ?>        
	   
		
	
</section>
<section class="conteudo">   
        <div class="container">
        	<div class="row">        		
        		<div class="col-sm-6">
        			<div class="festivais">
        				<h3>Está faltando algum festival?</h3>
        				<p class="lead">Esse mapa é uma construção colaborativa. Sinta-se à vontade para enviar sua dica de festival e ajude-nos a deixa-lo cada vez mais completo. A nossa comunidade agradece!</p>
        				<button type="button" class="chamada"  data-toggle="modal" data-target="#cadastro-festivais">Incluir Festival</button>
        			</div>
        		</div>
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
        		<div class="col-sm-6">
        			<div class="excursoes">
        				<h3>Alô excursionistas e promoters!</h3>
        				<p class="lead">Se você está organiza excursões ou vende ingressos para algum festival, cadastre-se agora mesmo! A partir de julho você poderá divulgar seus serviços de forma eficiente e gratuita!</p>
        				<button type="button" class="chamada"  data-toggle="modal" data-target="#cadastro-profissionais">Cadastre-se!</button>
        			</div>
        		</div>
        		 <!-- Modal -->
					<div class="modal fade" id="cadastro-profissionais" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					    	<div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h2 class="modal-title" id="myModalLabel">Excursionistas e promoters, <br/>queremos conhecer vocês!</h2>
						      </div>
					      <div class="modal-body">		       
					        <?php
								$block = module_invoke('webform', 'block_view', 'client-block-17');
								print render($block['content']);
							?>
					      </div>		     
					    </div>
					  </div>
					</div>
        	</div>
           
        </div>
        <!-- /.container --> 
</section>
<?php include "footer.tpl.php"; ?>