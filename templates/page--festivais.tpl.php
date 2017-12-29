<?php include "header.tpl.php"; ?>  

  <div class="mapa-festivais">
    <?php print views_embed_view('mapa_festivais2','default'); ?> 
    <?php //print views_embed_view('festivais','attachment_1'); ?> 
 
  </div>

    
<div id="principal">
<section class="conteudo">  
        <div class="container">
        <div class="shortcuts">
            <?php print $messages; ?>           
        </div> 
        	
        	 <?php print render($page['content']); ?>   
           
        </div>
        <!-- /.container --> 
</section>

<?php include "footer.tpl.php"; ?>

</div>
<script type="text/javascript">
jQuery(document).ready(function ($) {
    /* adiciona detalhes a busca */    
    //$('#edit-combine-wrapper').after('<span class="ou">OU</span>');
    //$('#edit-combine').attr('placeholder','Pesquise pelo nome do Festival, pela cidade ou estado');
    //$('#edit-field-data-value-value-datepicker-popup-1').attr('placeholder','Pesquise a partir de uma data');
    /* reposiciona o filtro de ordenacao */
    $('#edit-sort-bef-combine-wrapper').prependTo('.view-festivais .view-content').css('display','block');
    $('#edit-sort-bef-combine').attr('form','views-exposed-form-festivais-page-1');
    $('option[value="title ASC"]').html('Nome A até Z');
    $('option[value="title DESC"]').html('Nome Z até A');
    /* aplica a ordenacao */
    $('#edit-sort-bef-combine').change(function() {
        $('#views-exposed-form-festivais-page-1').submit();
    });
});
</script>