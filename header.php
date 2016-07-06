<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>My Blog</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,300,700' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="<?php bloginfo('template_url')?>/js/jquery.slides.min.js"></script>
	<script>
    $(function(){
      $("#slideshow").slidesjs({
        height: 300,
        navigation:false
      });
    });
  </script>
  <?php wp_head();?>
</head>
<body>
	<header>
        
        <div id="logo"><a href="http://www.shannoneadams.com/WIE"><p>My Blog</p><span>by Shannon Adams</a></span></div>
        <nav>
			<?php wp_nav_menu(
			 array(
			 'container' => false,
			 'items_wrap' => '<ul id="menu-top">%3$s</ul>',
			 'theme_location' => 'menu'
			 )); ?>
		</nav>
        <div id="profile"><img src=http://www.shannoneadams.com/WIE/wp-content/uploads/2016/06/10629450_793419638895_8685794279337725299_o-1-1.jpg alt="profile" />
        </div>
        
		
	</header>