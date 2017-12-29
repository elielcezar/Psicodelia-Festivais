<?php include "header.tpl.php"; ?>  

<section class="conteudo">   
    <div class="container">

        <div class="header">            
            <h1><?php print $title; ?></h1>
        </div>
          
             <?php // if (!empty($breadcrumb)): print $breadcrumb; endif; ?> 
        <div class="shortcuts">
            <?php print $messages; ?>
            <?php if (!empty($tabs)): ?>
              <?php print render($tabs); ?>
            <?php endif; ?>  
        </div> 

        <section class="conteudo">  
            <div class="container">
                <?php print render($page['content']); ?> 
            </div>
        </section>

     </div>
    <!-- /.container --> 
</section>

<?php include "footer.tpl.php"; ?>

