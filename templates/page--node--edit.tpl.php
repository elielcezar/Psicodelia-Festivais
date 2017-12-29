<?php include "header.tpl.php"; ?>	
        
<?php 
//if ((strpos($_SERVER['REQUEST_URI'], "edit") !== false)||(strpos($_SERVER['REQUEST_URI'], "delete") == !false)){
?>
<section class="conteudo">   
	<h2>editar conteudo --</h2>
		        <div class="container">
		            <?php if ($title) : ?>
		                <h1><?php print $title; ?></h1>
		            <?php endif ?>
		             <?php // if (!empty($breadcrumb)): print $breadcrumb; endif; ?> 
		        <div class="shortcuts">
		            <?php print $messages; ?>
		            <?php if (!empty($tabs)): ?>
		              <?php print render($tabs); ?>
		            <?php endif; ?>  
		        </div> 
		        <div class="card">
		            <?php print render($page['content']); ?> 
		        </div>
		        	
		        	   
		           
		        </div>
		        <!-- /.container --> 
		</section>
		<?php include "footer.tpl.php"; ?>	  
<?php
/*
} else {
	$id_festival = $node->field_evento['und'][0]['nid']; 
	$url_festival = "http://partiufestival.com/node/".$id_festival."";
	header("Location: ".$url_festival."#procura-carona"); 
	exit();
*/
?>
		


<script type="text/javascript">
jQuery(document).ready(function ($) {
	$('.page-node-edit.node-type-procura-carona h1').html('Editar Conteúdo');
});

</script>
