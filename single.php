<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper mt-5 pt-5 mb-5 pb-5 d-flex"> 
    <div class="container">
        <div class="row">
            <div class="content-area col-md-12 " id="primary"> 
                <main class="site-main" id="main"> 
                    <div> 
                        <?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?><article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                            <header class="entry-header"> 
                                <h2 class="text-center"><?php the_title(); ?></h2> 
                            </header>                                             
                            <div class="entry-content"> 
                                <p class="mt-5"><?php the_content(); ?></p> 
                            </div>                                             
                        </article><?php endwhile; ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p><?php endif; ?>                                         
                    </div>                                     
                </main>                                 
            </div>
        </div>
    </div>                     
</div>                 


<?php get_footer(); ?>