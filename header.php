<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-57x57.png?v=XBqgOgWAye">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-60x60.png?v=XBqgOgWAye">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-72x72.png?v=XBqgOgWAye">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-76x76.png?v=XBqgOgWAye">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-114x114.png?v=XBqgOgWAye">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-120x120.png?v=XBqgOgWAye">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-144x144.png?v=XBqgOgWAye">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-152x152.png?v=XBqgOgWAye">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-180x180.png?v=XBqgOgWAye">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png?v=XBqgOgWAye" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/android-chrome-192x192.png?v=XBqgOgWAye" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-96x96.png?v=XBqgOgWAye" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png?v=XBqgOgWAye" sizes="16x16">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/icons/manifest.json?v=XBqgOgWAye">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico?v=XBqgOgWAye">
		<meta name="msapplication-TileColor" content="#ffc40d">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img//mstile-144x144.png?v=XBqgOgWAye">
		<meta name="theme-color" content="#ffffff">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<meta name="google-site-verification" content="vDldbP1v74NDTKdskFbW8fKEQ9Dh1eoBd4inPaXMOZY" />
		
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i" rel="stylesheet">
		
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=496954640472113";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-78732100-1', 'auto');
		  ga('send', 'pageview');
		</script>

		<?php wp_head(); ?>
		
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	
	<body <?php body_class(); ?>>
	
		<?php edit_post_link(); ?>

		<div class="site-wrapper">
		
			<header id="header">		
				<div class="sub-header">
					<div class="logo">
						<?php if ( get_theme_mod( 'custom_logo' ) ) : ?>
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
								<img src='<?php echo esc_url( get_theme_mod( 'custom_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
							</a>
						<?php endif ?>
					</div>
					
					<div class="mobile">
						<div class="mobile-btn mainmenu-tggl"></div>
					</div>
					
					<div class="mainmenu-wrap">
						<nav class="mainmenu" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
						
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-8')) ?>
					</div>
				</div>

				<div class="banner" style="background-image: url(<?php header_image(); ?>);">
					<div class="banner-header sm">
						<a href="https://www.facebook.com/blackstickycrafts" title="Blackstickycrafts Facebook" target="_blank" class="sm-box sm-fb"></a>
						<a href="https://twitter.com/blacksticky" title="@blacksticky Twitter" target="_blank" class="sm-box sm-tw"></a>
						<a href="https://www.instagram.com/smallblacksticky/" title="Blacksticky Instagram" target="_blank" class="sm-box sm-ins"></a>
						<a href="https://www.youtube.com/user/smallblacksticky/" title="Smallblacksticky Youtube" target="_blank" class="sm-box sm-yt"></a>
					</div>
					
					<br class="clear" />
				</div>
				
			</header>