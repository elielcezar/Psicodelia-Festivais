     <div class="cadastro-festival">
            <div class="container">              
                <div class="col-sm-12 col-md-6 col-sm-8">
                    <h3>Está faltando algum festival em nossa lista?</h3>
                </div>
                <div class="col-sm-12 col-md-6 col-sm-4">
                    <a href="<?php print base_path() ?>cadastro-de-festivais" class="btn envie-agora">Envie agora mesmo!</a>
                    <a href="<?php print base_path() ?>todos" class="btn confira-lista">Confira a Lista Completa</a>
                </div>
            </div>
        </div>
    <!-- Footer -->
    <footer>
    <div class="newsletter">
        <div class="container">
            <?php print render($page['rodape1']);  ?>
        </div>
    </div>
    <div class="conteudo-rodape"> 
        <div class="container">
            <div class="row">
                <div class="col-sm-3 cogumelo"> </div>
                <div class="col-sm-3">
                    <ul>
                        <li><a href="https://psicodelia.org/">Home</a></li>
                        <li><a href="https://psicodelia.org/noticias">Notícias</a></li>
                        <li><a href="https://psicodelia.org/videos">Vídeos</a></li>
                        <li><a href="https://loja.psicodelia.org">Loja</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#enviar-noticia">Envie uma Notícia</a></li>
                        <li><a href="https://psicodelia.org/anuncie-no-psicodelia">Anuncie</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#contato">Contato</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="menu links-sociais">
                        <li class="leaf first RSS"><a href="http://feeds.feedburner.com/psicodelia" title="RSS do Psicodelia">RSS</a></li>
                        <li class="leaf Facebook"><a href="http://www.facebook.com/Psicodelia.org" title="">Facebook</a></li>
                        <li class="leaf Twitter"><a href="http://twitter.com/psicodelia" title="">Twitter</a></li>
                        <li class="leaf Instagram"><a href="http://instagram.com/psicodelia_org" title="">Instagram</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="fb-page" data-href="https://www.facebook.com/Psicodelia.org/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Psicodelia.org/" class="fb-xfbml-parse-ignore"></blockquote></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 termos">
                    <p>As opiniões e comentários publicados no Psicodelia são de responsabilidade de seus respectivos autores.&nbsp;<span style="line-height: 1.6em;">O conteúdo deste site é livre para ser reproduzido, desde que a fonte seja citada de maneira clara junto de um link para o artigo original. Dúvidas, reclamações ou sugestões: </span><a href="mailto:contato@psicodelia.org">contato@psicodelia.org</a></p>
                    <p>Desenvolvido por&nbsp;<a href="http://agenciam2e.com.br" target="_blank">M2E Comunicação Digital</a>.&nbsp;O Psicodelia.org é movido a&nbsp;<a href="http://drupal.org" target="_blank">Drupal</a></p>  
                </div>
            </div>
            
            <?php //print render($page['rodape2']);  ?>
    </div>
 </footer>
  


<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.scrollTo-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js" type="text/javascript" ></script>
<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.localscroll-min.js"></script>
<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.maskMoney.js" type="text/javascript"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

