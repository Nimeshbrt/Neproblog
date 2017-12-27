<?php
/* enqueue styles and scripts */
function jpen_enqueue_assets() {
  
  /* theme's primary style.css file */
    wp_enqueue_style( 'core', 'style.css', false ); 
  /* template's primary css file */
  wp_enqueue_style( 'clean-blog' , get_template_directory_uri() . '/clean-blog.css' );
  /* boostrap resources from theme files */
  wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
  wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' , array( 'jquery' ) , false , true );
}
add_action( 'wp_enqueue_scripts' , 'jpen_enqueue_assets' );
add_theme_support( 'post-thumbnails' ); 
add_image_size( 'home-image', 750, 450, array( 'center', 'center' )); //300 pixels wide (and unlimited height)
/* add theme menu area */
register_nav_menus (array(
  'primary' => 'Primary Menu',
));

?>