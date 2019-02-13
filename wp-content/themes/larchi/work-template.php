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
    <div class="row illustrations-front">
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
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div><!-- container -->
</div>



<?php
if ( is_page('work') ) {
    get_footer( 'work' );
} else {
    get_footer();
}
?>
