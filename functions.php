<?php
add_theme_support('menus');

function register_theme_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __('Primary Menu')
    )
  );
}
add_action('init', 'register_theme_menus');

function wpt_create_widget( $name, $id, $description ) {

    register_sidebar(array(
      'name' => __( $name ),
      'id' => $id,
      'description' => __( $description ),
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="module-heading">',
      'after_title' => '</h2>'
    ));

}

  wpt_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
  wpt_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );


function wpjs_theme_styles() {
  wp_enqueue_style( 'base_css', get_template_directory_uri(). '/css/base.css');
  wp_enqueue_style( 'grid_css', get_template_directory_uri(). '/css/grid.css');
}

add_action( 'wp_enqueue_scripts', 'wpjs_theme_styles');



function wpt_theme_js(){
  wp_enqueue_script('myscripts_js', get_template_directory_uri() . '/js/scripts.js', '', '', true);
}

add_action( 'wp_enqueue_scripts', 'wpt_theme_js');

?>
