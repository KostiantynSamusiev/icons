<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package iconsTheme
 */

?>
<?php
wp_register_style('content-search', get_stylesheet_directory_uri() . '/src/css/content-search.css');
wp_enqueue_style('content-search', get_stylesheet_directory_uri() . '/src/css/content-search.css');
?>

<article id="post-<?php the_ID();?>" <?php post_class();?>>
	<header class="entry-header">
		<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');?>

<?php if (has_post_thumbnail()) { // условие, если есть миниатюра
    echo '<div class="pic">';
    echo the_post_thumbnail();
    echo '</div>';
}

?>
		<?php if ('post' === get_post_type()): ?>
		<div class="entry-meta">
			<?php
iconstheme_posted_on();
iconstheme_posted_by();
?>
		</div><!-- .entry-meta -->
		<?php endif;?>
	</header><!-- .entry-header -->


	<?php // iconstheme_post_thumbnail();?>

	<div class="entry-summary">
		<?php the_excerpt();?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php // iconstheme_entry_footer();?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID();?> -->

