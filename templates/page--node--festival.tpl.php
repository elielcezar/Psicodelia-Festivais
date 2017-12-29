<?php include "header.tpl.php"; ?>	
        
  <div class="shortcuts">
      
     
        <?php print render($tabs); ?>
     
  </div> 
  
  <?php print render($page['content']); ?>  
<div class="extras"> <?php print render($page['extras']); ?>  </div>
	<?php include "footer.tpl.php"; ?>	    
