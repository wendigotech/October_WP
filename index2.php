<?php
get_header(); ?>

<div class="wrapper" id="index-wrapper"> 
    <div class="container " id="content" tabindex="-1"> 
        <div class="row"> 
            <?php if ( get_theme_mod( 'show_left_sidebar' ) ) : ?><div class="col-md-4 widget-area" role="complementary" id="left-sidebar"> 
                <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?><?php dynamic_sidebar( 'left-sidebar' ); ?><?php endif; ?>                                 


            </div><?php endif; ?>                             
            <div class="col-md-8 content-area" id="primary"> 
                <main class="site-main" id="main"> 
                    <div> 
                        <?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?><article <?php post_class( 'mb-5' ); ?> id="post-<?php the_ID(); ?>"> 
                            <header class="entry-header"> 
                                <?php if ( is_singular() ) : ?><h2><?php the_title(); ?></h2><?php else : ?><h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2><?php endif; ?> 
                                <div class="entry-meta"> 
                                    <p><?php _e( 'Posted on', 'october' ); ?> <span><?php the_modified_date(); ?></span> <?php _e( 'by', 'october' ); ?> <span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span></p> 
                                </div>                                                 
                            </header>                                             
                            <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'large', array(
                                            'class' => 'mb-4'
                                        ) );
                                        }
                                     ?> 
                            <div class="entry-content"> 
                                <?php the_excerpt( ); ?> 
                                <a class="btn btn-secondary" href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'Read More', 'october' ); ?></a> 
                            </div>                                             
                            <footer class="entry-footer"></footer>                                             
                        </article><?php endwhile; ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p><?php endif; ?>                                         
                        <nav aria-label="Posts navigation"> 
                            <?php posts_nav_link( null, __( '&#xAB; Newer Posts', 'october' ), __( 'Older Posts &#xBB;', 'october' ) ); ?>                                             
                        </nav>                                         
                    </div>                                     
                </main>                                 
            </div>                             
            <?php if ( get_theme_mod( 'show_right_sidebar' ) ) : ?><div class="col-md-4 widget-area" role="complementary" id="right-sidebar"> 
                <?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?><?php dynamic_sidebar( 'right-sidebar' ); ?><?php endif; ?>                                 


            </div><?php endif; ?>                             
        </div>                         
    </div>                     
</div>                 


<?php get_footer(); ?>