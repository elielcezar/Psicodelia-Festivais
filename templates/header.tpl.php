<?php 
global $user;
$uid = $GLOBALS['user']->uid; 
?>

    <!-- Header -->
    <header>   



      <div class="logo"><a href="<?php print base_path() ?>"><img src="<?php print base_path() . path_to_theme() ?>/img/logo-2018.png" /></a></div>            

       <div class="menu-usuario">
         <?php if($user->uid){ ?>
            <?php //print views_embed_view('menu_usuario', 'default', $uid); ?>
          <?php } ?>
          <div class="c-hamburger c-hamburger--htx">
            <span> </span>            
          </div>     
          <p>MENU</p>                    
      </div>

      <?php print render($page['header']); ?> 

       <ul class="menu-principal">
            <li><a href="<?php print base_path() ?>festivais">+ Festivais</a></li>
            <li><a href="<?php print base_path() ?>cadastro-de-festivais">Cadastre um Festival</a></li>
        </ul>

       <div id="busca">
          <?php
              $block = module_invoke('views', 'block_view', '-exp-festivais-page_1');
              print render($block['content']);
          ?>
        </div> 



    </header> 