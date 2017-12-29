<?php include "header.tpl.php"; ?>	

<div class="principal">
<div class="container">

		<div class="shortcuts">
			<?php print $messages; ?>
			<?php if (!empty($tabs)): ?>
			<?php print render($tabs); ?>
			<?php endif; ?>  
		</div> 

		<h1><?php print $title; ?></h1>

		<?php print render($page['content']); ?> 

</div>	

</div>	

<?php include "footer.tpl.php"; ?>	  

<script type="text/javascript">
jQuery(document).ready(function ($) {
	$('.page-node-edit .principal h1').html('Editar Conteúdo');
});

</script>