<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url') ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_url') ?>/style.css" rel="stylesheet">
    <!-- Font Awesome & Google fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
          <div class="d-flex flex-grow-1">
              <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
              <!-- add position-fixed to navbar brand -->
              <a class="navbar-brand d-none d-lg-inline-block position-fixed" href="#">
                <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                        echo '<img src="'. esc_url( $logo[0] ) .'">';
                } else {
                        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                }
                ?>
              </a>

              <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
                <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                        echo '<img src="'. esc_url( $logo[0] ) .'">';
                } else {
                        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                }
                ?>
              </a>

              <div class="w-100 text-right">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
              </div>
          </div>

            <?php
            wp_nav_menu( array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse flex-grow-1 text-center',
              'container_id'      => 'myNavbar',
              'menu_class'        => 'navbar-nav ml-auto flex-nowrap',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
      </nav>
