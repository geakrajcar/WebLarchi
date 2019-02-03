<?php
  function wpb_customize_register($wp_customize){
    // Showcase Section
    $wp_customize->add_section('showcase', array(
      'title'   => __('Showcase', 'larchi'),
      'description' => sprintf(__('Options for showcase','larchi')),
      'priority'    => 130
    ));
    $wp_customize->add_setting('splashscreen', array(
      'default'   => get_bloginfo('template_directory').'/img/splashscreen.png',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'splashscreen', array(
      'label'   => __('Splash screen', 'larchi'),
      'section' => 'showcase',
      'settings' => 'splashscreen',
      'priority'  => 1
    )));
    $wp_customize->add_setting('splashscreen-heading', array(
      'default'   => _x('Fall into<br /> my world...', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('splashscreen-heading', array(
      'label'   => __('Splashscreen heading', 'larchi'),
      'section' => 'showcase',
      'priority'  => 2
    ));
    $wp_customize->add_setting('splashscreen-txt', array(
      'default'   => _x('...and enjoy the ride', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('splashscreen-txt', array(
      'label'   => __('Splashscreen btn txt', 'larchi'),
      'section' => 'showcase',
      'priority'  => 3
    ));
    $wp_customize->add_setting('showcase_image', array(
      'default'   => get_bloginfo('template_directory').'/img/showcase.png',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => __('Showcase Image', 'larchi'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority'  => 4
    )));
    $wp_customize->add_setting('showcase-heading', array(
      'default'   => _x('Part of me', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase-heading', array(
      'label'   => __('Heading', 'larchi'),
      'section' => 'showcase',
      'priority'  => 5
    ));
    $wp_customize->add_setting('showcase-txt', array(
      'default'   => _x('HI, I’M LARA, A CREATIVE MIND, A PROFESSIONAL DAY DREAMER AND MOST OF ALL A PASSIONATE DIGITAL AND GRAPHIC DESIGNER AND SELF-TAUGHT DIGITAL ILLUSTRATOR.', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase-txt', array(
      'label'   => __('Showcase text', 'larchi'),
      'section' => 'showcase',
      'priority'  => 6
    ));
    $wp_customize->add_setting('showcase-career', array(
      'default'   => _x('Career', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase-career', array(
      'label'   => __('Career - Heading', 'larchi'),
      'section' => 'showcase',
      'priority'  => 7
    ));
    $wp_customize->add_setting('showcase-career-txt', array(
      'default'   => _x('I grew up in tiny little Zagreb and since I was a little girl I loved to create beautiful handmade items and to draw whimsical things. </br>I studied at Faculty of Graphic Arts in Zagreb | Croatia. </br>I worked 2 years in agency before becoming a freelancer.', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase-career-txt', array(
      'label'   => __('Career text', 'larchi'),
      'section' => 'showcase',
      'priority'  => 8
    ));

    $wp_customize->add_setting('showcase-illustrations-heading', array(
      'default'   => _x('Illustrations', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase-illustrations-heading', array(
      'label'   => __('Illustrations - Heading', 'larchi'),
      'section' => 'showcase',
      'priority'  => 9
    ));

    $wp_customize->add_setting('showcase-illustrations-txt', array(
      'default'   => _x('I always find it hard to place a description on my style. I feel it’s constantly evolving as I develop further as an Illustrator. If I had to put a label on it. It would be a strong use of character and nature empowered by dreamy and emotional situations.', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase-illustrations-txt', array(
      'label'   => __('Illustrations text', 'larchi'),
      'section' => 'showcase',
      'priority'  => 10
    ));
    $wp_customize->add_setting('showcase-illustrations-image1', array(
      'default'   => get_bloginfo('template_directory').'/img/show-illustration1.jpg',
      'type'      => 'theme_mod',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase-illustrations-image1', array(
      'label'   => __('Showcase Illustration big img', 'larchi'),
      'section' => 'showcase',
      'settings' => 'showcase-illustrations-image1',
      'priority'  => 11
    )));

    $wp_customize->add_setting('showcase-illustrations-image2', array(
      'default'   => get_bloginfo('template_directory').'/img/show-illustration2.jpg',
      'type'      => 'theme_mod',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase-illustrations-image2', array(
      'label'   => __('Showcase Illustration small img', 'larchi'),
      'section' => 'showcase',
      'settings' => 'showcase-illustrations-image2',
      'priority'  => 12
    )));

    //Books
    $wp_customize->add_setting('showcase-books', array(
      'default'   => _x('Books', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase-books', array(
      'label'   => __('Books - Heading', 'larchi'),
      'section' => 'showcase',
      'priority'  => 13
    ));
    $wp_customize->add_setting('showcase-books-txt', array(
      'default'   => _x('Making characters and story feel like they are living and breathing, telling their stories are the things I love about illustrating children’s books.', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase-books-txt', array(
      'label'   => __('Books text left', 'larchi'),
      'section' => 'showcase',
      'priority'  => 14
    ));
    $wp_customize->add_setting('showcase-books-txt2', array(
      'default'   => _x('A dream of mine was illustrating a children’s picture book. My first book as both writer and illustrator was “Talking Wood?”. Talking about environmental issues with young people can be tricky, but this short story can help start the conversation.', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase-books-txt2', array(
      'label'   => __('Books text right', 'larchi'),
      'section' => 'showcase',
      'priority'  => 15
    ));
    $wp_customize->add_setting('showcase-books-image', array(
      'default'   => get_bloginfo('template_directory').'/img/books.png',
      'type'      => 'theme_mod',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase-books-image', array(
      'label'   => __('Showcase Books image', 'larchi'),
      'section' => 'showcase',
      'settings' => 'showcase-books-image',
      'priority'  => 16
    )));

    $wp_customize->add_setting('showcase-contact', array(
      'default'   => _x('Say hello!', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase-contact', array(
      'label'   => __('Contact - Heading', 'larchi'),
      'section' => 'showcase',
      'priority'  => 17
    ));

    $wp_customize->add_setting('showcase-contact-txt', array(
      'default'   => _x('Please feel free to contact me via email', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase-contact-txt', array(
      'label'   => __('Contact - text', 'larchi'),
      'section' => 'showcase',
      'priority'  => 18
    ));

    $wp_customize->add_setting('showcase-contact-a', array(
      'default'   => _x('hello@larchi.hr', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase-contact-a', array(
      'label'   => __('Contact - email', 'larchi'),
      'section' => 'showcase',
      'priority'  => 19
    ));



    //Collaborations section
    $wp_customize->add_section('collab', array(
      'title'   => __('Showcase - Collaborations', 'larchi'),
      'description' => sprintf(__('Options for collaborations','larchi')),
      'priority'    => 131
    ));
    $wp_customize->add_setting('showcase-collab-heading', array(
      'default'   => _x('Collaborations', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase-collab-heading', array(
      'label'   => __('Collaborations - Heading', 'larchi'),
      'section' => 'collab',
      'priority'  => 1
    ));

    $wp_customize->add_setting('showcase-collab-txt', array(
      'default'   => _x('I have collaborated with a small network of beautiful people. We have had fun making creative things and we hope you enjoy them. :)', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase-collab-txt', array(
      'label'   => __('Collaborations text', 'larchi'),
      'section' => 'collab',
      'priority'  => 2
    ));
    $wp_customize->add_setting('carousel-item-heading1', array(
      'default'   => _x('collaboration with tvornica snova', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('carousel-item-heading1', array(
      'label'   => __('Item 1 - heading', 'larchi'),
      'section' => 'collab',
      'priority'  => 3
    ));
    $wp_customize->add_setting('carousel-item-txt1', array(
      'default'   => _x('I am a graphic designer and self-taught illustrator based in Croatia. I mostly work as a freelance designer, illustrator and visual artist, situated in my hometown (Zagreb).', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('carousel-item-txt1', array(
      'label'   => __('Item 1 - text', 'larchi'),
      'section' => 'collab',
      'priority'  => 4
    ));
    $wp_customize->add_setting('carousel-image1', array(
      'default'   => get_bloginfo('template_directory').'/img/carousel1.png',
      'type'      => 'theme_mod',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carousel-image1', array(
      'label'   => __('Item 1 - image', 'larchi'),
      'section' => 'collab',
      'settings' => 'carousel-image1',
      'priority'  => 5
    )));
    $wp_customize->add_setting('carousel-item-heading2', array(
      'default'   => _x('collaboration with tvornica snova', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('carousel-item-heading2', array(
      'label'   => __('Item 2 - heading', 'larchi'),
      'section' => 'collab',
      'priority'  => 6
    ));
    $wp_customize->add_setting('carousel-item-txt2', array(
      'default'   => _x('I am a graphic designer and self-taught illustrator based in Croatia. I mostly work as a freelance designer, illustrator and visual artist, situated in my hometown (Zagreb).', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('carousel-item-txt2', array(
      'label'   => __('Item 2 - text', 'larchi'),
      'section' => 'collab',
      'priority'  => 7
    ));
    $wp_customize->add_setting('carousel-image2', array(
      'default'   => get_bloginfo('template_directory').'/img/carousel2.png',
      'type'      => 'theme_mod',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carousel-image2', array(
      'label'   => __('Item 2 - image', 'larchi'),
      'section' => 'collab',
      'settings' => 'carousel-image2',
      'priority'  => 8
    )));
    $wp_customize->add_setting('carousel-item-heading3', array(
      'default'   => _x('collaboration with tvornica snova', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('carousel-item-heading3', array(
      'label'   => __('Item 3 - heading', 'larchi'),
      'section' => 'collab',
      'priority'  => 9
    ));
    $wp_customize->add_setting('carousel-item-txt3', array(
      'default'   => _x('I am a graphic designer and self-taught illustrator based in Croatia. I mostly work as a freelance designer, illustrator and visual artist, situated in my hometown (Zagreb).', 'larchi'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('carousel-item-txt3', array(
      'label'   => __('Item 3 - text', 'larchi'),
      'section' => 'collab',
      'priority'  => 10
    ));
    $wp_customize->add_setting('carousel-image3', array(
      'default'   => get_bloginfo('template_directory').'/img/carousel3.png',
      'type'      => 'theme_mod',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carousel-image3', array(
      'label'   => __('Item 3 - image', 'larchi'),
      'section' => 'collab',
      'settings' => 'carousel-image3',
      'priority'  => 11
    )));
  }
  add_action('customize_register', 'wpb_customize_register');
