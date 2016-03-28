<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,400italic,700italic,300italic,300' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="<?php echo THEMEPATH; ?>js/jquery-1.12.2.min.js"></script>
		<script type="text/javascript" src="<?php echo THEMEPATH; ?>js/script.js"></script>
		<script type="text/javascript" language="javascript"src="<?php echo THEMEPATH; ?>js/cycle.js"></script>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		
		<?php wp_head(); ?>
</head>

	<body <?php body_class(); ?>>
	<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container clearfix">

		<header class="clearfix">

			<a href="<?php echo qtrans_convertURL(site_url()); ?>"><h1 class="logo">Límulus</h1></a>
			<nav class="header_menu">
				
				<div class="renglon renglon_1 clearfix">

					<ul class="social_bar no_480">
						<li class="lang"><?php get_qtrans_single('lang_change'); ?></li>
						<li class="twitter"><a href="https://twitter.com/limulus_mx" target="_blank"></a></li>
						<li class="facebook"><a href="http://www.facebook.com/revistalimulus" target="_blank"></a></li>
						<li class="instagram"><a href="https://www.instagram.com/limulusmx/" target="_blank"></a></li>
					</ul><!-- social_bar -->
					
					<div class="search_quesomos clearfix">
						<a href="<?php echo site_url('que-somos/'); ?>" class="menu_item que-somos <?php echo ( is_page('que-somos') ) ? 'active' : '' ; ?>"><?php _e('¿qué somos?', 'limulus'); ?></a>
						<form method="get" id="searchform" class="main_search clearfix" action="<?php echo qtrans_convertURL( site_url('/') ); ?>">
							<input type="submit" class="search_btn" id="searchsubmit" value="" >
							<input type="text" class="menu_item search" value="" name="s" id="s" >
							<input type="hidden" value="<?php echo qtrans_getLanguage(); ?>" name="lang" id="lang" >
						</form>
					</div>
					<div class="menu-bars">
						<img src="<?php echo THEMEPATH; ?>images/Bars.svg">
					</div>
					<div class="menu-caja">
						<p class="chosen"></p>
						<a href="<?php echo site_url('que-somos/')?>" class="somos"><?php _e('¿qué somos?','limulus'); ?></a>
						<?php get_qtrans_single('lang_change');?>
						<ul class="menu-redes social_bar">
							<li class="twitter"><a href="https://twitter.com/limulus_mx" target="_blank"></a></li>
							<li class="facebook"><a href="http://www.facebook.com/revistalimulus" target="_blank"></a></li>
							<li class="instagram"><a href="https://www.instagram.com/limulusmx/" target="_blank"></a></li>
						</ul>
					</div>

				</div><!-- renglon -->

				
				
			</nav><!-- header_menu -->

		</header><!-- main header -->
