<?php get_header(); ?>

  <!-- Side Navigation -->
  <nav class="side-navigation" id="sideNav" align="right">
    <a class="navigation__link active" href="#nav-career">Career <i class="fa fa-circle-thin" aria-hidden="true"></i></a>
    <a class="navigation__link" href="#nav-work">Work <i class="fa fa-circle-thin" aria-hidden="true"></i></a>
    <a class="navigation__link " href="#nav-contact">Contact<i class="fa fa-circle-thin" aria-hidden="true"></i> </a>
  </nav>

    <section class="showcase">
      <!-- Intro Showcase -->
      <div class="row">
        <div class="offset-md-1 col-md-3">
          <h1 class="showcase-heading"><?php echo get_theme_mod('showcase-heading', 'Part of me'); ?></h1>
          <p class="showcase-txt">
            <?php echo get_theme_mod('showcase-txt', 'HI, I’M LARA, A CREATIVE MIND, A PROFESSIONAL DAY DREAMER AND MOST OF ALL A PASSIONATE DIGITAL AND GRAPHIC DESIGNER AND SELF-TAUGHT DIGITAL ILLUSTRATOR.'); ?>
          </p>
          <h5 class="h5-mini">scroll into my imagination <a href="#nav-career" role="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-angle-down"></i>  </a></h5>
        </div>
        <div class="offset-md-2 col-md-6 showcase-img-div">
          <img class="showcase-img" src="<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.png'); ?>" alt="Showcase image">
        </div>
      </div><!-- row -->

      <!-- Career -->
      <div class="row showcase-career nav-section" id="nav-career">
        <div class="offset-md-3 col-md-5">
          <h2><?php echo get_theme_mod('showcase-career', 'Career'); ?></h2>
          <div class="col-md-12 showcase-career-txt">
            <p class="big-line-height">
              <?php echo get_theme_mod('showcase-career-txt', 'I grew up in tiny little Zagreb and since I was a little girl I loved to create beautiful handmade items and to draw whimsical things. </br>I studied at Faculty of Graphic Arts in Zagreb | Croatia. </br> I worked 2 years in agency before becoming a freelancer.'); ?>
            </p>
        </div>
        </div>
      </div><!-- row -->


  <!-- Work -->
  <div class="nav-section" id="nav-work">
      <div class="row showcase-work">
        <div class="offset-md-6 col-md-4 col-lg-3">
          <h2><?php echo get_theme_mod('showcase-work-heading', 'Work'); ?></h2>
          <p class="showcase-work-txt big-line-height">
            <?php echo get_theme_mod('showcase-work-txt', 'I am a graphic designer and self-taught illustrator based in Croatia. I mostly work as a freelance designer, illustrator and visual artist, situated in my hometown (Zagreb).'); ?>
          </p>
          <hr align="left" class="mini-hr"/>
          <h5 class="h5-uppercase-no-link big-line-height">IF YOU ARE INTERESTED IN WORKING TOGETHER OR HAVE ANY QUESTIONS, PLEASE CHECK MY EMAIL ON THE CONTACT (INFO) PAGE.</h5>
        </div>
      </div><!-- row -->

      <section class="work-carousel carousel slide" data-ride="carousel" id="postsCarousel">
          <div class="container p-t-0 m-t-2 carousel-inner">
              <div class="row row-equal carousel-item active m-t-0">
                <div class="offset-md-1 col-md-1">
                  <h2>01</h2>
                  <h4 class="carousel-nav-sm">/ 03</h4>
                </div>
                <div class="col-md-4 d-block">
                  <h4 class="h4-uppercase"><?php echo get_theme_mod('carousel-item-heading1', 'collaboration with tvornica snova'); ?></h4>
                  <p class="big-line-height carousel-item-txt">
                    <?php echo get_theme_mod('carousel-item-txt1', 'I am a graphic designer and self-taught illustrator based in Croatia. I mostly work as a freelance designer, illustrator and visual artist, situated in my hometown (Zagreb).'); ?>
                  </p>
                </div>
                <div class="col-md-5">
                    <img class="carousel-img" src="<?php echo esc_url( get_theme_mod( 'carousel-image1' ) ); ?>" alt="Collab 1" >
                </div>
              </div><!-- row -->
              <div class="row row-equal carousel-item m-t-0">
                  <div class="offset-md-1 col-md-1">
                      <h2>02</h2>
                      <h4 class="carousel-nav-sm">/ 03</h4>
                  </div>
                  <div class="col-md-4 d-block">
                      <h4 class="h4-uppercase"><?php echo get_theme_mod('carousel-item-heading2', 'collaboration with tvornica snova'); ?></h4>
                      <p class="big-line-height carousel-item-txt">
				          <?php echo get_theme_mod('carousel-item-txt2', 'I am a graphic designer and self-taught illustrator based in Croatia. I mostly work as a freelance designer, illustrator and visual artist, situated in my hometown (Zagreb).'); ?>
                      </p>
                  </div>
                  <div class="col-md-5">
                      <img class="carousel-img" src="<?php echo esc_url( get_theme_mod( 'carousel-image2' ) ); ?>" alt="Collab 2" >
                  </div>
              </div><!-- row -->
              <div class="row row-equal carousel-item m-t-0">
                <div class="offset-md-1 col-md-1">
                  <h2>03</h2>
                  <h4 class="carousel-nav-sm">/ 03</h4>
                </div>
                <div class="col-md-4 d-block">
                  <h4 class="h4-uppercase"><?php echo get_theme_mod('carousel-item-heading3', 'collaboration with tvornica snova'); ?></h4>
                  <p class="big-line-height carousel-item-txt">
                    <?php echo get_theme_mod('carousel-item-txt3', 'I am a graphic designer and self-taught illustrator based in Croatia. I mostly work as a freelance designer, illustrator and visual artist, situated in my hometown (Zagreb).'); ?>
                  </p>
                </div>
                <div class="col-md-5">
                    <img class="carousel-img" src="<?php echo esc_url( get_theme_mod( 'carousel-image3' ) ); ?>" alt="Collab 1" >
                </div>
              </div><!-- row -->
          </div>

          <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-4">
                    <a href ="<?php echo get_page_link( get_page_by_title( work )->ID ); ?>" role ="button" class="btn btn-default btn-square h4-uppercase">
                        dive deeper into the projects
                    </a>
                </div>
                <div class="col-md-5 carousel-nav text-right">
                  <button type="button" href="#postsCarousel" class="btn btn-default btn-circle left carousel-control shadow-none" data-slide="prev"><i class="fa fa-angle-left"></i>  </button>
                  <button type="button" href="#postsCarousel" class="btn btn-default btn-circle right carousel-control shadow-none" data-slide="next"><i class="fa fa-angle-right"></i>  </button>
                </div>
            </div>
          </div>
      </section>
      </div> <!-- Nav section -->


      <!-- Contact -->
      <div class="row showcase-contact nav-section" id="nav-contact">
        <div class="offset-md-3 col-md-5">
          <h2><?php echo get_theme_mod('showcase-contact', 'Say hello!'); ?></h2>
          <div class="col-md-8 showcase-contact-txt">
            <p class="big-line-height">
              <?php echo get_theme_mod('showcase-contact-txt', 'Please feel free to contact me via email'); ?>
            </p>
            <p class="showcase-contact-a">
              <a><?php echo get_theme_mod('showcase-contact-a', 'hello@larchi.hr'); ?></a>
            </p>
        </div>
        </div>
      </div><!-- row -->

    </section>

    <?php get_footer(); ?>
