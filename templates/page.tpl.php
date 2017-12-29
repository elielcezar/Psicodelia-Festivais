<?php include "header.tpl.php"; ?>  
<section class="conteudo">   
        <div class="container">            
             <?php // if (!empty($breadcrumb)): print $breadcrumb; endif; ?> 
        <div class="shortcuts">
            <div class="container">
            <?php print $messages; ?>
            <?php if (!empty($tabs)): ?>
              <?php print render($tabs); ?>
            <?php endif; ?> 
            </div> 
        </div> 
        <div class="card">
            <?php if ($title) : ?>
                <h1 class="page-title"><?php print $title; ?></h1>
            <?php endif ?>
            <?php print render($page['content']); ?> 
        </div>
        	
        	   
           
        </div>
        <!-- /.container --> 
</section>
<?php include "footer.tpl.php"; ?>
<script type="text/javascript">
jQuery(document).ready(function ($) {
    $('.page-node-edit.node-type-compra-ingressos .conteudo h1').html('Editar conteúdo');
    $('.page-node-edit.node-type-venda-ingressos .conteudo h1').html('Editar conteúdo');
    $('.page-node-edit.node-type-oferecendo-carona .conteudo h1').html('Editar conteúdo');
    $('.page-node-edit.node-type-procura-carona .conteudo h1').html('Editar conteúdo');
    $('.page-node-delete.node-type-compra-ingressos .conteudo h1').html('Tem certeza que deseja apagar seu anúncio?');
    $('.page-node-delete.node-type-venda-ingressos .conteudo h1').html('Tem certeza que deseja apagar seu anúncio?');
    $('.page-node-delete.node-type-procura-carona .conteudo h1').html('Tem certeza que deseja apagar seu anúncio?');
    $('.page-node-delete.node-type-oferecendo-carona .conteudo h1').html('Tem certeza que deseja apagar seu anúncio?');
     
});
</script>
