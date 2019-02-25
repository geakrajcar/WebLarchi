<?php
/*
  Template Name: All work layout
*/
?>

<?php
    if ( is_page('work') ) {
    get_header( 'work' );
    } else {
        get_header();
    }
?>

<section class="work">
    <!-- Intro Showcase -->
    <div class="row work-front">
        <div class="offset-md-1 col-md-4">
            <h4 class="h5-uppercase-red">work</h4>
            <h1 class="showcase-heading"><?php echo get_theme_mod('work-heading', 'A dream come true'); ?></h1>
            <p class="showcase-txt">
                <?php echo get_theme_mod('work-txt', 'Honestly, getting to collaborate with some amazing creative and like-minded people while retaining your own voice is to me, perfect.'); ?>
            </p>
            <h5 class="h5-mini">scroll into gallery <a href="#gallery" role="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-angle-down"></i>  </a></h5>
        </div>
        <div class="offset-md-1 col-md-4 text-right">
            <blockquote class="quote-box">
                <p class="quotation-mark">
                    &#8220;
                </p>
                <p class="quote-text">
                    <?php echo get_theme_mod('work-quote', 'Do what you love, or you’ll have a lifetime of regret.'); ?>
                </p>
            </blockquote>
        </div>
    </div><!-- row -->
</section>

<!-- Use get_posts and get_thumbnail to create a gallery
     and get_children to get images from a post for slideshow on pop up -->
<?php
$args = array(
'post_type'      => 'post',
'posts_per_page' => -1
);

$query = new WP_Query($args);
?>
<div class="content">
    <?php if ( $query->have_posts() ) : ?>
    <div class="gallery offset-md-2 col-md-8 text-center" id="gallery">
        <?php while ( $query->have_posts() ) : $query->the_post();?>
            <div class="mb-3 pics animation all">
            <?php if( has_post_thumbnail()) : ?>
                <?php
                the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
            <?php endif; ?>

            <div class="overlay" id="<?php echo get_the_ID();?>">
                <div class="overlay-text">
                    <span class="overlay-categories"><?php the_category(', ', '', get_the_ID()); ?></span>
                    <hr class="mini-hr-white">
                    <a href="#myModal" role="button" data-toggle="modal">
                    <span class="overlay-project">
                        <?php
                        $posttags = get_the_tags();
                        if ($posttags) {
                            foreach($posttags as $tag) {
                                echo $tag->name . ' ';
                            }
                        } ?></span>
                    </a>
                </div>
            </div>
            </div>

        <?php endwhile; ?>
        <?php endif; ?>
    </div><!-- container -->
</div>

<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h4-uppercase">Priča li šuma
                    <br>
                    <hr align="left" class="mini-hr">
                    <span class="contractor">Personal work</span>
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="result">
                <div class="row">
                    <div class="offset-md-3 col-md-6">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php echo get_bloginfo('template_url').'/img/rectangle.png'?>" alt="First slide" >
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo get_bloginfo('template_url').'/img/rectangle.png'?>" alt="Second slide" >
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo get_bloginfo('template_url').'/img/rectangle.png'?>" alt="Third slide" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row modal-footer-row">
                    <div class="col-md-2 text-center">
                        <button type="button" href="#" class="btn btn-default btn-info shadow-none" data-slide="prev">i </button>
                    </div>
                    <div class="offset-md-8 col-md-2">
                        <button type="button" href="#" class="btn btn-default btn-circle left carousel-control shadow-none" data-slide="prev"><i class="fa fa-angle-left"></i>  </button>
                        <button type="button" href="#" class="btn btn-default btn-circle right carousel-control shadow-none" data-slide="next"><i class="fa fa-angle-right"></i>  </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- modal-dialog -->
</div> <!-- modal -->












<?php
if ( is_page('work') ) {
    get_footer( 'work' );
} else {
    get_footer();
}
?>
