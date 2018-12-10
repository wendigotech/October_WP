<?php
get_header(); ?>

<div> 
    <div class="jumbotron">
        <div class="container mt-5">
            <div id="carousel1" class="carousel slide" data-ride="carousel" data-pause="hover"> 
                <div class="carousel-inner"> 
                    <div class="carousel-item active">
                        <?php
                            $best_bonus_args = array(
                                'category_name' => 'casino',
                                'tag' => 'best-bonus',
                                'order' => 'DESC'
                            )
                        ?>
                        <?php $best_bonus = new WP_Query( $best_bonus_args ); ?>
                        <?php if ( $best_bonus->have_posts() ) : ?>
                            <div <?php post_class( 'grid' ); ?> id="post-<?php the_ID(); ?>">
                                <?php $best_bonus_item_number = 0; ?>
                                <?php while ( $best_bonus->have_posts() && $best_bonus_item_number++ < 4 ) : $best_bonus->the_post(); ?>
                                    <figure class="effect-ruby effect-ruby-1">
                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"> <?php the_post_thumbnail( 'normal' ); ?> </a>
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
                    </div>
                    <div class="carousel-item">
                        <?php
                            $best_casino_args = array(
                                'category_name' => 'casino',
                                'tag' => 'best-casino',
                                'order' => 'DESC'
                            )
                        ?>
                        <?php $best_casino = new WP_Query( $best_casino_args ); ?>
                        <?php if ( $best_casino->have_posts() ) : ?>
                            <div <?php post_class( 'grid' ); ?> id="post-<?php the_ID(); ?>">
                                <?php $best_casino_item_number = 0; ?>
                                <?php while ( $best_casino->have_posts() && $best_casino_item_number++ < 4 ) : $best_casino->the_post(); ?>
                                    <figure class="effect-ruby effect-ruby-2">
                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"> <?php the_post_thumbnail( 'normal' ); ?> </a> 
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
                    </div>
                    <div class="carousel-item">
                        <?php
                            $new_casino_args = array(
                                'category_name' => 'casino',
                                'tag' => 'new-casino',
                                'order' => 'DESC'
                            )
                        ?>
                        <?php $new_casino = new WP_Query( $new_casino_args ); ?>
                        <?php if ( $new_casino->have_posts() ) : ?>
                            <div <?php post_class( 'grid' ); ?> id="post-<?php the_ID(); ?>">
                                <?php $new_casino_item_number = 0; ?>
                                <?php while ( $new_casino->have_posts() && $new_casino_item_number++ < 4 ) : $new_casino->the_post(); ?>
                                    <figure class="effect-ruby effect-ruby-1">
                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"> <?php the_post_thumbnail( 'normal' ); ?> </a> 
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
                    </div>
                    <div class="carousel-item">
                        <?php
                            $most_visited_args = array(
                                'category_name' => 'casino',
                                'tag' => 'most-visited',
                                'order' => 'DESC'
                            )
                        ?>
                        <?php $most_visited = new WP_Query( $most_visited_args ); ?>
                        <?php if ( $most_visited->have_posts() ) : ?>
                            <div <?php post_class( 'grid' ); ?> id="post-<?php the_ID(); ?>">
                                <?php $most_visited_item_number = 0; ?>
                                <?php while ( $most_visited->have_posts() && $most_visited_item_number++ < 4 ) : $most_visited->the_post(); ?>
                                    <figure class="effect-ruby effect-ruby-1">
                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"> <?php the_post_thumbnail( 'thumbnail' ); ?> </a> 
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
                    </div>                                     
                </div>                                 
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 carousel-indicators d-flex flex-row align-items-center justify-content-around mt-5" style="margin-left: 1px; margin-right: 1px; margin-top: 23px;"> 
                        <a class="btn active" data-target="#carousel1" href="#" data-slide-to="0" data-toggle="button"><?php _e( 'Best bonus', 'october' ); ?></a>
                        <a data-target="#carousel1" href="#" data-slide-to="1" class="btn"><?php _e( 'Best casino', 'october' ); ?></a>
                        <a data-target="#carousel1" href="#" data-slide-to="2" class="btn"><?php _e( 'New casino', 'october' ); ?></a>
                        <a data-target="#carousel1" href="#" data-slide-to="3" class="btn"><?php _e( 'Most visited', 'october' ); ?></a>
                    </div>
                </div>
            </div>
        </div>                         
    </div>                     
</div>
<div class="wrapper" id="index-wrapper"> 
    <div class="mt-5 mb-5 container" id="content" tabindex="-1"> 
        <div class="row"> 
            <div class="col-md-12">
                <h3 class="p-2 text-center"><?php _e( 'Usefull information', 'october' ); ?></h3> 
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
                    <div class="container col-lg-6 col-md-6 mb-2">
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
                                    <div class="card-block px-3 ">
                                        <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                                        <div class="pg-empty-placeholder box">
                                            <?php the_content(); ?>
                                        </div>
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
                <h3 class="p-2 text-center"><?php _e( 'Payment methods', 'october' ); ?></h3> 
            </div>
        </div>                         
        <?php
            $payment_args = array(
                'category_name' => 'payment'
            )
        ?>
        <?php $payment = new WP_Query( $payment_args ); ?>
        <?php if ( $payment->have_posts() ) : ?>
            <div <?php post_class( 'row payment' ); ?> id="post-<?php the_ID(); ?>">
                <?php $payment_item_number = 0; ?>
                <?php while ( $payment->have_posts() && $payment_item_number++ < 4 ) : $payment->the_post(); ?>
                    <div class="container" style="grid-area: span 1;">
                        <div class="card card-transparent">
                            <div class="row d-flex d-sm-flex flex-sm-row d-md-flex flex-md-column flex-row">
                                <div>
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
                                <div class="pg-empty-placeholder box p-2">
                                    <?php the_content(); ?>
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
            <div class="col-md-8 col-8">
                <h3 class="mt-2 text-center"><?php _e( 'Bonuses', 'october' ); ?></h3> 
            </div>
            <div class="col-md-4 d-inline-flex justify-content-center align-items-end col-4">
                <h4 class="text-center"><?php _e( 'Best offer', 'october' ); ?></h4>
            </div>
        </div>                         
        <div class="row no-gutters" style="  ;">
            <div class="col-sm-8 col-8 col-md-8"> 
                <div id="carousel2" class="carousel slide carousel-fade mb-5" data-ride="carousel" data-pause="hover"> 
                    <div class="carousel-inner" style="height: 35em;"> 
                        <?php
                            $exclusive_big_args = array(
                                'category_name' => 'bonuses',
                                'tag_slug__and' => array( 'exclusive', 'big' ),
                                'order' => 'DESC'
                            )
                        ?>
                        <?php $exclusive_big = new WP_Query( $exclusive_big_args ); ?>
                        <?php if ( $exclusive_big->have_posts() ) : ?>
                            <div <?php post_class( 'carousel-item active' ); ?> id="post-<?php the_ID(); ?>"> 
                                <?php $exclusive_big_item_number = 0; ?>
                                <?php while ( $exclusive_big->have_posts() && $exclusive_big_item_number++ < 1 ) : $exclusive_big->the_post(); ?>
                                    <figure class="effect-ruby effect-ruby-1" style="height: 35em;">
                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"> <?php the_post_thumbnail( 'normal' ); ?> </a>
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
                        <?php
                            $welcome_big_args = array(
                                'category_name' => 'bonuses',
                                'tag_slug__and' => array( 'welcome', 'big' ),
                                'order' => 'DESC'
                            )
                        ?>
                        <?php $welcome_big = new WP_Query( $welcome_big_args ); ?>
                        <?php if ( $welcome_big->have_posts() ) : ?>
                            <div <?php post_class( 'carousel-item' ); ?> id="post-<?php the_ID(); ?>"> 
                                <?php $welcome_big_item_number = 0; ?>
                                <?php while ( $welcome_big->have_posts() && $welcome_big_item_number++ < 1 ) : $welcome_big->the_post(); ?>
                                    <figure class="effect-ruby effect-ruby-1" style="height: 35em;">
                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"> <?php the_post_thumbnail( 'normal' ); ?> </a>
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
                        <?php
                            $best-bonus_big_args = array(
                                'category_name' => 'bonuses',
                                'tag_slug__and' => array( 'best-bonus', 'big' ),
                                'order' => 'DESC'
                            )
                        ?>
                        <?php $best-bonus_big = new WP_Query( $best-bonus_big_args ); ?>
                        <?php if ( $best-bonus_big->have_posts() ) : ?>
                            <div <?php post_class( 'carousel-item' ); ?> id="post-<?php the_ID(); ?>"> 
                                <?php $best-bonus_big_item_number = 0; ?>
                                <?php while ( $best-bonus_big->have_posts() && $best-bonus_big_item_number++ < 1 ) : $best-bonus_big->the_post(); ?>
                                    <figure class="effect-ruby effect-ruby-1" style="height: 35em;">
                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"> <?php the_post_thumbnail( 'normal' ); ?> </a>
                                        <figcaption>
                                            <h2><?php echo get_post_meta( get_the_ID(), 'offer', true ); ?></h2>
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
                    <div class="col-md-12 carousel-indicators d-flex flex-row align-items-center justify-content-around" style="margin-right: 1px; margin-left: 1px; margin-top: 50px;"> 
                        <a class="btn active carousel-indicators2" data-target="#carousel2" href="#" data-slide-to="0" data-toggle="button"><?php _e( 'Exclusive Bonus', 'october' ); ?></a>
                        <a data-target="#carousel2" href="#" data-slide-to="1" class="btn"><?php _e( 'Welcome Bonus', 'october' ); ?></a>
                        <a data-target="#carousel2" href="#" data-slide-to="2" class="btn carousel2-indicators"><?php _e( 'Best Bonus', 'october' ); ?></a>
                    </div>                                     
                </div>
            </div>
            <?php
                $best_offer_args = array(
                    'tag' => 'best-offer',
                    'order' => 'DESC'
                )
            ?>
            <?php $best_offer = new WP_Query( $best_offer_args ); ?>
            <?php if ( $best_offer->have_posts() ) : ?>
                <div <?php post_class( 'bonus-column col-sm-4 col-4 col-md-4 pl-2' ); ?> id="post-<?php the_ID(); ?>"> 
                    <?php $best_offer_item_number = 0; ?>
                    <?php while ( $best_offer->have_posts() && $best_offer_item_number++ < 3 ) : $best_offer->the_post(); ?>
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
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?> 
                </div>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="container mt-5 mb-5" id="content" tabindex="-1"> 
        <div class="row"> 
            <div class="col-md-12">
                <h3 class="text-center mt-2"><?php _e( 'About us', 'october' ); ?></h3> 
            </div>
        </div>                         
        <div class="row">
            <div class="container py-3 col-lg-10 col-md-10">
                <?php the_content(); ?>
            </div>
        </div>
    </div>                     
</div>                                 

<?php get_footer(); ?>