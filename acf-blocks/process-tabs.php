<section class="process-tabs py-5 position-relative">
    <img class="stripe-left" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-left.svg" alt="a red line">

    <div class="container section-index">
        <div class="row mb-5">
            <div class="col">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_sub_field( 'header' ); ?>
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col">

                <?php if( have_rows('tabs') ): ?>
                <ul class="nav nav-tabs nav-pills nav-fill gap-4" id="myTab" role="tablist">
                    <?php $row = 1; // number rows ?>
                    <?php // Step 1: Loop through rows, first displaying tab titles
                    while( have_rows('tabs') ): the_row();
                    //  ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php if($row == 1) {echo 'active';}?>" id="<?php echo $row; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $row; ?>-tab-pane" type="button" role="tab" aria-controls="<?php echo $row; ?>-tab-pane" aria-selected="true">
                            <?php the_sub_field( 'icon' ); ?>
                        </button>
                    </li>
                        <?php $row++; endwhile; // (have_rows('tabs') ):?>
                </ul>
                <?php endif; // (have_rows('tabs') ): ?>

            </div>
        </div>
    </div>
</section>