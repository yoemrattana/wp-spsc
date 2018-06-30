<?php
/*
    Template Name: Home Page
 * */

$sliders                = get_field("images");

$about_us_image         = get_field("about_us_image");
$about_us_title         = get_field("about_us_title");
$about_us_subtitle      = get_field("about_us_subtitle");
$about_us_description   = get_field("about_us_description");

$our_service_title      = get_field("our_service_title");
get_header();
?>

<!-- Revolution slider start -->
<div class="slideWrp">
    <div class="tp-banner-container sliderWraper" id="home">
        <div class="tp-banner">
            <ul>
                <?php if ( $sliders ) : ?>
                    <?php foreach( $sliders as $slider ) : ?>
                        <li data-slotamount="7" data-transition="fade" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="<?php bloginfo('template_directory'); ?>/assets/images/dummy.png" data-lazyload="<?php echo $slider['url'] ?>">
                            <div class="caption lft large-title tp-resizeme slidertext1" data-x="left" data-y="170" data-speed="600" data-start="2200"><?php echo $slider['title'] ?></div>
                            <div class="caption lfb large-title tp-resizeme slidertext2" data-x="left" data-y="270" data-speed="600" data-start="2800"><?php echo $slider['caption'] ?></div>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div class="hoverForm">
        <div class="container">
            <div class="consultWrap sliderForm">
                <div class="formwrap">
                    <h3><?php echo pll__("Free Consultation") ?></h3>
                    <form>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="<?php echo pll__("Name") ?> *">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="<?php echo pll__("Email") ?> *">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="<?php echo pll__("Phone") ?> *">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="<?php echo pll__("Tell us") ?> *"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn" value="<?php echo pll__("Contact Us") ?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Revolution slider end -->

<!--About start-->
<div class="about-wrap" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="aboutImg"><img src="<?php echo $about_us_image['url'] ?>" alt="<?php echo $about_us_image['alt'] ?>"></div>
            </div>
            <div class="col-md-6">
                <h1><?php echo $about_us_title?></h1>
                <div class="aboutTxt"><?php echo $about_us_subtitle ?></div>
                <p><?php echo $about_us_description?></p>
                <div class="readmore"><a href="#" class="btn"><?php echo pll__("Read More") ?></a></div>

            </div>
        </div>
    </div>
</div>

<!--About start-->

<!--service start-->
<div class="service-wrap" id="service">
    <div class="container">
        <h1><?php echo $our_service_title ;?></h1>
        <ul class="serviceList owl-carousel">
            <?php $arg = ['post_type' => 'our_service', 'orderby' => 'post_id', 'order' => 'DESC']; ?>
            <?php $services = new WP_Query($arg) ?>
            <?php while ( $services->have_posts() ) : $services->the_post(); ?>
            <li class="item">
                <div class="service-image"><img src="<?php  echo  get_field('image')['url']; ?>" alt="<?php  echo  get_field('image')['alt']; ?>">
                    <div class="hoverlink">
                        <div class="icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div class="service-details">
                    <h3><a href="#"><?php the_title() ?></a></h3>
                    <p><?php echo wp_html_excerpt($services->post->description, 20), '...'; ?></p>
                    <div class="readmore"><a href="#">Read More</a></div>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <a href="#"> <?php echo pll__("Learn More") ?></a>
</div>
<!--service end-->

<?php
get_footer();
