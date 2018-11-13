<?php
get_header(); ?>

<div class="wrapper" id="index-wrapper"> 
    <div class="mt-5 mb-5 container" id="content" tabindex="-1"> 
        <div class="row"> 
            <div class="col-md-12">
                <h3 class="p-2"><?php _e( 'Usefull information', 'october' ); ?></h3> 
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
                <?php $info_item_number = 0; ?>
                <?php while ( $info->have_posts() && $info_item_number++ < 4 ) : $info->the_post(); ?>
                    <div class="container py-3 col-lg-6 col-md-6">
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
                                        <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                                        <p class="card-text"><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
        <?php endif; ?>
    </div>
    <div class="mt-5 mb-5 container" id="content" tabindex="-1"> 
        <div class="row"> 
            <div class="col-md-12">
                <h3 class="p-2"><?php _e( 'Payment methods', 'october' ); ?></h3> 
            </div>
        </div>                         
        <?php
            $payment_args = array(
                'category_name' => 'payment'
            )
        ?>
        <?php $payment = new WP_Query( $payment_args ); ?>
        <?php if ( $payment->have_posts() ) : ?>
            <div <?php post_class( 'row' ); ?> id="post-<?php the_ID(); ?>">
                <?php $payment_item_number = 0; ?>
                <?php while ( $payment->have_posts() && $payment_item_number++ < 4 ) : $payment->the_post(); ?>
                    <div class="container py-3 col-md-6 col-lg-3 ">
                        <div class="card card-transparent">
                            <div class="row d-flex d-sm-flex flex-sm-row d-md-flex flex-md-column flex-row">
                                <div class="col-md-12 col-sm-6 col-6">
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
                                <div class="px-3 col-md-12 col-sm-6 col-6">
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
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
        <?php endif; ?>
    </div>
    <div class="container mt-5 mb-5" id="content" tabindex="-1"> 
        <div class="row"> 
            <div class="col-md-8">
                <h3><?php _e( 'Column title', 'october' ); ?></h3> 
            </div>
            <div class="col-md-4 d-inline-flex justify-content-center align-items-end">
                <h6 class="text-center"><?php _e( 'Column title', 'october' ); ?></h6> 
            </div>
        </div>                         
        <div class="row no-gutters" style="  ;">
            <div class="col-md-8"> 
                <div id="carousel2" class="carousel slide" data-ride="carousel">                                      
                    <div class="carousel-inner"> 
                        <div class="carousel-item active"> 
                            <img class="d-block w-100" src="http://pinegrow.com/placeholders/img17.jpg" alt="First slide"> 
                            <div class="carousel-caption d-none d-md-block"> 
                                <h3><?php _e( 'Slide label 1', 'october' ); ?></h3> 
                                <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'october' ); ?></p> 
                            </div>                                             
                        </div>                                         
                        <div class="carousel-item"> 
                            <img class="d-block w-100" src="http://pinegrow.com/placeholders/img16.jpg" alt="Second slide"> 
                            <div class="carousel-caption d-none d-md-block"> 
                                <h3><?php _e( 'Slide label 2', 'october' ); ?></h3> 
                                <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'october' ); ?></p> 
                            </div>                                             
                        </div>                                         
                        <div class="carousel-item"> 
                            <img class="d-block w-100" src="http://pinegrow.com/placeholders/img14.jpg" alt="Third slide"> 
                            <div class="carousel-caption d-none d-md-block"> 
                                <h3><?php _e( 'Slide label 3', 'october' ); ?></h3> 
                                <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'october' ); ?></p> 
                            </div>                                             
                        </div>                                         
                    </div>                                     
                    <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'october' ); ?></span> </a> 
                    <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'october' ); ?></span> </a>
                    <ol class="carousel-indicators"> 
                        <li data-target="#carousel2" data-slide-to="0" class="active"></li>                                         
                        <li data-target="#carousel2" data-slide-to="1"></li>                                         
                        <li data-target="#carousel2" data-slide-to="2"></li>                                         
                    </ol>                                     
                </div>
            </div>
            <div class="col-md-4 bonus-column"> 
                <figure class="effect-ruby effect-ruby-1 d-md-flex flex-column">
                    <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden; height: 146px;"> <?php the_post_thumbnail( 'normal' ); ?> </a>
                    <figcaption>
                        <h2 style="margin-top: -161px;"><?php the_excerpt( ); ?></h2>
                        <div>
                            <a class="btn btn-light btn-visit" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                            <a class="btn btn-light" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                        </div>
                    </figcaption>                                     
                </figure>
                <figure class="effect-ruby effect-ruby-1">
                    <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a>
                    <figcaption>
                        <h2><?php the_excerpt( ); ?></h2>
                        <div>
                            <a class="btn btn-light btn-visit" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                            <a class="btn btn-light" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                        </div>
                    </figcaption>                                     
                </figure>
                <figure class="effect-ruby effect-ruby-1">
                    <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a>
                    <figcaption>
                        <h2><?php the_excerpt( ); ?></h2>
                        <div>
                            <a class="btn btn-light btn-visit" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                            <a class="btn btn-light" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                        </div>
                    </figcaption>                                     
                </figure>                                 
            </div>
        </div>
        <div class="row"></div>
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