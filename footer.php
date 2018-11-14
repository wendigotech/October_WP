
            </div>             
            <div class="wrapper" id="wrapper-footer">
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-3 text-center" style="background-color: #e2e2eb; border-radius: 4px;"> 
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
                                <div class="site-icons d-md-flex mt-3"> 
                                    <div class="col-md-3"> 
                                        <a href="#"> 
                                            <img class="w-100 img-thumbnail" src="http://pinegrow.com/placeholders/img15.jpg" alt=""> 
                                        </a>                                         
                                    </div>
                                    <div class="col-md-3"> 
                                        <a href="#"> 
                                            <img class="w-100 img-thumbnail" src="http://pinegrow.com/placeholders/img15.jpg" alt=""> 
                                        </a>                                         
                                    </div>
                                    <div class="col-md-3"> 
                                        <a href="#"> 
                                            <img class="w-100 img-thumbnail" src="http://pinegrow.com/placeholders/img15.jpg" alt=""> 
                                        </a>                                         
                                    </div>
                                    <div class="col-md-3"> 
                                        <a href="#"> 
                                            <img class="w-100 img-thumbnail" src="http://pinegrow.com/placeholders/img15.jpg" alt=""> 
                                        </a>                                         
                                    </div>
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
