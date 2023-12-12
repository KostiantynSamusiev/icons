<?php
/*
Template Name: Books
 */
?>

<?php get_header();?>
<main>
    <div class="container-gallery">
        <div class="container-gallery__title">
            <h2>Окремі сюжети</h2>
        </div>
        <div class="container-gallery__sub-title">
            <h3>Si no hay nadie más trendy que tú, esto te interesa. Te traemos nuevas piezas de diseño cada semana para
                que tu casa encaje a la perfección con tu estilo de vida. </h3>
        </div>
        <div class="container-gallery__continer-items books-container">
            <?php
global $post;

$myposts = get_posts([
    'posts_per_page' => '-1',
    'category_name' => '',
    'post_type' => 'books',
]);

foreach ($myposts as $post) {
    setup_postdata($post);
    ?>
            <div class="item widget">
                <a href="<?php echo carbon_get_post_meta(get_the_ID(), 'crb_price_list'); ?>" >
                    <div class="item__pic book-pic">
                        <?php the_post_thumbnail();?>
                    </div>
                    <div class="item__info">
                        <div class="name"><?php the_title();?></div>
                    </div>
                    <div class="icon">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/pdf-icon.svg" alt="">
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