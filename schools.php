<?php
/*
Template Name: Schools
 */
?>


<?php get_header();?>
<main>
<div class="container-gallery">
    <div class="container-gallery__title">
        <h2>Школи</h2>
    </div>
    <div class="container-gallery__sub-title">
        <h3>Si no hay nadie más trendy que tú, esto te interesa. Te traemos nuevas piezas de diseño cada semana para que tu casa encaje a la perfección con tu estilo de vida. </h3>
    </div>
    <div class="container-gallery__continer-items">
    <?php
global $post;

$myposts = get_posts([
    'posts_per_page' => '-1',
    'category_name' => '',
    'post_type' => 'schools',
]);

foreach ($myposts as $post) {
    setup_postdata($post);
    ?>
            <div class="item widget">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail();?>
                    <div class="item__info">
                        <div class="name"><?php the_title();?></div>
                    </div>
                </a>

            </div>
            <?php
}
wp_reset_postdata();
?>
    </div>
</div>
</main>

<?php get_footer();?>

