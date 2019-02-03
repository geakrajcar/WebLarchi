<?php
  // Register Custom Navigation Walker
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

  //Nav Menus
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'larchi' ),
  ) );

  //Custom logo
  add_theme_support( 'custom-logo' );
  
  function theme_setup() {
    //Custom logo
    $defaults = array(
        'height'      => 55,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'Larchi arts', 'Designer & illustrator' ),
    );
    add_theme_support( 'custom-logo', $defaults );

    //Featured Image support
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(900,600);

    //Post Format Support
    add_theme_support('post-formats', array('gallery'));
  }
  add_action( 'after_setup_theme', 'theme_setup' );

  // Customizer file
  require get_template_directory(). '/inc/customizer.php';
?>
