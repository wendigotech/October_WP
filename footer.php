
            </div>             
            <div class="wrapper" id="wrapper-footer">
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-3 text-center col-sm-12" style="background-color: #e2e2eb; border-radius: 4px;"> 
                            <footer class="site-footer" id="colophon"> 
                                <div class="site-info"> 
                                    <h4><?php echo get_theme_mod( 'footer_text', __( 'General info', 'october' ) ); ?></h4>
                                    <a href=""><?php _e( 'Link', 'october' ); ?><p><?php _e( 'Paragraph', 'october' ); ?></p></a>
                                    <a href=""><?php _e( 'Link', 'october' ); ?><p><?php _e( 'Paragraph', 'october' ); ?></p></a> 
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
                                        <img class="w-100 img-thumbnail" src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon1', 'http://pinegrow.com/placeholders/img15.jpg' ), 'normal' ) ?>" alt=""> 
                                    </div>
                                    <div class="col-sm-2 col-md-2"> 
                                        <img class="w-100 img-thumbnail" src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon2', 'http://pinegrow.com/placeholders/img15.jpg' ), 'normal' ) ?>" alt=""> 
                                    </div>
                                    <div class="col-sm-2 col-md-2"> 
                                        <img class="w-100 img-thumbnail" src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon3', 'http://pinegrow.com/placeholders/img15.jpg' ), 'normal' ) ?>" alt=""> 
                                    </div>
                                    <div class="col-sm-2 col-md-2"> 
                                        <img class="w-100 img-thumbnail" src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon4', 'http://pinegrow.com/placeholders/img15.jpg' ), 'normal' ) ?>" alt=""> 
                                    </div>
                                    <div class="col-sm-2 col-md-2"> 
                                        <img class="w-100 img-thumbnail" src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon5', 'http://pinegrow.com/placeholders/img15.jpg' ), 'normal' ) ?>" alt=""> 
                                    </div>
                                    <div class="col-sm-2 col-md-2"> 
                                        <img class="w-100 img-thumbnail" src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon6', 'http://pinegrow.com/placeholders/img15.jpg' ), 'normal' ) ?>" alt=""> 
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
        <?php wp_footer(); ?>
    </body>     
</html>
