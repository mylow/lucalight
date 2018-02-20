<!--Code by Luka Sherman, 2014, for Ryan Sherman-->
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php get_my_title_tag();?></title>
<!--Remy Sharp Shim --> 
<!--[if lt IE 9]> 
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script> 
<![endif]-->

<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico">
<link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet"/>
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Lato' >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/jquery.slicknav.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/slicknav.css" type="text/css">
     <script>
	$(function(){
		$('#menu').slicknav({label: '',prependTo:'body',brand:"<a href='<?php echo get_settings('home');?>'><img src='<?php bloginfo('template_directory');?>/images/logo2014.jpg' class='logo-main' width='100px'></a>"});
	});
    </script>
<?php wp_head(); ?>    
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-53SL9C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-53SL9C');</script>
<!-- End Google Tag Manager -->
    


	<div id="wrapper">
	<div id="logo">
    <a href="<?php echo get_settings('home');?>"><img src="<?php bloginfo('template_directory');?>/images/logo2014.jpg" class="logo-main" /></a>
	</div>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_id' => 'cssmenu', 'menu_id' => 'menu',) ); ?>