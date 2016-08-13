<!DOCTYPE html>
<html>
<head>
    
<title><?php wp_title( '|', true, 'right' ); ?> Tai Doido</title>

<!-- META -->
<meta charset="utf-8">
<meta lang="pt-br">
<meta name="description" content="Tai Doido: Notícias e artigos culturais de Caruaru.">
<meta name="keywords" content="tai doido, cultura, caruaru, música, vídeo, fotografia, dança, shows, são joão">
<meta name="author" content="Estúdio 8bits">
<meta name="copyright" content="CC BY-NC-SA 4.0">
<meta name="generator" content="Microsoft Visual Studio Code">
<meta name="rating" content="general">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
<!-- ICON -->
<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/icon.png">

<!-- CSS -->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">

<?php wp_head(); ?>
</head>

<body>

<!-- NAV -->
<nav class="navbar navbar-default navbar-fixed-top" id="mainMenu">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand" href=""><img src="<?php bloginfo('template_directory');?>/images/logosm.png" alt="" height="22"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right" id="mainMenuList">
        <?php wp_list_pages('orderby=menu_order&title_li=&depth=1'); ?>
        <li><a href="#contato" data-toggle="modal">Contato</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!-- /.navbar navbar-default -->