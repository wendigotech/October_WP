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
         
         
         
         
        
        
        
        
    <?php wp_head(); ?></head>     
    <body style="margin-top: -65px; padding-top: 65px; background-attachment: fixed; background-position: center center; background-size: cover; background-blend-mode: color-dodge; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/rawpixel-1048286-unsplash2.jpg');" class="<?php echo implode(' ', get_body_class()); ?>"> 
        <div class="hfeed site" id="page"> 
            <div id="container" style="position: absolute;">
                <canvas id="canvas"></canvas>
            </div>
            <header> 
                <div itemscope="" itemtype="http://schema.org/WebSite" id="wrapper-navbar"> 
                    <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'october' ); ?></a> 
                    <nav class="navbar navbar-expand-md flex-column fixed-top navbar-light">
                        <?php if ( ! has_custom_logo() ) : ?><div class="navbar-brand mb-0 pb-md-0 position-md-absolute align-self-center"> 
                            <a rel="home" class="navbar-brand pb-md-0 align-self-center" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> 
                        </div>
                        <?php else : ?><?php the_custom_logo(); ?><?php endif; ?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-md-center w-100" id="navbarNav">
                            <?php if ( has_nav_menu( 'primary' ) ) : ?><?php wp_nav_menu( array(
                                        'menu' => 'primary',
                                        'menu_class' => 'navbar-nav text-center text-sm-center float-sm-right float-right pr-sm-5 mr-sm-5 mr-2 pr-2 pr-md-0 mr-md-0',
                                        'container' => '',
                                        'depth' => '2',
                                        'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                        'walker' => new wp_bootstrap4_navwalker()
                                ) ); ?><?php endif; ?>
                        </div>
                    </nav>                     
                </div>                 
            </header>
            <div>