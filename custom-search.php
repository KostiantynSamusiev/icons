<?php
// Define your custom search query here
$search_query = new WP_Query(array(
    'post_type' => 'post', // Change 'post' to your custom post type if needed
    's' => get_search_query(),
));

// Display search results
if ($search_query->have_posts()) {
    while ($search_query->have_posts()) {
        $search_query->the_post();
        // Customize how each search result is displayed
        // Example: the_title(), the_permalink(), the_excerpt()
    }
} else {
    echo 'No results found';
}

// Restore original post data
wp_reset_postdata();
