<section class="testimonials py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-12 col-md-12 col-lg-5">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_sub_field( 'header' ); ?>
                </h2>
            </div>
        </div>

        <div class="row">
            <?php if ( have_rows( 'testimonial' ) ) : ?>
				<?php while ( have_rows( 'testimonial' ) ) : the_row(); ?>
					<?php the_sub_field( 'name' ); ?>
					<?php the_sub_field( 'position' ); ?>
					<?php the_sub_field( 'content' ); ?>
					<?php $user_image = get_sub_field( 'user_image' ); ?>
					<?php if ( $user_image ) : ?>
						<img src="<?php echo esc_url( $user_image['url'] ); ?>" alt="<?php echo esc_attr( $user_image['alt'] ); ?>" />
					<?php endif; ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // No rows found ?>
			<?php endif; ?>
        </div>
    </div>
</section>

			
			