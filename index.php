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

<section class="py-5 blog-banner d-flex align-items-center">
    <div class="container">
        <div class="row">
            <h1 class="display-3">Insights</h1>
        </div>
    </div>
</section>

<div class="container py-5">
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
