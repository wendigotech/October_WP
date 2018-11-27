<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper mt-5 pt-5 mb-5 pb-5 d-flex"> 
    <div class="container ">
        <div class="row">
            <div class="content-area col-12 ml-0 col-lg-12" id="primary" style="background-color: rgba(226, 226, 235, 0.77); border-radius: 3px;"> 
                <main class="site-main" id="main"> 
                    <div> 
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                                    <header class="entry-header"> 
                                        <h2 class="text-center"><?php the_title(); ?></h2> 
                                    </header>                                                     
                                    <div class="entry-content"> 
                                        <div id="carousel1" class="carousel slide" data-ride="carousel"> 
                                            <div class="carousel-inner"> 
                                                <div class="carousel-item active"> 
                                                    <?php if ( is_active_sidebar( 'blog1' ) ) : ?>
                                                        <div class="row" style="margin-left: 0; margin-right: 0;">
                                                            <?php dynamic_sidebar( 'blog1' ); ?>
                                                        </div>
                                                    <?php endif; ?> 
                                                </div>
                                                <div class="carousel-item"> 
                                                    <?php if ( is_active_sidebar( 'blog2' ) ) : ?>
                                                        <div class="row" style="margin-left: 0; margin-right: 0;">
                                                            <?php dynamic_sidebar( 'blog2' ); ?>
                                                        </div>
                                                    <?php endif; ?> 
                                                </div>
                                                <div class="carousel-item"> 
                                                    <?php if ( is_active_sidebar( 'blog3' ) ) : ?>
                                                        <div class="row" style="margin-left: 0; margin-right: 0;">
                                                            <?php dynamic_sidebar( 'blog3' ); ?>
                                                        </div>
                                                    <?php endif; ?> 
                                                </div>                                                                 
                                            </div>
                                            <ol class="carousel-indicators"> 
                                                <li data-target="#carousel1" data-slide-to="0" class="active"></li>                                                                 
                                                <li data-target="#carousel1" data-slide-to="1"></li>                                                                 
                                                <li data-target="#carousel1" data-slide-to="2"></li>                                                                 
                                            </ol>                                                             
                                        </div>                                                         
                                    </div>
                                    <div class="mt-5 mb-5 container" id="content" tabindex="-1" style="background-color: rgba(191, 193, 203, 0);"> 
                                        <div class="row"> 
                                            <div class="col-md-12">
                                                <h3 class="p-2"><?php _e( 'Usefull information', 'october' ); ?></h3> 
                                            </div>
                                        </div>                                                         
                                        <?php
                                            $info_args = array(
                                                'category_name' => 'info'
                                            )
                                        ?>
                                        <?php $info = new WP_Query( $info_args ); ?>
                                        <?php if ( $info->have_posts() ) : ?>
                                            <div <?php post_class( 'row' ); ?> id="post-<?php the_ID(); ?>">
                                                <?php $info_item_number = 0; ?>
                                                <?php while ( $info->have_posts() && $info_item_number++ < 4 ) : $info->the_post(); ?>
                                                    <div class="mb-2 col-lg-12 container d-flex col-md-12">
                                                        <div class="col-md-4 col-6 col-sm-6">
                                                            <figure class="snip0077 blue">
                                                                <?php
                                                                    if ( has_post_thumbnail() ) {
                                                                        the_post_thumbnail( 'normal', array(
                                                                        'class' => 'snip0077'
                                                                    ) );
                                                                    }
                                                                 ?>
                                                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                                                    <figcaption class="snip0077">
                                                                        <p><?php _e( 'Read more', 'october' ); ?></p>
                                                                    </figcaption>
                                                                </a>
                                                            </figure>
                                                        </div>
                                                        <div class="px-3 col-md-8 col-6 col-sm-6">
                                                            <div class="card-block px-3 ">
                                                                <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                                                                <div class="pg-empty-placeholder box">
                                                                    <?php the_content(); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                                <?php wp_reset_postdata(); ?>
                                            </div>
                                        <?php else : ?>
                                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                                        <?php endif; ?>
                                    </div>                                                     
                                </article>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                        <?php endif; ?> 
                    </div>                                     
                </main>                                 
            </div>
        </div>
    </div>                     
</div>                                 

<?php get_footer(); ?>