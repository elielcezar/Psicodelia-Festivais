
<?php 
//$uid = $GLOBALS['user']->uid; 
?>

 <div class="header header-filter">
        <div class="container">
            <div class="row">              
             <div class="capa">
            		<?php print views_embed_view('usuario_capa', 'default'); ?>
          </div>
            </div>
        </div>
    </div>


<div id="principal">

    <div class="container">

        <div class="basic-info card">		

            <?php print views_embed_view('usuario_info', 'default'); ?>	

        </div>

    </div>

</div>
  

<?php print render($page['content']); ?>


  



