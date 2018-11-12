<?php
get_header(); ?>

<div class="wrapper" id="index-wrapper"> 
    <div class="mt-5 mb-5 container" id="content" tabindex="-1"> 
        <div class="row"> 
            <div class="col-md-12">
                <h3><?php _e( 'Usefull information', 'october' ); ?></h3> 
            </div>
        </div>                         
        <?php
            $info_args = array(
                'category_name' => 'info'
            )
        ?>
        <?php $info = new WP_Query( $info_args ); ?>
        <?php if ( $info->have_posts() ) : ?>
            <div <?php post_class( 'row' ); ?> id="post-<?php the_ID(); ?>">
                <div class="container py-3 col-lg-6 col-md-6">
                    <?php $info_item_number = 0; ?>
                    <?php while ( $info->have_posts() && $info_item_number++ < 4 ) : $info->the_post(); ?>
                        <div class="card card-transparent">
                            <div class="row ">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <figure class="snip0077 blue">
                                        <?php
                                            if ( has_post_thumbnail() ) {
                                                the_post_thumbnail( 'normal', array(
                                                'class' => 'snip0077'
                                            ) );
                                            }
                                         ?>
                                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                                            <figcaption class="snip0077">
                                                <p><?php _e( 'Read more', 'october' ); ?></p>
                                            </figcaption>
                                        </a>
                                    </figure>
                                </div>
                                <div class="px-3 col-md-6 col-sm-6 col-6">
                                    <div class="card-block px-3">
                                        <h6 class="card-title text-center"><a href="#"><?php the_title(); ?></a></h6>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
        <?php endif; ?>
    </div>
    <?php
        $payment_args = array(
            'category_name' => 'payment',
            'order' => 'DESC'
        )
    ?>
    <?php $payment = new WP_Query( $payment_args ); ?>
    <?php if ( $payment->have_posts() ) : ?>
        <div id="post-<?php the_ID(); ?>" tabindex="-1" <?php post_class( 'container mt-5 mb-5' ); ?>> 
            <div class="row"> 
                <div class="col-md-12">
                    <h3><?php _e( 'Payment methods', 'october' ); ?></h3> 
                </div>
            </div>                             
            <div class="row">
                <?php $payment_item_number = 0; ?>
                <?php while ( $payment->have_posts() && $payment_item_number++ < 4 ) : $payment->the_post(); ?>
                    <div class="container py-3 col-lg-3 col-md-6">
                        <div class="card card-transparent">
                            <div class="row ">
                                <div class="col-md-12 col-lg-12 col-sm-6">
                                    <figure class="snip0077 blue">
                                        <?php
                                            if ( has_post_thumbnail() ) {
                                                the_post_thumbnail( 'normal' );
                                            }
                                         ?>
                                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                                            <figcaption>
                                                <p><?php _e( 'I propose we leave math to the machines and go play outside.', 'october' ); ?></p>
                                            </figcaption>
                                        </a>
                                    </figure>
                                </div>
                                <div class="px-3 col-md-12 col-sm-6">
                                    <div class="card-block px-3">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
    <?php endif; ?>
    <div class="container mt-5 mb-5" id="content" tabindex="-1"> 
        <div class="row"> 
            <div class="col-md-8">
                <h3><?php _e( 'Column title', 'october' ); ?></h3> 
            </div>
            <div class="col-md-4 d-inline-flex justify-content-center align-items-end">
                <h6 class="text-center"><?php _e( 'Column title', 'october' ); ?></h6> 
            </div>
        </div>                         
        <div class="row no-gutters" style="display:grid;grid-template-columns:1fr 1fr 1fr 1fr 2fr;grid-template-rows:100px 50px 150px 150px 50px;grid-gap:5px;">
            <figure class="effect-ruby" style="grid-area:1 / 1 / 5 / 5;">
                <a href="#" style="position: relative; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1494119023197-238489d8dce3?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=d960e07ad7b81180215edea3a1071268" alt="img13">
                </a>
                <figcaption>
                    <h2><?php _e( 'Glowing', 'october' ); ?> </h2>
                    <div>
                        <a class="btn btn-light btn-sm btn-visit" href="#"><?php _e( 'Visit Casino', 'october' ); ?></a>
                        <a class="btn btn-light btn-sm" href="#" data-toggle="tooltip" data-placement="bottom" title="abc"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                    </div>
                </figcaption>                                 
            </figure>
            <figure class="effect-ruby" style="grid-area:1 / 5 / 3 / 6;">
                <a href="#" style="position: relative; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1494119023197-238489d8dce3?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=d960e07ad7b81180215edea3a1071268" alt="img13">
                </a>
                <figcaption>
                    <h2><?php _e( 'Glowing', 'october' ); ?> </h2>
                    <div>
                        <a class="btn btn-light btn-sm btn-visit" href="#"><?php _e( 'Visit Casino', 'october' ); ?></a>
                        <a class="btn btn-light btn-sm" href="#" data-toggle="tooltip" data-placement="bottom" title="abc"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                    </div>
                </figcaption>                                 
            </figure>
            <figure class="effect-ruby" style="grid-area:4 / 5 / 5 / 6;">
                <a href="#" style="position: relative; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1494119023197-238489d8dce3?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=d960e07ad7b81180215edea3a1071268" alt="img13">
                </a>
                <figcaption>
                    <h2><?php _e( 'Glowing', 'october' ); ?> </h2>
                    <div>
                        <a class="btn btn-light btn-visit" href="#"><?php _e( 'Visit Casino', 'october' ); ?></a>
                        <a class="btn btn-light" href="#" data-toggle="tooltip" data-placement="bottom" title="abc"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                    </div>
                </figcaption>                                 
            </figure>
            <figure class="effect-ruby" style="grid-area:3 / 5 / 4 / 6;">
                <a href="#" style="position: relative; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1494119023197-238489d8dce3?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=d960e07ad7b81180215edea3a1071268" alt="img13">
                </a>
                <figcaption>
                    <h2><?php _e( 'Glowing', 'october' ); ?> </h2>
                    <div>
                        <a class="btn btn-light btn-visit btn-sm" href="#"><?php _e( 'Visit Casino', 'october' ); ?></a>
                        <a class="btn btn-light" href="#" data-toggle="tooltip" data-placement="bottom" title="abc"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                    </div>
                </figcaption>                                 
            </figure>
        </div>
    </div>
    <div class="container mt-5 mb-5" id="content" tabindex="-1"> 
        <div class="row"> 
            <div class="col-md-12">
                <h3 class="text-center"><?php _e( 'Column title', 'october' ); ?></h3> 
            </div>
        </div>                         
        <div class="row">
            <div class="container py-3 col-lg-10 col-md-10">
                <p><?php _e( 'Paragraph', 'october' ); ?></p>
            </div>
        </div>
    </div>                     
</div>                                 

<?php get_footer(); ?>