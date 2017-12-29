<!DOCTYPE html>
<html>
  <head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="msvalidate.01" content="C7AAE1A27DEE2C221341D9FF7CADD7B3" />


  <?php if($is_front) : ?>
 
        <meta name="distribution" content="Global" />
        <meta name="robots" content="all" />
        <meta name="language" content="pt-br" />
        <meta name="title" content="Partiu Festival!" />
        <meta name="description" content="Encontre excursões, ingressos, caronas e promoções para o seu próximo festival!" />
        <meta name="keywords" content="rave, rave música eletrônica, música eletrônica, festival música, festival música eletrônica, rave Brasil, festa música eletrônica" />
        <link rel="image_src" href="http://partiufestival.com/sites/all/themes/partiucadastro/img/partiu-festival.jpg" />
        <meta property="og:title" content="Partiu Festival"/>
        <meta property="og:description" content="Encontre excursões, ingressos, caronas e promoções para o seu próximo festival!"/>
        <meta property="og:image" content="http://partiufestival.com/sites/all/themes/partiucadastro/img/partiu-festival.jpg"/>    
        <meta property="og:type" content="website" /> 
        <link rel="shortcut icon" href="imgs/favicon.png">
  
  <?php endif; ?>
 
    
    <?php print $styles; ?>

    <!-- slick carousel -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    
    <?php print $scripts; ?>  
    <!-- Custom Fonts -->
  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php print base_path() . path_to_theme() .'/' ?>img/favicon.png">
    <script src="https://use.fontawesome.com/e3b6fded0c.js"></script>


        

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1324085640940096',
      xfbml      : true,
      version    : 'v2.7'
    });
  };
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
 
<div id="main">
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
</div>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PDXX26"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PDXX26');</script>
<!-- End Google Tag Manager -->
</body>
</html>
