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
                                    <div class="carousel-item">
                                        <div class="grid" style="   display:grid;grid-template-columns:2fr 1fr 2fr;grid-template-rows:255px 300px;grid-gap:10px;">
                                            <?php
                                                $best_bonuses_args = array(
                                                    'category_name' => 'casino',
                                                    'tag' => 'best-bonus',
                                                    'order' => 'ASC',
                                                    'orderby' => 'date'
                                                )
                                            ?>
                                            <?php $best_bonuses = new WP_Query( $best_bonuses_args ); ?>
                                            <?php if ( $best_bonuses->have_posts() ) : ?>
                                                <?php $best_bonuses_item_number = 0; ?>
                                                <?php while ( $best_bonuses->have_posts() && $best_bonuses_item_number++ < 1 ) : $best_bonuses->the_post(); ?>
                                                    <figure <?php post_class( 'effect-ruby effect-ruby-1' ); ?> id="post-<?php the_ID(); ?>">
                                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a> 
                                                        <figcaption>
                                                            <h2><?php the_excerpt( ); ?></h2>
                                                            <div>
                                                                <a class="btn btn-light btn-visit" href="#"><?php echo get_field( 'link3' ); ?></a>
                                                                <a class="btn btn-light" href="#" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field( 't&cs' ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                <?php endwhile; ?>
                                                <?php wp_reset_postdata(); ?>
                                            <?php else : ?>
                                                <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                                            <?php endif; ?>
                                            <figure class="effect-ruby">
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
                                            <figure class="effect-ruby">
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
                                            <figure class="effect-ruby" style="grid-area:2 / 2 / 3 / 4;">
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
                                        </div>                                         
                                    </div>                                     
                                </div>                                 
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 carousel-indicators d-flex flex-row align-items-center justify-content-around mt-5" style="margin-left: 1px; margin-right: 1px; margin-top: 23px;"> 
                                        <a class="btn active" data-target="#carousel1" href="#" data-slide-to="0" data-toggle="button"><?php _e( 'Label', 'october' ); ?></a>
                                        <a data-target="#carousel1" href="#" data-slide-to="1" class="btn"><?php _e( 'Label', 'october' ); ?></a>
                                        <a data-target="#carousel1" href="#" data-slide-to="2" class="btn"><?php _e( 'Label', 'october' ); ?></a>
                                        <a data-target="#carousel1" href="#" data-slide-to="3" class="btn"><?php _e( 'Label', 'october' ); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>                         
                    </div>                     
                </div>                 
            </header>             
            <div>