
            </div>             
            <div class="wrapper" id="wrapper-footer">
                <button class="btn scroll-top float-right" data-scroll="up" type="button"></button>
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-3 text-center col-sm-12" style="background-color: #e2e2eb; border-radius: 4px; box-shadow: 1px 1px 4px;"> 
                            <footer class="site-footer" id="colophon"> 
                                <div class="site-info mt-2"> 
                                    <h4><?php echo get_theme_mod( 'footer_text', __( 'General info', 'october' ) ); ?></h4>
                                    <div class="pg-empty-placeholder d-flex justify-content-between d-sm-flex d-md-flex flex-row flex-sm-row flex-md-column justify-content-sm-between justify-content-md-between align-items-center align-items-sm-center align-items-md-center">
                                        <a href=""><p><?php _e( 'Paragraph', 'october' ); ?></p></a>
                                        <a href=""><p><?php _e( 'Paragraph', 'october' ); ?></p></a>
                                        <a href=""><p><?php _e( 'Paragraph', 'october' ); ?></p></a>
                                    </div>
                                </div>                                 
                                <!-- .site-info -->                                 
                            </footer>                             
                            <!-- #colophon -->                             
                        </div>
                        <div class="col-md-9"> 
                            <footer class="site-footer" id="colophon"> 
                                <div class="site-info"> 
                                    <?php if ( has_nav_menu( 'social' ) ) : ?>
                                        <?php wp_nav_menu( array(
                                                'menu' => 'social',
                                                'menu_class' => 'nav',
                                                'container' => '',
                                                'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                                'walker' => new wp_bootstrap4_navwalker()
                                        ) ); ?>
                                    <?php endif; ?> 
                                </div>
                                <row class="site-icons mt-3 d-flex flex-row"> 
                                    <div class="col-sm-2 col-md-2"> 
                                        <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon1', 'http://pinegrow.com/placeholders/img15.jpg' ), 'normal' ) ?>" alt=""> 
                                    </div>
                                    <div class="col-sm-2 col-md-2"> 
                                        <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon2', 'http://pinegrow.com/placeholders/img15.jpg' ), 'normal' ) ?>" alt=""> 
                                    </div>
                                    <div class="col-sm-2 col-md-2"> 
                                        <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon3', 'http://pinegrow.com/placeholders/img15.jpg' ), 'normal' ) ?>" alt=""> 
                                    </div>
                                    <div class="col-sm-2 col-md-2"> 
                                        <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon4', 'http://pinegrow.com/placeholders/img15.jpg' ), 'normal' ) ?>" alt=""> 
                                    </div>
                                    <div class="col-sm-2 col-md-2"> 
                                        <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon5', 'http://pinegrow.com/placeholders/img15.jpg' ), 'normal' ) ?>" alt=""> 
                                    </div>
                                    <div class="col-sm-2 col-md-2"> 
                                        <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon6', 'http://pinegrow.com/placeholders/img15.jpg' ), 'normal' ) ?>" alt=""> 
                                    </div>
                                </row>                                 
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
        <script>
jQuery(document).ready(function () {
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scroll-top').fadeIn();
    } else {
      jQuery('.scroll-top').fadeOut();
    }
  });

  jQuery('.scroll-top').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 100);
      return false;
  });

});
</script>
        <?php wp_footer(); ?>
    </body>     
</html>
