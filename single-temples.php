

<?php get_header();?>
<main>
<div class="container-gallery">
    <div class="container-gallery__single-title">
<h3>окремі сюжети</h3>
    </div>
    <div class="container-gallery__title">
        <h2><?php the_title();?></h2>
    </div>
    <div class="container-gallery__content">
<p><?php the_content();?></p>
</div>
    <div class="container-gallery__continer-items">
    <?php
$gallery = carbon_get_post_meta(get_the_ID(), 'crb_media_gallery');

foreach ($gallery as $i => $image) {
    $image_alt = get_post_meta($image, '_wp_attachment_image_alt', true);
    $image_content = get_post_field('post_content', $image);

    echo ' <div class="item widget">';
    echo '<a class="image-item widget" data-fancybox="gallery"   alt="' . $image_alt . '"   data-caption="' . $image_content . '"  href="' . wp_get_attachment_url($image) . '"> ';
    echo '<img data-src="' . esc_url(wp_get_attachment_image_url($image, "medium_large")) . '" class="">';
    echo '</a>';
    echo '</div>';
}
?>
    </div>
</div>
</main>
<?php get_footer();?>