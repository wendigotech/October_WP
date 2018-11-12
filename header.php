<!doctype html> 
<html <?php language_attributes(); ?>> 
    <head>          
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <meta name="mobile-web-app-capable" content="yes"> 
        <meta name="apple-mobile-web-app-capable" content="yes"> 
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>"> 
        <link rel="profile" href="http://gmpg.org/xfn/11"> 
        <meta name="description" content="<?php bloginfo( 'description' ); ?>"> 
        <meta name="author" content="The Pinegrow Team">          
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">                                     
    </head>     
    <body class="<?php echo implode(' ', get_body_class()); ?>"> 
        <div class="hfeed site" id="page"> 
            <header> 
                <div itemscope="" itemtype="http://schema.org/WebSite" id="wrapper-navbar"> 
                    <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'october' ); ?></a> 
                    <nav class="navbar navbar-expand-md flex-column fixed-top navbar-light">
                        <?php if ( ! has_custom_logo() ) : ?>
                            <div class="navbar-brand mb-0 pb-md-0 position-md-absolute align-self-center"> 
                                <a rel="home" class="navbar-brand pb-md-0 align-self-center" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> 
                            </div>
                        <?php else : ?>
                            <?php the_custom_logo(); ?>
                        <?php endif; ?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-md-center w-100" id="navbarNav">
                            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                <?php wp_nav_menu( array(
                                        'menu' => 'primary',
                                        'menu_class' => 'navbar-nav text-center text-sm-center float-right float-sm-right',
                                        'container' => '',
                                        'depth' => '2',
                                        'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                        'walker' => new wp_bootstrap4_navwalker()
                                ) ); ?>
                            <?php endif; ?>
                        </div>
                    </nav>                     
                </div>                 
                <div> 
                    <div class="jumbotron">
                        <div class="container">
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
                                            <div style="   display:grid;grid-template-columns:4fr 1fr 2fr 4fr;grid-template-rows:255px 300px;grid-gap:10px;" <?php post_class( 'grid' ); ?> id="post-<?php the_ID(); ?>">
                                                <?php $best_bonus_item_number = 0; ?>
                                                <?php while ( $best_bonus->have_posts() && $best_bonus_item_number++ < 4 ) : $best_bonus->the_post(); ?>
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
                                            <div style="   display:grid;grid-template-columns:4fr 1fr 2fr 4fr;grid-template-rows:255px 300px;grid-gap:10px;" <?php post_class( 'grid' ); ?> id="post-<?php the_ID(); ?>">
                                                <?php $best_casino_item_number = 0; ?>
                                                <?php while ( $best_casino->have_posts() && $best_casino_item_number++ < 4 ) : $best_casino->the_post(); ?>
                                                    <figure class="effect-ruby effect-ruby-2">
                                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a> 
                                                        <figcaption>
                                                            <h2><?php the_excerpt( ); ?></h2>
                                                            <div>
                                                                <a class="btn btn-light btn-visit" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                                                <a class="btn btn-light" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
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
                                            <div style="   display:grid;grid-template-columns:4fr 1fr 2fr 4fr;grid-template-rows:255px 300px;grid-gap:10px;" <?php post_class( 'grid' ); ?> id="post-<?php the_ID(); ?>">
                                                <?php $new_casino_item_number = 0; ?>
                                                <?php while ( $new_casino->have_posts() && $new_casino_item_number++ < 4 ) : $new_casino->the_post(); ?>
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
                                            <div style="   display:grid;grid-template-columns:4fr 1fr 2fr 4fr;grid-template-rows:255px 300px;grid-gap:10px;" <?php post_class( 'grid' ); ?> id="post-<?php the_ID(); ?>">
                                                <?php $most_visited_item_number = 0; ?>
                                                <?php while ( $most_visited->have_posts() && $most_visited_item_number++ < 4 ) : $most_visited->the_post(); ?>
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
            </header>             
            <div>