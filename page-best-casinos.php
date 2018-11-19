<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper mt-5 pt-5 mb-5 pb-5 d-flex"> 
    <div class="container">
        <div class="row">
            <div class="content-area col-md-8" id="primary" style="background-color: #e2e2eb; border-radius: 3px;"> 
                <main class="site-main" id="main"> 
                    <div> 
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                                    <header class="entry-header"> 
                                        <h2><?php the_title(); ?></h2> 
                                    </header>                                                     
                                    <div class="entry-content"> 
                                        <p class="mb-5"><?php echo get_post_meta( get_the_ID(), 'about', true ); ?></p> 
                                    </div>
                                    <?php
                                        $best_casino_args = array(
                                            'category_name' => 'casino',
                                            'tag' => 'best-casino',
                                            'order' => 'DESC'
                                        )
                                    ?>
                                    <?php $best_casino = new WP_Query( $best_casino_args ); ?>
                                    <?php if ( $best_casino->have_posts() ) : ?>
                                        <div class="grid2" id="post-<?php the_ID(); ?>">
                                            <?php $best_casino_item_number = 0; ?>
                                            <?php while ( $best_casino->have_posts() && $best_casino_item_number++ < 4 ) : $best_casino->the_post(); ?>
                                                <figure class="effect-ruby effect-ruby-2">
                                                    <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a> 
                                                    <figcaption>
                                                        <h2><?php the_excerpt( ); ?></h2>
                                                        <div>
                                                            <a class="btn btn-light btn-visit" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                                            <a class="btn btn-light btn-terms" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            <?php endwhile; ?>
                                            <?php wp_reset_postdata(); ?>
                                        </div>
                                    <?php else : ?>
                                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                                    <?php endif; ?>
                                    <div class="entry-content"> 
                                        <p class="mt-5"><?php the_content(); ?></p> 
                                    </div>
                                    <?php
                                        $random_args = array(
                                            'category_name' => 'casino, bonuses'
                                        )
                                    ?>
                                    <?php $random = new WP_Query( $random_args ); ?>
                                    <?php if ( $random->have_posts() ) : ?>
                                        <div class="entry-content d-flex"> 
                                            <div class="row pg-empty-placeholder">
                                                <?php $random_item_number = 0; ?>
                                                <?php while ( $random->have_posts() && $random_item_number++ < 3 ) : $random->the_post(); ?>
                                                    <div class="bonus-column col-sm-4 col-4 pl-2 d-flex flex-column col-md-4"> 
                                                        <figure class="effect-ruby effect-ruby-1">
                                                            <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a>
                                                            <figcaption>
                                                                <h2 class=""><?php the_excerpt( ); ?></h2>
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
                                        </div>
                                    <?php else : ?>
                                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                                    <?php endif; ?> 
                                </article>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                        <?php endif; ?> 
                    </div>                                     
                </main>                                 
            </div>
            <div role="complementary" class="col-lg-4 col-md-4 col-sm-12 col-12 mt-3"> 
                <div class="sidebar">
                    <?php
                        $best_offer_args = array(
                            'tag' => 'best-offer',
                            'order' => 'DESC'
                        )
                    ?>
                    <?php $best_offer = new WP_Query( $best_offer_args ); ?>
                    <?php if ( $best_offer->have_posts() ) : ?>
                        <?php $best_offer_item_number = 0; ?>
                        <?php while ( $best_offer->have_posts() && $best_offer_item_number++ < 1 ) : $best_offer->the_post(); ?>
                            <figure <?php post_class( 'effect-ruby effect-ruby-1 ' ); ?> id="post-<?php the_ID(); ?>">
                                <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'large' ); ?> </a>
                                <figcaption style="height: 12rem;">
                                    <h2 style="margin-top: -190px;"><?php echo get_post_meta( get_the_ID(), 'offer', true ); ?></h2>
                                    <div>
                                        <a class="btn btn-light btn-visit" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                        <a class="btn btn-light btn-terms" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                    </div>
                                </figcaption>                                                 
                            </figure>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-12 col-sm-10 col-12">
                            <h3 class="text-center"><?php _e( 'Information for you', 'october' ); ?></h3>
                            <p class="text-center"><?php _e( 'Cras justo odio', 'october' ); ?></p>
                            <p class="text-center"><?php _e( 'Cras justo odio', 'october' ); ?></p>
                            <p class="text-center"><?php _e( 'Cras justo odio', 'october' ); ?></p>                                              
                            <?php
                                $best_offer_args = array(
                                    'tag' => 'best-offer',
                                    'order' => 'DESC'
                                )
                            ?>
                            <?php $best_offer = new WP_Query( $best_offer_args ); ?>
                            <?php if ( $best_offer->have_posts() ) : ?>
                                <div <?php post_class( 'col-10 col-lg-10 col-md-11' ); ?> id="post-<?php the_ID(); ?>">
                                    <h3><?php _e( 'Best offer', 'october' ); ?></h3> 
                                    <?php $best_offer_item_number = 0; ?>
                                    <?php while ( $best_offer->have_posts() && $best_offer_item_number++ < 3 ) : $best_offer->the_post(); ?>
                                        <figure class="effect-ruby effect-ruby-1">
                                            <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a> 
                                            <figcaption style="height: 140px;">
                                                <h2 style="margin-top: -190px;"><?php the_excerpt( ); ?></h2>
                                                <div>
                                                    <a class="btn btn-light btn-visit btn-sm" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                                    <a class="btn btn-light btn-sm btn-terms" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            <?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>                                 
            </div>
        </div>
    </div>                     
</div>                                 

<?php get_footer(); ?>