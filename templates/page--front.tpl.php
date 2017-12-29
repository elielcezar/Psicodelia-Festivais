<?php include "header.tpl.php"; ?>     

    <div class="mapa">
        
        <?php print views_embed_view('mapa_festivais', 'default'); ?>
        
        <div class="cta">
            <h4>Qual a sua próxima parada?</h4>
            <h2>Encontre festivais de Psy Trance perto de você!</h2>
            <div class="place-busca"></div>
            <p><a href="<?php print base_path() ?>todos">Ou se preferir, confira nossa lista completa!</a></p>
        </div>

    </div>
    
  

    <div class="proximos-festivais">
        <div class="container">        
        <?php print views_embed_view('festivais_proximos_home', 'default'); ?>
        <div class="veja-mais">
            <a class="btn"  href="<?php print base_path() ?>todos">Ver Todos</a>
        </div>
      </div>
  </div>

<?php include "footer.tpl.php"; ?>


