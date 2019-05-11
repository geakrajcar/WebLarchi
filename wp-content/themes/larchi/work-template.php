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
            <h5 class="h5-mini hide-on-mobile">scroll into gallery <a href="#gallery" role="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-angle-down"></i>  </a></h5>
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
    <div class="gallery offset-md-2 col-md-8 col-sm-12 text-center" id="gallery">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="mb-md-3 pics animation all">
            <?php if( has_post_thumbnail()) : ?>
                <?php
                the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>

            <div class="overlay" id="<?php echo get_the_ID();?>">
                <div class="overlay-text">
                    <span class="overlay-categories"><?php the_category(', ', '', get_the_ID()); ?></span>
                    <hr class="mini-hr-white">
                    <a href="#myModal-<?php the_ID(); ?>" data-toggle="modal" >
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

            <div id="myModal-<?php the_ID(); ?>" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-full" role="document">
                    <div class="modal-content" id="modal-main">
                        <div class="modal-header text-left">
                            <h4 class="modal-title h4-uppercase">
                                <?php the_title();?>
                                <br>
                                <hr align="left" class="mini-hr">
                                <span class="h4-capitalize">
                                    <?php
                                    $posttag = get_the_tags();
                                    if ($posttag) {
                                        foreach($posttag as $tag) {
                                            echo $tag->name . ' ';
                                        }
                                    } ?>
                                </span>
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body" id="result">
                            <div class="row">
                                <div class="offset-lg-3 col-lg-6 offset-md-1 col-md-10">
                                    <!-- Carousel -->
                                    <div id="myCarousel-<?php the_ID();?>" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                        <?php
                                        $attachments= get_attached_media( 'image', $post );


                                        $j = sizeof($attachments) - 1;
                                        for($index = 0; $index < $j; $index++) {
                                            if($index == 0){
                                                ?>
                                                <li data-target="#myCarousel-<?php the_ID();?>" data-slide-to="<?php echo $index;?>" class="active"></li>
                                            <?php
                                            }
                                            elseif ($index > 0 ){
                                                ?>
                                                <li data-target="#myCarousel-<?php the_ID();?>" data-slide-to="<?php echo $index;?>"></li>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                        }
                                        ?>
                                        </ol>
                                        <div class="carousel-inner">
                                        <?php
                                        $i = 0;
                                        foreach($attachments as $att_id => $attachment) {
                                            $full_img_url = wp_get_attachment_url($attachment->ID);
                                            if ($i == 0){
                                                $i++;
                                            }
                                            elseif ($i == 1){
                                                $i++;
                                                ?>
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="<?php echo $full_img_url ?>">
                                                </div>
                                                <?php
                                            }
                                        elseif ($i > 1) {
                                                $i++;
                                            ?>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="<?php echo $full_img_url ?>">
                                            </div>
                                            <?php
                                        }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                    <!-- /Carousel -->

                                </div>
                            </div>
                            <div class="row modal-footer-row">
                                <div class="col-md-2 text-center">
                                    <button id="btn-modal-info" type="button" href="#" class="btn btn-default btn-info shadow-none">i </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal on info button click -->
                    <div class="modal-content d-none" id="modal-info">
                        <div class="modal-body" id="result">
                            <div class="row">
                                <div class="offset-md-1 col-md-1 col-sm-1 col-xs-1 text-right">
                                    <h4 class="h4-grey">YEAR</h4>
                                    <ul class="modal-info-list">
                                        <li>2019</li>
                                    </ul>
                                </div>
                                <div class="col-md-2 col-sm-10 col-xs-11 text-left">
                                    <h4 class="h4-grey">DELIVERABLES</h4>
                                    <ul class="modal-info-list">
                                        <li>digital design</li>
                                        <li>illustrations</li>
                                        <li>graphic design</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 text-left modal-info-details">
                                    <h4 class="h5-uppercase-red">work</h4>
                                    <h1><?php the_title();?></h1>
                                    <?php the_content();?>
                                </div>
                            </div>
                            <div class="row modal-footer-row">
                                <div class="col-md-2 text-center">
                                    <button id="btn-modal-info-close" type="button" href="#" class="btn btn-default btn-info shadow-none" data-slide="prev">i </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!-- modal-dialog -->
            </div> <!-- modal -->

            <?php endif; ?>
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