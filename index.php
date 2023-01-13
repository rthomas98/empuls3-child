<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<section class="py-5 blog-banner d-flex align-items-center position-relative">
    <img class="stripe-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-right.svg" alt="a red line">
    <div class="container section-index">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <p class="lead">
                    Providing IT professionals and agency owners with insights into the intersection of technology and business.
                </p>
                <h1 class="display-3">Empuls3 Insights</h1>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6"></div>
        </div>
    </div>
</section>

    <!-- Featured blog post section -->
    <section class="featured-post py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="display-4">Featured Post</h2>
                </div>
            </div>
            <?php
            $args = array(
                'meta_key' => 'featured_post',
                'meta_value' => '1',
                'posts_per_page' => 1
            );
            $featured_query = new WP_Query( $args );
            while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>
            <div class="row d-flex align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="featured-post-image">
                        <?php the_post_thumbnail('large', array( 'class' => 'img-fluid' )); ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="featured-post-date">
                        <p><?php the_date(); ?></p>
                    </div>
                    <h3 class="display-6"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="featured-post-author">
                        <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>
                        <p><?php the_author(); ?></p>
                    </div>
                    <div class="featured-post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </div>

            </div>
            <?php endwhile; wp_reset_postdata(); ?>

            <hr class="mt-5">
        </div>
    </section>


    <div class="container py-5">
        <div class="row mb-4">
            <div class="col">
                <h2 class="display-4">Most Recent post</h2>
            </div>
        </div>
    <div class="row">
    <?php
    // The Query
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'posts_per_page' => 10,
        'paged'          => $paged,
    );
    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
            ?>
            <div class="post-item col-sm-12 col-md-12 col-lg-4 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <h3 class="post-title mb-3"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                <img src="<?php echo $featured_img_url; ?>" alt="<?php echo get_the_title(); ?>" class="featured-image">

                <p class="post-author">By <?php echo get_the_author(); ?></p>
                <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="<?php echo get_the_author(); ?>" class="author-image">
            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        // no posts found
    }


    // Previous/next page navigation.
    the_posts_pagination( array(
        'prev_text' => 'Previous page',
        'next_text' => 'Next page',
        'before_page_number' => '<span class="meta-nav screen-reader-text">Page </span>',
    ) );
    ?>

    </div>
</div>


<?php
get_footer();
