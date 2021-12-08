<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/awesome/css/font-awesome-ie7.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body>

		<div class="navbar">
			<div class="genel">
					<div class="cizgi">
						<img src="<?php bloginfo('template_url'); ?>/img/cizgi.PNG" alt="" />
					</div>
					<div class="header">
						<div class="header2">
						<div class="sosyalmedya">
							<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/rss.png" height="32" width="32" alt="" /></a></li>
							<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/github.png" height="32" width="32" alt="" /></a></li>
							<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/instagram.png" height="32" width="32" alt="" /></a></li>
							<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/twitter.png" height="32" width="32" alt="" /></a></li>
							<li><a href="http://facebook.com/ismayiiil"><img src="<?php bloginfo('template_url'); ?>/img/facebook.png" height="32" width="32" alt="" /></a></li>
						</div>

						
						<ul class="menu">
							<?php wp_nav_menu(array('theme_location','header_menu'));?>
						</ul>
						<div class="logo">
							<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url'); ?>/img/logo1.png" height="60" width="150" alt="" /></a>
						</div>
						</div>

					</div>
						<div class="cizgi">
								<img src="<?php bloginfo('template_url'); ?>/img/cizgi.PNG" alt="" />
						</div>
			
				<!-- Header Div# -->