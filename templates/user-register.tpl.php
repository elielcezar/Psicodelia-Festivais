<?php include "header.tpl.php"; ?>	

<div id="principal">

<div class="container">

	<div class="card">

		<div class="shortcuts">
          <?php if (isset($messages)): ?>
            <?php print $messages; ?> 
            <?php endif; ?>           
        </div> 

        <h4>Cadastre-se-se</h4>

		<?php print render($page['content']); ?>   

	</div>

</div>

</div>

<?php include "footer.tpl.php"; ?>



