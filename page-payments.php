<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper mt-5 pt-5 mb-5 pb-5 d-flex"> 
    <div class="container ml-5 mr-5">
        <div class="row">
            <div class="content-area col-12 ml-0 ml-sm-0 col-lg-12 col-md-12 " id="primary" style="background-color: rgba(226, 226, 235, 0.77); border-radius: 3px;"> 
                <main class="site-main" id="main"> 
                    <div> 
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                                    <header class="entry-header"> 
                                        <h2 class="text-center"><?php the_title(); ?></h2> 
                                    </header>                                                     
                                    <div class="entry-content"> 
                                        <?php the_content(); ?>
                                    </div>                                                     
                                    <?php
                                        $payment_args = array(
                                            'category_name' => 'payment'
                                        )
                                    ?>
                                    <?php $payment = new WP_Query( $payment_args ); ?>
                                    <?php if ( $payment->have_posts() ) : ?>
                                        <div <?php post_class( 'row' ); ?> id="post-<?php the_ID(); ?>">
                                            <?php while ( $payment->have_posts() ) : $payment->the_post(); ?>
                                                <div class="container col-lg-6 col-md-6 mb-2">
                                                    <div class="card card-transparent">
                                                        <div class="row ">
                                                            <div class="col-md-6 col-sm-6 col-6">
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
                                                            <div class="px-3 col-sm-6 col-6 col-md-6">
                                                                <div class="card-block px-3 ">
                                                                    <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                                                                    <div class="pg-empty-placeholder box">
                                                                        <?php the_content(); ?>
                                                                    </div>
                                                                </div>
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