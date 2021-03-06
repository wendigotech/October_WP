<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper mt-5 pt-5 mb-5 pb-5 d-flex"> 
    <div class="container">
        <div class="row">
            <div class="content-area col-md-12 " id="primary"> 
                <main class="site-main" id="main"> 
                    <div> 
                        <?php
                            $payment_args = array(
                                'category_name' => 'payment'
                            )
                        ?><?php $payment = new WP_Query( $payment_args ); ?><?php if ( $payment->have_posts() ) : ?><?php while ( $payment->have_posts() ) : $payment->the_post(); ?><article> 
                            <header class="entry-header"> 
                                <h2 class="text-center"><?php the_title(); ?></h2> 
                            </header>                                             
                            <div class="entry-content"> 
                                <p class="mt-5"><?php the_content(); ?></p> 
                            </div><?php
                                        $random-payments_args = array(
                                            'category_name' => 'casino, bonuses',
                                            'tag' => array( 'visa', 'skrill', 'trust' ),
                                            'order' => 'DESC',
                                            'orderby' => 'rand'
                                        )
                                    ?><?php $random-payments = new WP_Query( $random-payments_args ); ?><?php if ( $random-payments->have_posts() ) : ?><div class="entry-content"> 
                                            <div class="row random">
                                                <?php $random-payments_item_number = 0; ?>
                                                <?php while ( $random-payments->have_posts() && $random-payments_item_number++ < 3 ) : $random-payments->the_post(); ?>
                                                    <div class="bonus-column col-sm-4 col-4 pl-2 d-flex flex-column col-md-4"> 
                                                        <figure class="effect-ruby effect-ruby-1">
                                                            <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"> <?php the_post_thumbnail( 'normal' ); ?> </a>
                                                            <figcaption>
                                                                <h2><?php echo get_post_meta( get_the_ID(), 'offer', true ); ?></h2>
                                                                <div>
                                                                    <a class="btn btn-light btn-visit btn-sm" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                                                    <a class="btn btn-light btn-sm btn-terms" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                                                </div>
                                                            </figcaption>                                                                             
                                                        </figure>                                                                         
                                                    </div>
                                                <?php endwhile; ?>
                                                <?php wp_reset_postdata(); ?>
                                            </div>                                                             
                                        </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p><?php endif; ?>                                             
                        </article><?php endwhile; ?><?php wp_reset_postdata(); ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p><?php endif; ?>                                         
                    </div>                                     
                </main>                                 
            </div>
        </div>
    </div>                     
</div>                 


<?php get_footer(); ?>