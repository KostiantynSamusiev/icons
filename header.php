<!doctype html>
<html <?php language_attributes();?>>

<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- OWL Carousel  -->


	<?php wp_head();?>
</head>



<body>
	<div class="wrapper">
		<header>
			<div class="header">
				<div class="header__language">
					<div class="title-header">
						<img src="<?php echo bloginfo('template_url'); ?>/assets/img/planet.svg" alt="">
						<p>Змінити мову</p>
					</div>
					<div class="translate">
						<ul><?php pll_the_languages(array('show_flags' => 0, 'show_names' => 0));?></ul>
					</div>
				</div>



				<div class="header__navigation">
					<a href="<?php echo pll_home_url(); ?>" class="logo">
						<img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.svg" alt="">
					</a>

					<div class="header__search">
					<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
		<label class="search-label">
			<span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span>
			<input type="search" class="search-field" placeholder="<?php echo esc_attr_x(pll__('Search title'), 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
		<input type="submit" class="search-submit" value=""/>

		</label>
	</form>
				</div>

					<?php wp_nav_menu(array(
    'theme_location' => 'top',
    'menu' => '',
    'container' => 'nav',
    'container_class' => 'navigation',
    'menu_class' => 'nav',
    'menu_id' => 'nav',
))?>

					<div class="burger-menu" id="nav-icon3">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
		</header>