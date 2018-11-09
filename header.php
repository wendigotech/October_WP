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
                                        'menu_class' => 'navbar-nav text-center',
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
                            <div id="carousel1" class="carousel slide" data-ride="carousel">                                  

                                <div class="carousel-inner"> 
                                    <div class="carousel-item active">
                                        <div class="grid" style="   display:grid;grid-template-columns:2fr 1fr 2fr;grid-template-rows:255px 300px;grid-gap:10px;">
                                            <figure class="effect-ruby effect-ruby-1">
                                                <a href="#" style="position: relative; overflow: hidden;">
                                                    <img src="http://logodust.com/img/free/logo44.png" alt="img13">
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

                                    <div class="carousel-item">
                                        <div class="grid" style="   display:grid;grid-template-columns:2fr 1fr 2fr;grid-template-rows:255px 300px;grid-gap:10px;">
                                            <figure class="effect-ruby effect-ruby-1">
                                                <a href="#" style="position: relative; overflow: hidden;">
                                                    <img src="http://logodust.com/img/free/logo44.png" alt="img13">
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

                                    <div class="carousel-item">
                                        <div class="grid" style="   display:grid;grid-template-columns:2fr 1fr 2fr;grid-template-rows:255px 300px;grid-gap:10px;">
                                            <figure class="effect-ruby effect-ruby-1">
                                                <a href="#" style="position: relative; overflow: hidden;">
                                                    <img src="http://logodust.com/img/free/logo44.png" alt="img13">
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
                                    <div class="col-md-12 carousel-indicators d-flex flex-row align-items-center justify-content-around" style="margin-left: 1px; margin-right: 1px; margin-top: 23px;">                                          

                                        <a class="btn btn-light btn-outline-warning active" data-target="#carousel1" href="#" data-slide-to="0"><?php _e( 'Label', 'october' ); ?></a>
                                        <a class="btn btn-light btn-outline-warning" data-target="#carousel1" href="#" data-slide-to="1"><?php _e( 'Label', 'october' ); ?></a>
                                        <a class="btn btn-light btn-outline-warning" data-target="#carousel1" href="#" data-slide-to="2"><?php _e( 'Label', 'october' ); ?></a>
                                        <a class="btn btn-light btn-outline-warning" data-target="#carousel1" href="#" data-slide-to="3"><?php _e( 'Label', 'october' ); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>                         
                    </div>                     
                </div>                 
            </header>             
            <div>