<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper mt-5 pt-5 mb-5 pb-5 d-flex"> 
    <div class="container">
        <div class="row">
            <div class="content-area ml-5 col-md-11" id="primary" style="background-color: rgba(226, 226, 235, 0.77); border-radius: 3px;"> 
                <main class="site-main" id="main"> 
                    <div> 
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                                    <header class="entry-header"> 
                                        <h2><?php the_title(); ?></h2> 
                                    </header>                                                     
                                    <div class="entry-content"> 
                                        <div id="carousel1" class="carousel slide" data-ride="carousel"> 
                                            <ol class="carousel-indicators"> 
                                                <li data-target="#carousel1" data-slide-to="0" class="active"></li>                                                                 

                                                <li data-target="#carousel1" data-slide-to="1"></li>                                                                 

                                                <li data-target="#carousel1" data-slide-to="2"></li>                                                                 
                                            </ol>                                                             

                                            <div class="carousel-inner"> 
                                                <div class="carousel-item active"> 
                                                    <img class="d-block w-100" src="http://pinegrow.com/placeholders/img11.jpg" alt="First slide"> 
                                                    <div class="carousel-caption d-none d-md-block"> 
                                                        <h3><?php _e( 'Slide label 1', 'october' ); ?></h3> 
                                                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'october' ); ?></p> 
                                                    </div>                                                                     
                                                </div>                                                                 

                                                <div class="carousel-item"> 
                                                    <img class="d-block w-100" src="http://pinegrow.com/placeholders/img17.jpg" alt="Second slide"> 
                                                    <div class="carousel-caption d-none d-md-block"> 
                                                        <h3><?php _e( 'Slide label 2', 'october' ); ?></h3> 
                                                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'october' ); ?></p> 
                                                    </div>                                                                     
                                                </div>                                                                 

                                                <div class="carousel-item"> 
                                                    <img class="d-block w-100" src="http://pinegrow.com/placeholders/img13.jpg" alt="Third slide"> 
                                                    <div class="carousel-caption d-none d-md-block"> 
                                                        <h3><?php _e( 'Slide label 3', 'october' ); ?></h3> 
                                                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'october' ); ?></p> 
                                                    </div>                                                                     
                                                </div>                                                                 
                                            </div>                                                             

                                            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'october' ); ?></span> </a> 
                                            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'october' ); ?></span> </a> 
                                        </div>
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