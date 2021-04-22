<?php 

/**
 * Enqueue the theme stylesheets
 */
function WPTheme06Hooks_styles() {

    // Enqueue google fonts https://fonts.googleapis.com/css?family=Open+Sans|varela+Round
    wp_enqueue_style( 'font-css', 'https://fonts.googleapis.com/css?family=Open+Sans|varela+Round' );

    // Enqueue main style sheet (make dependent on google fonts)
    wp_enqueue_style( 'main-css', get_stylesheet_uri(), ['font-css'], get_the_time() );

}

// Add WPTheme06Hooks_styles function to wp_enqueue_scripts action hook with a priority of 10
add_action('wp_enqueue_scripts', 'WPTheme06Hooks_styles', 10);

/**
 * Adde red more text to post excerpt
 * 
 * @param string $excerpt The post excerpt
 * @return string $extended_excerpt Post excerpt with read more link
 */
function WPTheme06Hooks_read_more_link($excerpt) {
    // Create a variable $extended_excerpt and assign it a value $excerpt
    $extended_excerpt = $excerpt;

    // Append a read more link using get_permalink() as the url
    $extended_excerpt .= '<a href="' . get_permalink() . '">';
    $extended_excerpt .= 'Read more &raquo;';
    $extended_excerpt .= '</a>';

    // Return $extended_excerpt
    return $extended_excerpt;
}

// Add WPTheme06Hooks_read_more_link function to the get_the_excerpt with a priority of 10
add_filter('get_the_excerpt', 'WPTheme06Hooks_read_more_link', 10);

?>