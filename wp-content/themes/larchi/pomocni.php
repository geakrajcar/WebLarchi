<div id="splashscreen">
<img class="enter-link" src="<?php echo get_theme_mod('splashscreen', get_bloginfo('template_url').'/img/splashscreen.png'); ?>" alt="Larchi">
<div class="offset-md-1 splashscreen-div-txt enter-link">
  <h1 class="splashscreen-heading"><?php echo get_theme_mod('splashscreen-heading', 'Fall into <br /> my world...'); ?></h1>
  <h5 class="h5-mini">...and enjoy the ride <a href="#" role="button" class="splashscreen-btn btn btn-default btn-circle btn-xl"><i class="fa fa-chevron-down"></i>  </a></h5>
</div>

</div>
/*
* CUSTOMIZE SHOWCASE - heading, text, button
*/

//index.php
<p><?php echo get_theme_mod('showcase_text', 'Custom text'); ?></p>
<a href='<?php echo get_theme_mod('btn_url', 'https://test.com'); ?>' class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Read more'); ?></a>

//customizer.php

$wp_customize->add_setting('showcase_heading', array(
  'default'   => _x('Custom Bootstrap Wordpress Theme', 'wpbootstrap'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('showcase_heading', array(
  'label'   => __('Heading', 'wpbootstrap'),
  'section' => 'showcase',
  'priority'  => 2
));
$wp_customize->add_setting('showcase_text', array(
  'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'wpbootstrap'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('showcase_text', array(
  'label'   => __('Text', 'wpbootstrap'),
  'section' => 'showcase',
  'priority'  => 3
));
$wp_customize->add_setting('btn_url', array(
  'default'   => _x('http://test.com', 'wpbootstrap'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('btn_url', array(
  'label'   => __('Button URL', 'wpbootstrap'),
  'section' => 'showcase',
  'priority'  => 4
));
$wp_customize->add_setting('btn_text', array(
  'default'   => _x('Read More', 'wpbootstrap'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('btn_text', array(
  'label'   => __('Button Text', 'wpbootstrap'),
  'section' => 'showcase',
  'priority'  => 5
));
