<!doctype html>
<html lang="FR-fr">
<head>
	<meta charset="UTF-8">
	<title> <?php wp_title('-',true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<meta content="initial-scale=1; maximum-scale=1; user-scalable=0;" name="viewport">
</head>
<body>
	<header class="header">
		<div class="wrapper">
		<nav class="menu">
			<a class="menu-toggle" href="#main-menu"><span>menu</span></a>
			  <?php wp_nav_menu( array('theme_location' => 'menu', 'container' => '','menu-class' =>'menu-ul', 'container_id' => '', 'menu_id' =>'') ); ?>
			<a href="<?php echo site_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri();?>/img/logo86.png" alt=""><div class="logo-home"><div class="home"></div></div></a>
		</nav>
		</div>				
	</header>
		<div class="bg-img"></div>
			<aside class="sidebar-top">
		<div class="wrapper">
		<div class="community">			
				<ul class="share">
                    <li><a class="addthis_button_twitter " href="http://www.addthis.com/bookmark.php" title="Tweet"><img src="<?php echo get_template_directory_uri();?>/img/twitter.png" width="47" height="47"></a></li>
                    <li><a class="addthis_button_google_plusone_share " href="http://www.addthis.com/bookmark.php" target="_blank" title="Google+"><img src="<?php echo get_template_directory_uri();?>/img/googleplus.png" width="47" height="47"></a></li>
                    <li><a class="addthis_button_facebook " href="http://www.addthis.com/bookmark.php" title="Facebook"><img src="<?php echo get_template_directory_uri();?>/img/facebook.png" width="47" height="47"></a></li>
                </ul>
                <div class="members-login">
                	<p>Espace membres</p>
					<form action="">						
							<input type="text" name="login" class="members-login-input">
							<input type="text" name="mdp" class="members-login-input mdp">
							<input type="submit" value="GO!">
					</form>
				</div>
		</div>		
		</div>			
	</aside>