<footer>
	<div class="footer">
		<div class="footer__top">
			<div class="logo block">
				<img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo-black.svg" alt="">
			</div>
			<div class="nav block">

				<?php wp_nav_menu(array(
    'theme_location' => 'footer',
    'menu' => '',
    'container' => 'nav',
    'container_class' => 'navigation',
    'menu_class' => 'nav',
    'menu_id' => 'nav',
))?>

			</div>
			<div class="soical-media block">
				<a href="">
					<img src="<?php echo bloginfo('template_url'); ?>/assets/img/facebook-icon.svg" alt="">
				</a>
				<a href="">
					<img src="<?php echo bloginfo('template_url'); ?>/assets/img/gmail-icon.svg" alt="">
				</a>
			</div>

		</div>
		<div class="footer__bottom bottom">
			<div class="bottom__language">
				<div class="title">
					<img src="<?php echo bloginfo('template_url'); ?>/assets/img/planet.svg" alt="">
					<p>Змінити мову</p>
				</div>
				<div class="translate">
					<ul><?php pll_the_languages(array('show_flags' => 0, 'show_names' => 0));?></ul>

				</div>
				<div class="coopyright">
					© Copyright 2023
				</div>
			</div>
		</div>
</footer>
</div>
<?php
wp_footer();
?>

</body>

</html>