
            </div>             
            <div class="wrapper" id="wrapper-footer"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <footer class="site-footer" id="colophon"> 
                                <div class="site-info"> 
                                    <p><?php echo get_theme_mod( 'footer_text', 'Proudly powered by WordPress | Theme: Starter Theme 2 by Pinegrow 2018. (Version: 0.0.0)' ); ?></p> 
                                </div>                                 
                                <!-- .site-info -->                                 
                            </footer>                             
                            <!-- #colophon -->                             
                        </div>                         
                        <!--col end -->                         
                    </div>                     
                </div>                 
                <!-- container end -->                 
            </div>             
        </div>                                                      
        <script>
    jQuery(function() {
    jQuery('[data-toggle="tooltip"]').tooltip();
})
</script>
    </body>     
</html>
<html lang="en"> 
    <head>          
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <meta name="mobile-web-app-capable" content="yes"> 
        <meta name="apple-mobile-web-app-capable" content="yes"> 
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>"> 
        <link rel="profile" href="http://gmpg.org/xfn/11"> 
        <meta name="description" content="<?php bloginfo( 'description' ); ?>"> 
        <meta name="author" content="The Pinegrow Team"> 
        <title>
            <?php _e( 'Pinegrow Starter Theme 2', 'october' ); ?>
        </title>         
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">                                     
    </head>     
    <body> 
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
            </header>             
            <div>____WP_END_HEADER____                 
                <div class="wrapper" id="index-wrapper"> 
                    <div class="container mt-5 mb-5" id="content" tabindex="-1"> 
                        <div class="row"> 
                            <div class="col-md-12">
                                <h3><?php _e( 'Column title', 'october' ); ?></h3> 
                            </div>
                        </div>                         
                        <div class="row">
                            <div class="container py-3 col-lg-6 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45" class="snip0077"/>
                                                <figcaption class="snip0077">
                                                    <p><?php _e( 'Read more', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-6 col-sm-6 col-6">
                                            <div class="card-block px-3">
                                                <h6 class="card-title text-center"><?php _e( 'Lorem ipsum dolor sit amet', 'october' ); ?></h6>
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container py-3 col-lg-6 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45"/>
                                                <figcaption>
                                                    <p><?php _e( 'I propose we leave math to the machines and go play outside.', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-6">
                                            <div class="card-block px-3">
                                                <h4 class="card-title text-center"><?php _e( 'Lorem ipsum dolor sit amet', 'october' ); ?></h4>
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container py-3 col-lg-6 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45"/>
                                                <figcaption>
                                                    <p><?php _e( 'I propose we leave math to the machines and go play outside.', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-6">
                                            <div class="card-block px-3">
                                                <h4 class="card-title text-center"><?php _e( 'Lorem ipsum dolor sit amet', 'october' ); ?></h4>
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container py-3 col-lg-6 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45"/>
                                                <figcaption>
                                                    <p><?php _e( 'I propose we leave math to the machines and go play outside.', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-6">
                                            <div class="card-block px-3">
                                                <h4 class="card-title text-center"><?php _e( 'Lorem ipsum dolor sit amet', 'october' ); ?></h4>
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5 mb-5" id="content" tabindex="-1"> 
                        <div class="row"> 
                            <div class="col-md-12">
                                <h3><?php _e( 'Column title', 'october' ); ?></h3> 
                            </div>
                        </div>                         
                        <div class="row">
                            <div class="container py-3 col-lg-3 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-12 col-lg-12">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45"/>
                                                <figcaption>
                                                    <p><?php _e( 'I propose we leave math to the machines and go play outside.', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-12">
                                            <div class="card-block px-3">
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container py-3 col-lg-3 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-12 col-lg-12">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45"/>
                                                <figcaption>
                                                    <p><?php _e( 'I propose we leave math to the machines and go play outside.', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-12">
                                            <div class="card-block px-3">
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container py-3 col-lg-3 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-12 col-lg-12">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45"/>
                                                <figcaption>
                                                    <p><?php _e( 'I propose we leave math to the machines and go play outside.', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-12">
                                            <div class="card-block px-3">
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container py-3 col-lg-3 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-12 col-lg-12">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45"/>
                                                <figcaption>
                                                    <p><?php _e( 'I propose we leave math to the machines and go play outside.', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-12">
                                            <div class="card-block px-3">
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5 mb-5" id="content" tabindex="-1"> 
                        <div class="row"> 
                            <div class="col-md-8">
                                <h3><?php _e( 'Column title', 'october' ); ?></h3> 
                            </div>
                            <div class="col-md-4 d-inline-flex justify-content-center align-items-end">
                                <h6 class="text-center"><?php _e( 'Column title', 'october' ); ?></h6> 
                            </div>
                        </div>                         
                        <div class="row" style="display:grid;grid-template-columns:1fr 1fr 1fr 1fr 2fr;grid-template-rows:100px 50px 150px 150px;grid-gap:5px;">
                            <div id="carousel1" class="carousel slide" data-ride="carousel" style="grid-area:1 / 1 / 6 / 5;"> 
                                <div class="carousel-inner"> 
                                    <div class="carousel-item active"> 
                                        <img class="d-block w-100" src="http://pinegrow.com/placeholders/img10.jpg" alt="First slide"> 
                                    </div>                                     
                                    <div class="carousel-item"> 
                                        <img class="d-block w-100" src="http://pinegrow.com/placeholders/img13.jpg" alt="Second slide"> 
                                        <div class="carousel-caption d-none d-md-block"> 
                                            <h3><?php _e( 'Slide label 2', 'october' ); ?></h3> 
                                            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'october' ); ?></p> 
                                        </div>                                         
                                    </div>                                     
                                    <div class="carousel-item"> 
                                        <img class="d-block w-100" src="http://pinegrow.com/placeholders/img14.jpg" alt="Third slide"> 
                                    </div>                                     
                                </div>
                                <ol class="carousel-indicators justify-content-between "> 
                                    <button class="btn btn-primary active" data-target="#carousel1" aria-expanded="false" aria-controls="collapseExample" data-slide-to="0" type="button">
                                        <?php _e( 'Button', 'october' ); ?>
                                    </button>
                                    <button class="btn btn-primary" data-target="#carousel1" aria-expanded="false" aria-controls="collapseExample" data-slide-to="1" type="button">
                                        <?php _e( 'Button', 'october' ); ?>
                                    </button>
                                    <button class="btn btn-primary" data-target="#carousel1" aria-expanded="false" aria-controls="collapseExample" data-slide-to="2" type="button">
                                        <?php _e( 'Button', 'october' ); ?>
                                    </button>                                     
                                </ol>                                 
                            </div>
                            <figure class="effect-ruby" style="grid-area:1 / 5 / 3 / 6;">
                                <a href="#" style="position: relative; overflow: hidden;">
                                    <img src="https://images.unsplash.com/photo-1494119023197-238489d8dce3?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=d960e07ad7b81180215edea3a1071268" alt="img13">
                                </a>
                                <figcaption>
                                    <h2><?php _e( 'Glowing', 'october' ); ?> </h2>
                                    <div>
                                        <a class="btn btn-light btn-sm btn-visit" href="#"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                        <a class="btn btn-light btn-sm" href="#" data-toggle="tooltip" data-placement="bottom" title="abc"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                    </div>
                                </figcaption>                                 
                            </figure>
                            <figure class="effect-ruby" style="grid-area:4 / 5 / 5 / 6;">
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
                            <figure class="effect-ruby" style="grid-area:3 / 5 / 4 / 6;">
                                <a href="#" style="position: relative; overflow: hidden;">
                                    <img src="https://images.unsplash.com/photo-1494119023197-238489d8dce3?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=d960e07ad7b81180215edea3a1071268" alt="img13">
                                </a>
                                <figcaption>
                                    <h2><?php _e( 'Glowing', 'october' ); ?> </h2>
                                    <div>
                                        <a class="btn btn-light btn-visit btn-sm" href="#"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                        <a class="btn btn-light" href="#" data-toggle="tooltip" data-placement="bottom" title="abc"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                    </div>
                                </figcaption>                                 
                            </figure>
                        </div>
                    </div>                     
                </div>                                 ____WP_START_FOOTER____
            </div>             
            <div class="wrapper" id="wrapper-footer"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <footer class="site-footer" id="colophon"> 
                                <div class="site-info"> 
                                    <p><?php echo get_theme_mod( 'footer_text', 'Proudly powered by WordPress | Theme: Starter Theme 2 by Pinegrow 2018. (Version: 0.0.0)' ); ?></p> 
                                </div>                                 
                                <!-- .site-info -->                                 
                            </footer>                             
                            <!-- #colophon -->                             
                        </div>                         
                        <!--col end -->                         
                    </div>                     
                </div>                 
                <!-- container end -->                 
            </div>             
        </div>                                                      
        <script>
    jQuery(function() {
    jQuery('[data-toggle="tooltip"]').tooltip();
})
</script>
    </body>     
</html>
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
        <title>
            <?php _e( 'Pinegrow Starter Theme 2', 'october' ); ?>
        </title>         
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">                                     
        <?php wp_head(); ?>
    </head>     
    <body> 
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
            </header>             
            <div>____WP_END_HEADER____                 
                <div class="wrapper" id="index-wrapper"> 
                    <div class="container mt-5 mb-5" id="content" tabindex="-1"> 
                        <div class="row"> 
                            <div class="col-md-12">
                                <h3><?php _e( 'Column title', 'october' ); ?></h3> 
                            </div>
                        </div>                         
                        <div class="row">
                            <div class="container py-3 col-lg-6 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45" class="snip0077"/>
                                                <figcaption class="snip0077">
                                                    <p><?php _e( 'Read more', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-6 col-sm-6 col-6">
                                            <div class="card-block px-3">
                                                <h6 class="card-title text-center"><?php _e( 'Lorem ipsum dolor sit amet', 'october' ); ?></h6>
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container py-3 col-lg-6 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45"/>
                                                <figcaption>
                                                    <p><?php _e( 'I propose we leave math to the machines and go play outside.', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-6">
                                            <div class="card-block px-3">
                                                <h4 class="card-title text-center"><?php _e( 'Lorem ipsum dolor sit amet', 'october' ); ?></h4>
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container py-3 col-lg-6 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45"/>
                                                <figcaption>
                                                    <p><?php _e( 'I propose we leave math to the machines and go play outside.', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-6">
                                            <div class="card-block px-3">
                                                <h4 class="card-title text-center"><?php _e( 'Lorem ipsum dolor sit amet', 'october' ); ?></h4>
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container py-3 col-lg-6 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45"/>
                                                <figcaption>
                                                    <p><?php _e( 'I propose we leave math to the machines and go play outside.', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-6">
                                            <div class="card-block px-3">
                                                <h4 class="card-title text-center"><?php _e( 'Lorem ipsum dolor sit amet', 'october' ); ?></h4>
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5 mb-5" id="content" tabindex="-1"> 
                        <div class="row"> 
                            <div class="col-md-12">
                                <h3><?php _e( 'Column title', 'october' ); ?></h3> 
                            </div>
                        </div>                         
                        <div class="row">
                            <div class="container py-3 col-lg-3 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-12 col-lg-12">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45"/>
                                                <figcaption>
                                                    <p><?php _e( 'I propose we leave math to the machines and go play outside.', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-12">
                                            <div class="card-block px-3">
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container py-3 col-lg-3 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-12 col-lg-12">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45"/>
                                                <figcaption>
                                                    <p><?php _e( 'I propose we leave math to the machines and go play outside.', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-12">
                                            <div class="card-block px-3">
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container py-3 col-lg-3 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-12 col-lg-12">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45"/>
                                                <figcaption>
                                                    <p><?php _e( 'I propose we leave math to the machines and go play outside.', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-12">
                                            <div class="card-block px-3">
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container py-3 col-lg-3 col-md-6">
                                <div class="card card-transparent">
                                    <div class="row ">
                                        <div class="col-md-12 col-lg-12">
                                            <figure class="snip0077 blue">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample45.jpg" alt="sampl45"/>
                                                <figcaption>
                                                    <p><?php _e( 'I propose we leave math to the machines and go play outside.', 'october' ); ?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="px-3 col-md-12">
                                            <div class="card-block px-3">
                                                <p class="card-text"><?php _e( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore m', 'october' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5 mb-5" id="content" tabindex="-1"> 
                        <div class="row"> 
                            <div class="col-md-8">
                                <h3><?php _e( 'Column title', 'october' ); ?></h3> 
                            </div>
                            <div class="col-md-4 d-inline-flex justify-content-center align-items-end">
                                <h6 class="text-center"><?php _e( 'Column title', 'october' ); ?></h6> 
                            </div>
                        </div>                         
                        <div class="row" style="display:grid;grid-template-columns:1fr 1fr 1fr 1fr 2fr;grid-template-rows:100px 50px 150px 150px;grid-gap:5px;">
                            <div id="carousel1" class="carousel slide" data-ride="carousel" style="grid-area:1 / 1 / 6 / 5;"> 
                                <div class="carousel-inner"> 
                                    <div class="carousel-item active"> 
                                        <img class="d-block w-100" src="http://pinegrow.com/placeholders/img10.jpg" alt="First slide"> 
                                    </div>                                     
                                    <div class="carousel-item"> 
                                        <img class="d-block w-100" src="http://pinegrow.com/placeholders/img13.jpg" alt="Second slide"> 
                                        <div class="carousel-caption d-none d-md-block"> 
                                            <h3><?php _e( 'Slide label 2', 'october' ); ?></h3> 
                                            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'october' ); ?></p> 
                                        </div>                                         
                                    </div>                                     
                                    <div class="carousel-item"> 
                                        <img class="d-block w-100" src="http://pinegrow.com/placeholders/img14.jpg" alt="Third slide"> 
                                    </div>                                     
                                </div>
                                <ol class="carousel-indicators justify-content-between "> 
                                    <button class="btn btn-primary active" data-target="#carousel1" aria-expanded="false" aria-controls="collapseExample" data-slide-to="0" type="button">
                                        <?php _e( 'Button', 'october' ); ?>
                                    </button>
                                    <button class="btn btn-primary" data-target="#carousel1" aria-expanded="false" aria-controls="collapseExample" data-slide-to="1" type="button">
                                        <?php _e( 'Button', 'october' ); ?>
                                    </button>
                                    <button class="btn btn-primary" data-target="#carousel1" aria-expanded="false" aria-controls="collapseExample" data-slide-to="2" type="button">
                                        <?php _e( 'Button', 'october' ); ?>
                                    </button>                                     
                                </ol>                                 
                            </div>
                            <figure class="effect-ruby" style="grid-area:1 / 5 / 3 / 6;">
                                <a href="#" style="position: relative; overflow: hidden;">
                                    <img src="https://images.unsplash.com/photo-1494119023197-238489d8dce3?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=d960e07ad7b81180215edea3a1071268" alt="img13">
                                </a>
                                <figcaption>
                                    <h2><?php _e( 'Glowing', 'october' ); ?> </h2>
                                    <div>
                                        <a class="btn btn-light btn-sm btn-visit" href="#"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                        <a class="btn btn-light btn-sm" href="#" data-toggle="tooltip" data-placement="bottom" title="abc"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                    </div>
                                </figcaption>                                 
                            </figure>
                            <figure class="effect-ruby" style="grid-area:4 / 5 / 5 / 6;">
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
                            <figure class="effect-ruby" style="grid-area:3 / 5 / 4 / 6;">
                                <a href="#" style="position: relative; overflow: hidden;">
                                    <img src="https://images.unsplash.com/photo-1494119023197-238489d8dce3?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=d960e07ad7b81180215edea3a1071268" alt="img13">
                                </a>
                                <figcaption>
                                    <h2><?php _e( 'Glowing', 'october' ); ?> </h2>
                                    <div>
                                        <a class="btn btn-light btn-visit btn-sm" href="#"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                        <a class="btn btn-light" href="#" data-toggle="tooltip" data-placement="bottom" title="abc"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                    </div>
                                </figcaption>                                 
                            </figure>
                        </div>
                    </div>                     
                </div>                                 ____WP_START_FOOTER____
            </div>             
            <div class="wrapper" id="wrapper-footer"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <footer class="site-footer" id="colophon"> 
                                <div class="site-info"> 
                                    <p><?php echo get_theme_mod( 'footer_text', 'Proudly powered by WordPress | Theme: Starter Theme 2 by Pinegrow 2018. (Version: 0.0.0)' ); ?></p> 
                                </div>                                 
                                <!-- .site-info -->                                 
                            </footer>                             
                            <!-- #colophon -->                             
                        </div>                         
                        <!--col end -->                         
                    </div>                     
                </div>                 
                <!-- container end -->                 
            </div>             
        </div>                                                      
        <script>
    jQuery(function() {
    jQuery('[data-toggle="tooltip"]').tooltip();
})
</script>
        <?php wp_footer(); ?>
    </body>     
</html>
