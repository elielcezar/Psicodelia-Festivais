<?php include "header.tpl.php"; ?>	


<div id="principal">

  <div class="container">

  <div class="conteudo">

  <div class="shortcuts">
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>  
  </div> 

		<?php print render($page['content']); ?>   
</div>
</div>
</div>




<?php include "footer.tpl.php"; ?>


    
<script type="text/javascript">

jQuery(document).ready(function ($) {

    var image = $('.page-user.logged-in .views-field-field-imagem-de-capa img').attr('src');
    
    $('.page-user.logged-in .header-filter ').css({            
       'background-image': 'url('+ image +')'
    }); 

    $('.page-user.logged-in .shortcuts').appendTo('.views-field-field-foto'); 

    $('.page-user-register .conteudo, .page-user.not-logged-in .conteudo').addClass('card').wrap('<div class="container"></div>');

    $('.block-fboauth').prependTo('.region.region-content');

    $('.editar-perfil').appendTo('.views-field-field-nome');

    $('.page-user-cancel .conteudo').addClass('card').wrap('<div class="container"></div>')

    $("#edit-profile-main-field-data-de-nascimento-und-0-value-date").mask("99/99/9999",{placeholder:"dd/mm/aaaa"});
    
});
  
</script>    