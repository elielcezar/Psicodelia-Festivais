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

       <div class="redes-sociais">
            <a class="facebook" href="https://www.facebook.com/Psicodelia.org/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a class="twitter" href="https://twitter.com/psicodelia" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a class="instagram" href="http://instagram.com/psicodelia_org" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>

      <?php print render($page['header']); ?> 

       <div id="busca">
          <?php
              $block = module_invoke('views', 'block_view', '-exp-busca_festivais-page_1');
              print render($block['content']);
          ?>
          <a class="todos" href="<?php print base_path() ?>todos">Ver Todos</a>
        </div>

    </header> 