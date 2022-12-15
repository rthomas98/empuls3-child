<section class="container-fluid py-5 home-banner">
<img class="mt-4 grey-shape" src="<?php echo get_stylesheet_directory_uri(); ?>/img/grey-shape.svg" alt="a grey shape">

<div class="circle-sm"></div>
<div class="circle-md"></div>
<div class="circle-lg"></div>

    <div class="row d-flex align-items-center">
        <div class="col-sm-12 col-md-12 col-lg-6 p-sm-2 p-md-5 p-lg-5  section-index">
            <h1 class="display-1">
                <?php the_sub_field( 'section_header' ); ?>
            </h1>
            <p class="lead text-muted">
                <?php the_sub_field( 'content' ); ?>
            </p>

            <div class="d-grid gap-4 d-md-block mt-5">
                <a class="btn btn-secondary btn-lg" role="button" href="<?php the_sub_field( 'button_one_link' ); ?>"><?php the_sub_field( 'button_one_label' ); ?></a>
                <a class="btn btn-primary btn-lg" role="button" href="<?php the_sub_field( 'button_two_link' ); ?>"><?php the_sub_field( 'button_two_label' ); ?></a>
            </div>

            
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-5 text-center">
        <?php $image = get_sub_field( 'image' ); ?>
			<?php if ( $image ) : ?>
				<img class="home-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			<?php endif; ?>
        </div>

    </div>

</section>