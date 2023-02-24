<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <div class="cs-hero h-75">
        <div class="container">
            <div class="row d-flex align-items-centerd-flex align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6 mb-5 mb-sm-5 mb-lg-0 p-4 p-sm-3 p-md-0 p-lg-0">

                    <p class="lead m-0 text-sm-center">One of our latest projects</p>
                    <h1 class="mb-3 display-2 text-sm-center"><?php the_title(); ?></h1>
                    <p>
                        <?php the_field( 'the_client' ); ?>
                    </p>
                    <a class="btn btn-secondary mt-4 btn-lg" role="button" href="<?php the_field( 'web_link' ); ?>" target="_blank" a>
                        View The Website
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <?php $the_client_image = get_field( 'the_client_image' ); ?>
                    <?php $size = 'full'; ?>
                    <?php if ( $the_client_image ) : ?>
                        <?php echo wp_get_attachment_image( $the_client_image, $size ); ?>
                    <?php endif; ?>

                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="case-info position-relative">
        <img class="stripe-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-right.svg" alt="a red line">

        <div class="container py-5 section-index ">
        <div class="row p-4 p-sm-3 p-md-0 p-lg-0">
            <div class="col-sm-12 col-md-12 col-lg-8 p-0 p-sm-4 p-md-5 p-lg-5 mb-5 mb-sm-5 mb-lg-0">
                <h2>The Challenge</h2>
                <?php the_field( 'the_challenge' ); ?>

                <hr>

                <h2>Goals</h2>

                <?php if ( have_rows( 'goals' ) ) : ?>
                    <div class="list-group w-auto">
                    <?php while ( have_rows( 'goals' ) ) : the_row(); ?>
                        <div href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                                <div>
                                    <p class="mb-0 opacity-75"><?php the_sub_field( 'goal' ); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    </div>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>

                <hr>

                <h3>Technologies Used</h3>
                <?php if ( have_rows( 'technologies' ) ) : ?>
                    <ul  class="nav">
                        <?php while ( have_rows( 'technologies' ) ) : the_row(); ?>
                            <li class="nav-item me-2">
                                <span class="badge rounded-pill text-bg-secondary"><?php the_sub_field( 'name' ); ?></span>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 mb-5 mb-sm-5 mb-lg-0 text-center">
                <?php $mobile_image = get_field( 'mobile_image' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $mobile_image ) : ?>
                    <?php echo wp_get_attachment_image( $mobile_image, $size ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>

    <div class="container py-5">
        <div class="row text-center mb-4">
            <div class="col">
                <h2>The Solution</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-5 mb-sm-5 mb-lg-0 text-center">
                <?php $solutions_image_one = get_field( 'solutions_image_one' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $solutions_image_one ) : ?>
                    <?php echo wp_get_attachment_image( $solutions_image_one, $size ); ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 mb-5 mb-sm-5 mb-lg-0">
                <?php $solutions_image_two = get_field( 'solutions_image_two' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $solutions_image_two ) : ?>
                    <?php echo wp_get_attachment_image( $solutions_image_two, $size ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <section class="p-4 p-md-5 text-center text-lg-start shadow-1-strong rounded testimonial-holder">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body m-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">

                                        <?php $image = get_field( 'image' ); ?>
                                        <?php $size = 'full'; ?>
                                        <?php if ( $image ) : ?>
                                            <?php echo wp_get_attachment_image( $image, $size, false, array( 'class' => 'rounded-circle img-fluid' ) ); ?>
                                        <?php endif; ?>

                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-muted fw-light mb-4">
                                            <?php the_field( 'testimonial_content' ); ?>
                                        </p>
                                        <p class="fw-bold lead mb-2"><strong><?php the_field( 'testimonial_title' ); ?></strong></p>
                                        <p class="fw-bold text-muted mb-0"><?php the_field( 'position' ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <section class="pt-5 footer-cta-single position-relative" style="background: linear-gradient(180deg, <?php the_sub_field( 'background_color' ); ?> 80%, #ffffff 20%);">
        <div class="container">
            <div class="row text-center">
                <p class="lead">
                    Lets Work Together
                </p>
                <h2 class="mb-5">
                    Let's schedule a consultation to discuss your project and see how we can help bring your ideas to life.
                </h2>
                <p class="footer-btn">
                    <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-secondary btn-lg">
                        Let's Get Started
                    </a>
                </p>

                <img class="mt-4 guy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-guy.png" alt="a guy on a laptop" width="400">
            </div>
        </div>

        <img class="mt-4 stripe-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-right.svg" alt="a red line">

        <div class="circle-sm" style="background: <?php the_sub_field( 'circle_color' ); ?>;"></div>
        <div class="circle-md" style="background: <?php the_sub_field( 'circle_color' ); ?>;"></div>
        <div class="circle-lg" style="background: <?php the_sub_field( 'circle_color' ); ?>;"></div>
        <div class="circle-lg-x" style="background: <?php the_sub_field( 'circle_color' ); ?>;"></div>

    </section>

</article><!-- #post-## -->
