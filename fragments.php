<?php
/*
Template Name: Fragments
 */
?>



<?php get_header();?>
<main>
<div class="container-gallery">
    <div class="container-gallery__title">
        <h2>						<?php echo esc_attr(pll__('Fragments gallery&single page title')) ?>
</h2>
    </div>
    <div class="container-gallery__sub-title">
        <h3><?php echo esc_attr(pll__('Fragments gallery sub title')) ?></h3>
    </div>
    <div class="container-gallery__continer-items container">

<div class="container-gallery__continer-items container">

<?php echo do_shortcode('[ajax_load_more container_type="div"
post_type="fragments"
 posts_per_page="8"
  button_label="' . esc_attr(pll__('Load More')) . '"
  placeholder="true" scroll="false"] '); ?>
</div>
    </div>
</div>


</main>

<?php get_footer();?>

