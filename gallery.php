<?php
/*
Template Name: Gallery
 */
?>



<?php get_header();?>
<main>
<div class="container-gallery">
    <div class="container-gallery__title">
        <h2>Окремі сюжети</h2>
    </div>
    <div class="container-gallery__sub-title">
        <h3>Si no hay nadie más trendy que tú, esto te interesa. Te traemos nuevas piezas de diseño cada semana para que tu casa encaje a la perfección con tu estilo de vida. </h3>
    </div>
    <div class="container-gallery__continer-items container">
    <!-- <?php
global $post;

$myposts = get_posts([
    'posts_per_page' => '-1',
    'category_name' => '',
    'post_type' => 'gallerys',

]);

foreach ($myposts as $post) {
    setup_postdata($post);
    ?>
            <div class="item widget item">
                <a href="<?php the_permalink();?>">
                <div class="item__pic">
                        <?php the_post_thumbnail();?>
                    </div>
                    <div class="item__info">
                        <div class="name"><?php the_title();?></div>
                    </div>
                </a>

            </div>

            <?php
}
wp_reset_postdata();
?> -->

<div class="container-gallery__continer-items container">

<?php echo do_shortcode('[ajax_load_more container_type="div"
post_type=" gallerys"
 posts_per_page="8"
  button_label="' . esc_attr(pll__('Load More')) . '"
  placeholder="true" scroll="false"] '); ?>
</div>
    </div>
</div>


</main>

<?php get_footer();?>

