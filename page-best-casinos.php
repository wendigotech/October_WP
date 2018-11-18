<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper mt-5 pt-5 mb-5 pb-5"> 
    <div class="container" id="content" tabindex="-1"> 
        <div class="row">
            <div class="content-area col-md-8" id="primary"> 
                <main class="site-main" id="main"> 
                    <div> 
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                                    <header class="entry-header"> 
                                        <h2><?php the_title(); ?></h2> 
                                    </header>                                                     
                                    <div class="entry-content"> 
                                        <p><?php the_excerpt( ); ?></p> 
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
                                        <div <?php post_class( 'grid2' ); ?> id="post-<?php the_ID(); ?>">
                                            <?php $best_casino_item_number = 0; ?>
                                            <?php while ( $best_casino->have_posts() && $best_casino_item_number++ < 4 ) : $best_casino->the_post(); ?>
                                                <figure class="effect-ruby effect-ruby-2">
                                                    <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a> 
                                                    <figcaption style="margin-top: 120px;">
                                                        <h2><?php the_excerpt( ); ?></h2>
                                                        <div>
                                                            <a class="btn btn-light btn-visit" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                                            <a class="btn btn-light btn-terms" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&amp;c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
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
                                        <p><?php the_content(); ?></p> 
                                    </div>
                                    <div class="entry-content"> 
                                        <?php
                                            $best_offer_args = array(
                                                'tag' => 'best-offer',
                                                'order' => 'DESC'
                                            )
                                        ?>
                                        <?php $best_offer = new WP_Query( $best_offer_args ); ?>
                                        <?php if ( $best_offer->have_posts() ) : ?>
                                            <div <?php post_class( 'bonus-column col-sm-4 col-4 pl-2 col-md-12 d-flex' ); ?> id="post-<?php the_ID(); ?>"> 
                                                <?php $best_offer_item_number = 0; ?>
                                                <?php while ( $best_offer->have_posts() && $best_offer_item_number++ < 3 ) : $best_offer->the_post(); ?>
                                                    <figure class="effect-ruby effect-ruby-1">
                                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a>
                                                        <figcaption>
                                                            <h2 class="pt-4"><?php the_excerpt( ); ?></h2>
                                                            <div>
                                                                <a class="btn btn-light btn-visit btn-sm" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                                                <a class="btn btn-light btn-sm btn-terms" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&amp;c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                                            </div>
                                                        </figcaption>                                                                         
                                                    </figure>
                                                <?php endwhile; ?>
                                                <?php wp_reset_postdata(); ?> 
                                            </div>
                                        <?php else : ?>
                                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                                        <?php endif; ?>
                                        <div class="row">
                                            <div class="d-flex col-md-12 justify-content-around">
                                                <h3><?php _e( 'Column title', 'october' ); ?></h3>
                                                <h3><?php _e( 'Column title', 'october' ); ?></h3>
                                                <h3><?php _e( 'Column title', 'october' ); ?></h3> 
                                            </div>
                                        </div>                                                         
                                    </div>                                                     
                                </article>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                        <?php endif; ?> 
                    </div>                                     
                </main>                                 
            </div>                             
            <div class="col-md-4 widget-area" role="complementary" id="right-sidebar" style="position: sticky; width: 100%; left: 0; top: 0; height: 100%;"> 
                <figure class="effect-ruby effect-ruby-1" style="height: 20em;">
                    <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a>
                    <figcaption>
                        <h2 style="margin-top: -400px;"><?php the_excerpt( ); ?></h2>
                        <div>
                            <a class="btn btn-light btn-visit" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                            <a class="btn btn-light btn-terms" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&amp;c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                        </div>
                    </figcaption>                                     
                </figure>                                 
                <div class="col-md-12">
                    <h3><?php _e( 'Information for you', 'october' ); ?></h3> 
                    <p><?php _e( 'Cras justo odio', 'october' ); ?></p>
                    <p><?php _e( 'Cras justo odio', 'october' ); ?></p>
                    <p><?php _e( 'Cras justo odio', 'october' ); ?></p> 
                </div>
                <?php
                    $best_offer_args = array(
                        'tag' => 'best-offer',
                        'order' => 'DESC'
                    )
                ?>
                <?php $best_offer = new WP_Query( $best_offer_args ); ?>
                <?php if ( $best_offer->have_posts() ) : ?>
                    <div <?php post_class( 'bonus-column col-sm-4 col-4 pl-2 col-md-12' ); ?> id="post-<?php the_ID(); ?>"> 
                        <?php $best_offer_item_number = 0; ?>
                        <?php while ( $best_offer->have_posts() && $best_offer_item_number++ < 3 ) : $best_offer->the_post(); ?>
                            <figure class="effect-ruby effect-ruby-1">
                                <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a>
                                <figcaption>
                                    <h2 class="pt-4"><?php the_excerpt( ); ?></h2>
                                    <div>
                                        <a class="btn btn-light btn-visit btn-sm" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                        <a class="btn btn-light btn-sm btn-terms" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&amp;c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
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

<?php get_footer(); ?>