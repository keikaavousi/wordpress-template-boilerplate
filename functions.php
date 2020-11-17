<?php
/**
 * Theme functions and definitions
 **/


/* Featured image support */
function theme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'theme_post_thumbnails' );




 /* Filter the except length to 20 characters.*/
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );




/* Pagination */
function custom_pagination($numpages = '', $pagerange = '', $paged = '') {

    if (empty($pagerange)) {
    $pagerange = 2;
    }

    global $paged;
    if (empty($paged)) {
    $paged = 1;
    }
    if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if (!$numpages) {
        $numpages = 1;
    }
    }

    $pagination_args = array(
    'base' => get_pagenum_link(1) . '%_%',
    'format' => 'page/%#%',
    'total' => $numpages,
    'current' => $paged,
    'show_all' => False,
    'end_size' => 1,
    'mid_size' => $pagerange,
    'prev_next' => True,
    'prev_text' => __('&laquo;'),
    'next_text' => __('&raquo;'),
    'type' => 'plain',
    'add_args' => false,
    'add_fragment' => ''
    );

    $paginate_links = paginate_links($pagination_args);

    if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
    echo "<span class='page-numbers page-num'>page " . $paged . " from " . $numpages . "</span> ";
    echo $paginate_links;
    echo "</nav>";
    }
}




/** Filter the "read more" excerpt string link to the post*/
function wpdocs_excerpt_more( $more ) {
    return sprintf( '...',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );




/* Menu */
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );



/* register Widget */
if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'mywidget',
		'id'   => 'mywidget',
		'description'   => 'This is a Sample widget area.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	));

}