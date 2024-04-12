<?php
get_header();
?>



<main>
	<!-- MAIN INFO  -->
	<div class="main-info">
		<div class="main-info__title title">
			<img src="<?php echo bloginfo('template_url'); ?>/assets/img/title.svg" alt="">
		</div>
		<div class="main-info__sub-title">
			<h1>
				Перша онлайн-галерея українського сакрального мистецтва XI-XXI ст.
			</h1>
		</div>
	</div>

	<!-- GALLERY  -->
	<div class="gallery-block">
		<div class="gallery-block__title title">
			<h2><?php echo esc_attr(pll__('Gallery title')) ?></h2>
		</div>
		<div class="owl-carousel owl-theme" id="gallery">
			<div class="item owl-block"">

			<a href=" <?php echo get_the_permalink(pll_get_post(get_page_by_path('plots')->ID)); ?>">

				<img class="owl-item__bg" src="<?php echo bloginfo('template_url'); ?>/assets/img/start-01.jpg" alt="">

				<div class="owl-item__block-info">
					<p class="owl-item__title">
						<?php echo esc_attr(pll__('Plots gallery title')) ?>
					</p>

					<p class="owl-item__sub-title"><?php echo esc_attr(pll__('Plots gallery sub title')) ?></p>
				</div>
				</a>
			</div>
			<div class="item owl-block"">

			<a href=" <?php echo get_the_permalink(pll_get_post(get_page_by_path('museums')->ID)); ?>">

				<img class="owl-item__bg" src="<?php echo bloginfo('template_url'); ?>/assets/img/museums.jpg" alt="">

				<div class="owl-item__block-info">
					<p class="owl-item__title">
						<?php echo esc_attr(pll__('Plots gallery title')) ?>
					</p>

					<p class="owl-item__sub-title"><?php echo esc_attr(pll__('Plots gallery sub title')) ?></p>
				</div>
				</a>
			</div>
			<div class="item owl-block"">

				<a href=" <?php echo get_the_permalink(pll_get_post(get_page_by_path('temples')->ID)); ?>">

				<img class="owl-item__bg" src="<?php echo bloginfo('template_url'); ?>/assets/img/templates.jpg" alt="">

				<div class="owl-item__block-info">
					<p class="owl-item__title">
						<?php echo esc_attr(pll__('Plots gallery title')) ?>
					</p>

					<p class="owl-item__sub-title"><?php echo esc_attr(pll__('Plots gallery sub title')) ?></p>
				</div>
				</a>
			</div>
			<div class="item owl-block"">

				<a href=" <?php echo get_the_permalink(pll_get_post(get_page_by_path('fragments')->ID)); ?>">

				<img class="owl-item__bg" src="<?php echo bloginfo('template_url'); ?>/assets/img/fragments.jpg" alt="">

				<div class="owl-item__block-info">
					<p class="owl-item__title">
						<?php echo esc_attr(pll__('Plots gallery title')) ?>
					</p>

					<p class="owl-item__sub-title"><?php echo esc_attr(pll__('Plots gallery sub title')) ?></p>
				</div>
				</a>
			</div>
		</div>
	</div>

	<!-- ICONOGRAPHY -->
	<div class=" iconography">
		<div class="iconography__title title">
			<h2><?php echo esc_attr(pll__('Iconography title')) ?></h2>
		</div>
		<div class="iconography__container">
			<div class="left-block">
				<img class="left-block__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/iconography.jpg"
					alt="">

			</div>
			<div class="right-block">

				<div class="right-block__continer-posts">
					<?php
global $post;

$myposts = get_posts([
    'posts_per_page' => '3',
    'category_name' => '',
    'post_type' => 'iconography',
]);

foreach ($myposts as $post) {
    setup_postdata($post);
    ?>
					<div class="item  widget">
						<a href="<?php the_permalink();?>">
							<div class="item__info">
								<div class="name"><?php the_title();?></div>
								<div class="content"> <?php the_content();?></div>
							</div>
						</a>

					</div>

					<?php
}
wp_reset_postdata();
?>
				</div>

			</div>
		</div>
		<div class="iconography__btn btn-blck">
			<a
				href="<?php echo get_the_permalink(pll_get_post(get_page_by_path('iconography')->ID)); ?>"><?php echo esc_attr(pll__('Button title')) ?></a>
		</div>
	</div>

	<!-- SCHOOLS  -->
	<div class="schools">
		<div class="schools__title title">
			<h2><?php echo esc_attr(pll__('Schools title')) ?></h2>
		</div>
		<div class="container-gallery__continer-items owl-carousel owl-theme" id="schools">
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
		<div class="iconography__btn btn-wht">
			<a
				href="<?php echo get_the_permalink(pll_get_post(get_page_by_path('schools')->ID)); ?>"><?php echo esc_attr(pll__('Button title')) ?></a>
		</div>
	</div>

	<!-- MASTERS  -->
	<div class="masters">
		<div class="masters__title title">
			<h2><?php echo esc_attr(pll__('Masters title')) ?></h2>
		</div>
		<div class="iconography__container">
			<div class="left-block">
				<div class="container-gallery__continer-posts masters-container-posts">
					<?php
global $post;

$myposts = get_posts([
    'posts_per_page' => '-1',
    'category_name' => '',
    'post_type' => 'masters',
]);

foreach ($myposts as $post) {
    setup_postdata($post);
    ?>
					<div class="item widget">
						<a href="<?php the_permalink();?>">
							<div class="item__logo">
								<?php echo the_post_thumbnail('thumbnail', "medium_large"); ?>
							</div>
							<div class="item__info master-info">
								<div class="name"><?php the_title();?></div>
								<div class="content " <?php the_content();?>></div>
							</div>
						</a>

					</div>
					<?php
}
wp_reset_postdata();
?>
				</div>
			</div>
			<div class="right-block">
				<img class="left-block__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/masters.jpg"
					alt="">
			</div>
		</div>
		<div class="iconography__btn btn-wht">
			<a
				href="<?php echo get_the_permalink(pll_get_post(get_page_by_path('masters')->ID)); ?>"><?php echo esc_attr(pll__('Button title')) ?></a>
		</div>
	</div>

	<!-- ARTICLES  -->
	<div class="articles">
		<div class="articles__title title">
			<h2><?php echo esc_attr(pll__('Articles title')) ?></h2>
		</div>
		<div class="articles__container">
			<div class="left-block">

				<div class="container-gallery__continer-posts articles-container-posts">
					<?php
global $post;

$myposts = get_posts([
    'posts_per_page' => '3',
    'category_name' => '',
    'post_type' => 'articles',
]);

foreach ($myposts as $post) {
    setup_postdata($post);
    ?>
					<div class="item articrle widget">
						<a href="<?php echo carbon_get_post_meta(get_the_ID(), 'crb_price_list'); ?>">
							<div class="item__info">
								<div class="name"><?php the_title();?></div>
								<div class="content" <?php the_content();?>></div>
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
				<div class="articles__btn btn-blck">
					<a
						href="<?php echo get_the_permalink(pll_get_post(get_page_by_path('articles')->ID)); ?>"><?php echo esc_attr(pll__('Button title')) ?></a>


				</div>
			</div>
			<div class="right-block">
				<img class="left-block__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/articles.jpg"
					alt="">
			</div>

		</div>

	</div>

	<!-- SCHOOLS  -->
	<div class="books">
		<div class="books__title title">
			<h2><?php echo esc_attr(pll__('Books title')) ?></h2>
		</div>
		<div class="container-gallery__continer-items books-container owl-carousel owl-theme" id="books">
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
				<a href="<?php echo carbon_get_post_meta(get_the_ID(), 'crb_price_list'); ?>">
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
		<div class="iconography__btn btn-blck">
			<a
				href="<?php echo get_the_permalink(pll_get_post(get_page_by_path('books')->ID)); ?>"><?php echo esc_attr(pll__('Button title')) ?></a>
		</div>
	</div>

	</div>
</main><!-- #main -->

<?php
get_footer();