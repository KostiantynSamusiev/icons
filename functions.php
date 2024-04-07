<?php
add_action('wp_enqueue_scripts', 'iconsTheme_styles');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('init', 'register_post_types');
add_action('wp_footer', 'iconsTheme_scripts');

function register_post_types()
{

    register_post_type('Plots', [
        'taxonomies' => [], // post related taxonomiesk
        'label' => null,
        'labels' => [
            'name' => 'Plots', // name for the post type.
            'singular_name' => 'Plots', // name for single post of that type.
            'add_new' => 'Add Plots', // to add a new post.
            'add_new_item' => 'Adding Plots', // title for a newly created post in the admin panel.
            'edit_item' => 'Edit Plots', // for editing post type.
            'new_item' => 'New Plots', // new post's text.
            'view_item' => 'See Plots', // for viewing this post type.
            'search_items' => 'Search Plots', // search for these post types.
            'not_found' => 'Not Found', // if search has not found anything.
            'parent_item_colon' => '', // for parents (for hierarchical post types).
            'menu_name' => 'Plots', // menu name.
        ],
        'description' => 'Our Plots',
        'public' => true,
        'publicly_queryable' => true, // depends on public
        'exclude_from_search' => true, // depends on public
        'show_ui' => true, // depends on public
        'show_in_nav_menus' => true, // depends on public
        'show_in_menu' => null, // whether to in admin panel menu
        //'show_in_admin_bar'   => null, // depends on show_in_menu.
        'show_in_rest' => null, // Add to REST API. WP 4.7.
        'rest_base' => null, // $post_type. WP 4.7.
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-customizer',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical' => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports' => ['title', 'editor', 'thumbnail', 'post-formats'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('Temples', [
        'taxonomies' => [], // post related taxonomiesk
        'label' => null,
        'labels' => [
            'name' => 'Temples', // name for the post type.
            'singular_name' => 'Temples', // name for single post of that type.
            'add_new' => 'Add Temples', // to add a new post.
            'add_new_item' => 'Adding Temples', // title for a newly created post in the admin panel.
            'edit_item' => 'Edit Temples', // for editing post type.
            'new_item' => 'New Temples', // new post's text.
            'view_item' => 'See Temples', // for viewing this post type.
            'search_items' => 'Search Temples', // search for these post types.
            'not_found' => 'Not Found', // if search has not found anything.
            'parent_item_colon' => '', // for parents (for hierarchical post types).
            'menu_name' => 'Temples', // menu name.
        ],
        'description' => 'Our Temples',
        'public' => true,
        'publicly_queryable' => true, // depends on public
        'exclude_from_search' => true, // depends on public
        'show_ui' => true, // depends on public
        'show_in_nav_menus' => true, // depends on public
        'show_in_menu' => null, // whether to in admin panel menu
        //'show_in_admin_bar'   => null, // depends on show_in_menu.
        'show_in_rest' => null, // Add to REST API. WP 4.7.
        'rest_base' => null, // $post_type. WP 4.7.
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-customizer',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical' => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports' => ['title', 'editor', 'thumbnail', 'post-formats'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('Museums', [
        'taxonomies' => [], // post related taxonomiesk
        'label' => null,
        'labels' => [
            'name' => 'Museums', // name for the post type.
            'singular_name' => 'Museums', // name for single post of that type.
            'add_new' => 'Add Museums', // to add a new post.
            'add_new_item' => 'Adding Museums', // title for a newly created post in the admin panel.
            'edit_item' => 'Edit Museums', // for editing post type.
            'new_item' => 'New Museums', // new post's text.
            'view_item' => 'See Museums', // for viewing this post type.
            'search_items' => 'Search Museums', // search for these post types.
            'not_found' => 'Not Found', // if search has not found anything.
            'parent_item_colon' => '', // for parents (for hierarchical post types).
            'menu_name' => 'Museums', // menu name.
        ],
        'description' => 'Our Museums',
        'public' => true,
        'publicly_queryable' => true, // depends on public
        'exclude_from_search' => true, // depends on public
        'show_ui' => true, // depends on public
        'show_in_nav_menus' => true, // depends on public
        'show_in_menu' => null, // whether to in admin panel menu
        //'show_in_admin_bar'   => null, // depends on show_in_menu.
        'show_in_rest' => null, // Add to REST API. WP 4.7.
        'rest_base' => null, // $post_type. WP 4.7.
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-customizer',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical' => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports' => ['title', 'editor', 'thumbnail', 'post-formats'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('Fragments', [
        'taxonomies' => [], // post related taxonomiesk
        'label' => null,
        'labels' => [
            'name' => 'Fragments', // name for the post type.
            'singular_name' => 'Fragments', // name for single post of that type.
            'add_new' => 'Add Fragments', // to add a new post.
            'add_new_item' => 'Adding Fragments', // title for a newly created post in the admin panel.
            'edit_item' => 'Edit Fragments', // for editing post type.
            'new_item' => 'New Fragments', // new post's text.
            'view_item' => 'See Fragments', // for viewing this post type.
            'search_items' => 'Search Fragments', // search for these post types.
            'not_found' => 'Not Found', // if search has not found anything.
            'parent_item_colon' => '', // for parents (for hierarchical post types).
            'menu_name' => 'Fragments', // menu name.
        ],
        'description' => 'Our Fragments',
        'public' => true,
        'publicly_queryable' => true, // depends on public
        'exclude_from_search' => true, // depends on public
        'show_ui' => true, // depends on public
        'show_in_nav_menus' => true, // depends on public
        'show_in_menu' => null, // whether to in admin panel menu
        //'show_in_admin_bar'   => null, // depends on show_in_menu.
        'show_in_rest' => null, // Add to REST API. WP 4.7.
        'rest_base' => null, // $post_type. WP 4.7.
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-customizer',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical' => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports' => ['title', 'editor', 'thumbnail', 'post-formats'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('Schools', [
        'taxonomies' => [], // post related taxonomiesk
        'label' => null,
        'labels' => [
            'name' => 'Schools', // name for the post type.
            'singular_name' => 'Schools', // name for single post of that type.
            'add_new' => 'Add School', // to add a new post.
            'add_new_item' => 'Adding School', // title for a newly created post in the admin panel.
            'edit_item' => 'Edit School', // for editing post type.
            'new_item' => 'New School', // new post's text.
            'view_item' => 'See School', // for viewing this post type.
            'search_items' => 'Search School', // search for these post types.
            'not_found' => 'Not Found', // if search has not found anything.
            'parent_item_colon' => '', // for parents (for hierarchical post types).
            'menu_name' => 'Schools', // menu name.
        ],
        'description' => 'Our Schools',
        'public' => true,
        'publicly_queryable' => true, // depends on public
        'exclude_from_search' => true, // depends on public
        'show_ui' => true, // depends on public
        'show_in_nav_menus' => true, // depends on public
        'show_in_menu' => null, // whether to in admin panel menu
        //'show_in_admin_bar'   => null, // depends on show_in_menu.
        'show_in_rest' => null, // Add to REST API. WP 4.7.
        'rest_base' => null, // $post_type. WP 4.7.
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-customizer',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical' => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports' => ['title', 'editor', 'thumbnail', 'post-formats'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('Iconography', [
        'taxonomies' => [], // post related taxonomiesk
        'label' => null,
        'labels' => [
            'name' => 'Iconography', // name for the post type.
            'singular_name' => 'Iconography', // name for single post of that type.
            'add_new' => 'Add Iconography', // to add a new post.
            'add_new_item' => 'Adding Iconography', // title for a newly created post in the admin panel.
            'edit_item' => 'Edit Iconography', // for editing post type.
            'new_item' => 'New Iconography', // new post's text.
            'view_item' => 'See Iconography', // for viewing this post type.
            'search_items' => 'Search Iconography', // search for these post types.
            'not_found' => 'Not Found', // if search has not found anything.
            'parent_item_colon' => '', // for parents (for hierarchical post types).
            'menu_name' => 'Iconography', // menu name.
        ],
        'description' => 'Our Iconography',
        'public' => true,
        'publicly_queryable' => true, // depends on public
        'exclude_from_search' => true, // depends on public
        'show_ui' => true, // depends on public
        'show_in_nav_menus' => true, // depends on public
        'show_in_menu' => null, // whether to in admin panel menu
        //'show_in_admin_bar'   => null, // depends on show_in_menu.
        'show_in_rest' => null, // Add to REST API. WP 4.7.
        'rest_base' => null, // $post_type. WP 4.7.
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-customizer',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical' => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports' => ['title', 'editor', 'thumbnail', 'post-formats'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('Masters', [
        'taxonomies' => [], // post related taxonomiesk
        'label' => null,
        'labels' => [
            'name' => 'Masters', // name for the post type.
            'singular_name' => 'Masters', // name for single post of that type.
            'add_new' => 'Add Master', // to add a new post.
            'add_new_item' => 'Adding Master', // title for a newly created post in the admin panel.
            'edit_item' => 'Edit Master', // for editing post type.
            'new_item' => 'New Master', // new post's text.
            'view_item' => 'See Master', // for viewing this post type.
            'search_items' => 'Search Master', // search for these post types.
            'not_found' => 'Not Found', // if search has not found anything.
            'parent_item_colon' => '', // for parents (for hierarchical post types).
            'menu_name' => 'Masters', // menu name.
        ],
        'description' => 'Our Masters',
        'public' => true,
        'publicly_queryable' => true, // depends on public
        'exclude_from_search' => true, // depends on public
        'show_ui' => true, // depends on public
        'show_in_nav_menus' => true, // depends on public
        'show_in_menu' => null, // whether to in admin panel menu
        //'show_in_admin_bar'   => null, // depends on show_in_menu.
        'show_in_rest' => null, // Add to REST API. WP 4.7.
        'rest_base' => null, // $post_type. WP 4.7.
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-customizer',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical' => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports' => ['title', 'editor', 'thumbnail', 'post-formats'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('Books', [
        'taxonomies' => [], // post related taxonomiesk
        'label' => null,
        'labels' => [
            'name' => 'Books', // name for the post type.
            'singular_name' => 'Books', // name for single post of that type.
            'add_new' => 'Add Book', // to add a new post.
            'add_new_item' => 'Adding Book', // title for a newly created post in the admin panel.
            'edit_item' => 'Edit Book', // for editing post type.
            'new_item' => 'New Book', // new post's text.
            'view_item' => 'See Book', // for viewing this post type.
            'search_items' => 'Search Book', // search for these post types.
            'not_found' => 'Not Found', // if search has not found anything.
            'parent_item_colon' => '', // for parents (for hierarchical post types).
            'menu_name' => 'Books', // menu name.
        ],
        'description' => 'Our Books',
        'public' => true,
        'publicly_queryable' => true, // depends on public
        'exclude_from_search' => true, // depends on public
        'show_ui' => true, // depends on public
        'show_in_nav_menus' => true, // depends on public
        'show_in_menu' => null, // whether to in admin panel menu
        //'show_in_admin_bar'   => null, // depends on show_in_menu.
        'show_in_rest' => null, // Add to REST API. WP 4.7.
        'rest_base' => null, // $post_type. WP 4.7.
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-customizer',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical' => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports' => ['title', 'editor', 'thumbnail', 'post-formats'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('Articles', [
        'taxonomies' => [], // post related taxonomiesk
        'label' => null,
        'labels' => [
            'name' => 'Articles', // name for the post type.
            'singular_name' => 'Articles', // name for single post of that type.
            'add_new' => 'Add Article', // to add a new post.
            'add_new_item' => 'Adding Article', // title for a newly created post in the admin panel.
            'edit_item' => 'Edit Article', // for editing post type.
            'new_item' => 'New Article', // new post's text.
            'view_item' => 'See Article', // for viewing this post type.
            'search_items' => 'Search Article', // search for these post types.
            'not_found' => 'Not Found', // if search has not found anything.
            'parent_item_colon' => '', // for parents (for hierarchical post types).
            'menu_name' => 'Articles', // menu name.
        ],
        'description' => 'Our Articles',
        'public' => true,
        'publicly_queryable' => true, // depends on public
        'exclude_from_search' => true, // depends on public
        'show_ui' => true, // depends on public
        'show_in_nav_menus' => true, // depends on public
        'show_in_menu' => null, // whether to in admin panel menu
        //'show_in_admin_bar'   => null, // depends on show_in_menu.
        'show_in_rest' => null, // Add to REST API. WP 4.7.
        'rest_base' => null, // $post_type. WP 4.7.
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-customizer',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical' => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports' => ['title', 'editor', 'thumbnail', 'post-formats'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);
}

function theme_register_nav_menu()
{
    register_nav_menu('top', 'Меню в шапці');
    register_nav_menu('footer', 'Меню в підвалі');
    add_theme_support('post-thumbnails', array('post', 'plots', 'schools', 'iconography', 'masters', 'books', 'temples', 'museums', 'fragments'));

}

function iconsTheme_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('reset-all-styles', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('fontMontserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap');
    wp_enqueue_style('fontAWESOME', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
    wp_enqueue_style('fontKyiv', get_template_directory_uri() . '/assets/fonts/stylesheet.css');
    wp_enqueue_style('owlCarousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('owlCarouselCss', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
    wp_enqueue_style('my-styles', get_template_directory_uri() . '/assets/css/main.css');

};

function iconsTheme_scripts()
{
    wp_enqueue_script('OWL', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
    wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/main.min.js');
};

// add Carbon Field plugin
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    Container::make('post_meta', 'Image gallery')
        ->where('post_type', '=', 'plots')
        ->or_where('post_type', '=', 'schools')
        ->or_where('post_type', '=', 'temples')
        ->or_where('post_type', '=', 'fragments')
        ->or_where('post_type', '=', 'museums')
        ->or_where('post_type', '=', 'iconography')
        ->or_where('post_type', '=', 'masters')

        ->add_fields(array(
            Field::make('media_gallery', 'crb_media_gallery', 'Gallery')
                ->set_type(array('image', 'video')),

        ));

    Container::make('post_meta', 'Books')
        ->where('post_type', '=', 'books')
        ->or_where('post_type', '=', 'articles')

        ->add_fields(array(
            Field::make('file', 'crb_price_list', 'Price list (PDF)')
                ->set_value_type('url'),
        ));

}

add_action('init', 'polylang_strings');

function polylang_strings()
{

    if (!function_exists('pll_register_string')) {
        return;
    }
    pll_register_string(
        'temples_gallery_title', // название строки
        'Temples gallery title', // сама строка
        'First page', // категория для удобства
        false// будут ли тут переносы строк в тексте или нет
    );

    pll_register_string(
        'temples_gallery_sub-title', // название строки
        'Temples gallery sub title', // сама строка
        'First page', // категория для удобства
        true// будут ли тут переносы строк в тексте или нет
    );

    pll_register_string(
        'gallery_title', // название строки
        'Gallery title', // сама строка
        'First page', // категория для удобства
        false// будут ли тут переносы строк в тексте или нет
    );

    pll_register_string(
        'iconography_title', // название строки
        'Iconography title', // сама строка
        'First page', // категория для удобства
        false// будут ли тут переносы строк в тексте или нет
    );

    pll_register_string(
        'schools_title', // название строки
        'Schools title', // сама строка
        'First page', // категория для удобства
        false// будут ли тут переносы строк в тексте или нет
    );

    pll_register_string(
        'masters_title', // название строки
        'Masters title', // сама строка
        'First page', // категория для удобства
        false// будут ли тут переносы строк в тексте или нет
    );

    pll_register_string(
        'articles_title', // название строки
        'Articles title', // сама строка
        'First page', // категория для удобства
        false// будут ли тут переносы строк в тексте или нет
    );

    pll_register_string(
        'books_title', // название строки
        'Books title', // сама строка
        'First page', // категория для удобства
        false// будут ли тут переносы строк в тексте или нет
    );

    pll_register_string(
        'btn_title', // название строки
        'Button title', // сама строка
        'First page', // категория для удобства
        false// будут ли тут переносы строк в тексте или нет
    );

    pll_register_string(
        'seatch_title', // название строки
        'Search title', // сама строка
        'First page', // категория для удобства
        false// будут ли тут переносы строк в тексте или нет
    );

}

/* search */
function my_cptui_add_post_type_to_search($query)
{
    if ($query->is_search()) {
        // Replace these slugs with the post types you want to include.
        $cptui_post_types = array('iconography', 'plots', 'masters', 'schools', 'articles', 'books', 'temples', 'museums', 'fragments');

        $query->set(
            'post_type',
            array_merge(
                array('post'),
                $cptui_post_types
            )
        );
    }
}
add_filter('pre_get_posts', 'my_cptui_add_post_type_to_search');
