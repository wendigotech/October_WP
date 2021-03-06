<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper mt-5 pt-5 mb-5 pb-5 d-flex"> 
    <div class="container">
        <div class="row">
            <div class="content-area col-sm-12 col-md-12" id="primary"> 
                <main class="site-main" id="main"> 
                    <div> 
                        <?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?><article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                            <header class="entry-header"> 
                                <h2 class="text-center"><?php the_title(); ?></h2> 
                            </header>                                             
                            <div class="entry-content"> 
                                <p class="mb-5 mt-3"><?php echo get_post_meta( get_the_ID(), 'about', true ); ?></p> 
                            </div>
                            <?php
                                        $most_visited_args = array(
                                            'category_name' => 'casino',
                                            'tag' => 'most-visited',
                                            'order' => 'DESC'
                                        )
                                    ?><?php $most_visited = new WP_Query( $most_visited_args ); ?><?php if ( $most_visited->have_posts() ) : ?><div class="grid2" id="post-<?php the_ID(); ?>">
                                <?php $most_visited_item_number = 0; ?><?php while ( $most_visited->have_posts() && $most_visited_item_number++ < 4 ) : $most_visited->the_post(); ?><figure class="effect-ruby effect-ruby-2">
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>">
                                        <?php the_post_thumbnail( 'normal' ); ?>
                                    </a>                                                     
                                    <figcaption>
                                        <h2><?php echo get_post_meta( get_the_ID(), 'offer', true ); ?></h2>
                                        <div>
                                            <a class="btn btn-light btn-visit" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                            <a class="btn btn-light btn-terms" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                        </div>
                                    </figcaption>
                                </figure><?php endwhile; ?><?php wp_reset_postdata(); ?>



                            </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p><?php endif; ?>
                            <div class="entry-content"> 
                                <p class="mt-5"><?php the_content(); ?></p> 
                            </div>
                            <?php
                                        $random_args = array(
                                            'category_name' => 'casino, bonuses',
                                            'tag' => array( 'welcome', 'popular', 'new-casino', 'most-visited', 'exclusive', 'best-offer', 'best-casino', 'best-bonus' ),
                                            'order' => 'DESC',
                                            'orderby' => 'rand'
                                        )
                                    ?><?php $random = new WP_Query( $random_args ); ?><?php if ( $random->have_posts() ) : ?><div class="entry-content"> 
                                <div class="row random">
                                    <?php $random_item_number = 0; ?><?php while ( $random->have_posts() && $random_item_number++ < 3 ) : $random->the_post(); ?><div class="bonus-column col-sm-4 col-4 pl-2 d-flex flex-column col-md-4"> 
                                        <figure class="effect-ruby effect-ruby-1">
                                            <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>">
                                                <?php the_post_thumbnail( 'normal' ); ?>
                                            </a>
                                            <figcaption>
                                                <h2><?php echo get_post_meta( get_the_ID(), 'offer', true ); ?></h2>
                                                <div>
                                                    <a class="btn btn-light btn-visit btn-sm" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                                    <a class="btn btn-light btn-sm btn-terms" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                                </div>
                                            </figcaption>                                                             
                                        </figure>                                                         
                                    </div><?php endwhile; ?><?php wp_reset_postdata(); ?>


                                </div>                                                 
                            </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p><?php endif; ?>
                            <div class="row d-flex text-center" style="font-family: Roboto;">
                                <div class="col-md-4">
                                    <a class="text-center" href="<?php echo get_post_meta( get_the_ID(), 'see1', true ); ?>"><?php _e( 'See more', 'october' ); ?></a> 
                                </div>
                                <div class="col-md-4">
                                    <a class="text-center" href="<?php echo get_post_meta( get_the_ID(), 'see2', true ); ?>"><?php _e( 'See more', 'october' ); ?></a> 
                                </div>
                                <div class="col-md-4">
                                    <a class="text-center" href="<?php echo get_post_meta( get_the_ID(), 'see3', true ); ?>"><?php _e( 'See more', 'october' ); ?></a> 
                                </div>
                            </div>                                             
                        </article><?php endwhile; ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p><?php endif; ?>                                         
                    </div>                                     
                </main>                                 
            </div>
        </div>
    </div>                     
</div>                 


<?php get_footer(); ?>