<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper mt-5 pt-5 mb-5 pb-5 d-flex"> 
    <div class="container">
        <div class="row">
            <div class="content-area ml-5 col-md-11" id="primary"> 
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
                                        $most_visited_args = array(
                                            'category_name' => 'casino',
                                            'tag' => 'most-visited',
                                            'order' => 'DESC'
                                        )
                                    ?>
                                    <?php $most_visited = new WP_Query( $most_visited_args ); ?>
                                    <?php if ( $most_visited->have_posts() ) : ?>
                                        <div class="grid2" id="post-<?php the_ID(); ?>">
                                            <?php $most_visited_item_number = 0; ?>
                                            <?php while ( $most_visited->have_posts() && $most_visited_item_number++ < 4 ) : $most_visited->the_post(); ?>
                                                <figure class="effect-ruby effect-ruby-2">
                                                    <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a> 
                                                    <figcaption>
                                                        <h2><?php echo get_post_meta( get_the_ID(), 'offer', true ); ?></h2>
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
                                                                <h2 class=""><?php echo get_post_meta( get_the_ID(), 'offer', true ); ?></h2>
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
        </div>
    </div>                     
    <div role="complementary" class="col-md-4 col-sm-12 col-12 col-lg-3 mr-5 "> 
        <div class="sidebar">
            <row>
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
                        <figure style="height: 5cm;" <?php post_class( 'effect-ruby effect-ruby-1 ' ); ?> id="post-<?php the_ID(); ?>">
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
            </row>
            <div class="row">
                <div class="col-md-12 col-sm-10 col-12 ">
                    <div class="row pg-empty-placeholder">
                        <div class="col-md-6"> 
                            <h4 class="text-center"><?php _e( 'Information for you', 'october' ); ?></h4>
                            <p class="text-center"><?php _e( 'Cras justo odio', 'october' ); ?></p>
                            <p class="text-center"><?php _e( 'Cras justo odio', 'october' ); ?></p>
                            <p class="text-center"><?php _e( 'Cras justo odio', 'october' ); ?></p>
                        </div>
                        <?php
                            $best_offer_args = array(
                                'tag' => 'best-offer',
                                'order' => 'DESC'
                            )
                        ?>
                        <?php $best_offer = new WP_Query( $best_offer_args ); ?>
                        <?php if ( $best_offer->have_posts() ) : ?>
                            <div <?php post_class( 'col-10 col-md-11 col-lg-6' ); ?> id="post-<?php the_ID(); ?>">
                                <h4><?php _e( 'Best offer', 'october' ); ?></h4> 
                                <?php $best_offer_item_number = 0; ?>
                                <?php while ( $best_offer->have_posts() && $best_offer_item_number++ < 3 ) : $best_offer->the_post(); ?>
                                    <figure class="effect-ruby effect-ruby-1" style="height: 5cm;">
                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a> 
                                        <figcaption style="height: 140px;">
                                            <h2 style="margin-top: -190px;"><?php echo get_post_meta( get_the_ID(), 'offer', true ); ?></h2>
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

<?php get_footer(); ?>