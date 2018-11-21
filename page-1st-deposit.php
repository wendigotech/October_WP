<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper mt-5 pt-5 mb-5 pb-5 d-flex"> 
    <div class="container">
        <div class="row">
            <div class="content-area col-md-12 " id="primary" style="margin-top: 50px;"> 
                <main class="site-main" id="main"> 
                    <div> 
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                                    <header class="entry-header"> 
                                        <h2><?php the_title(); ?></h2> 
                                    </header>                                                     
                                    <div class="entry-content"> 
                                        <p class="mb-5"><?php echo get_post_meta( get_the_ID(), 'about', true ); ?></p> 
                                    </div>
                                    <?php
                                        $deposit_args = array(
                                            'category_name' => 'bonuses',
                                            'tag' => 'deposit',
                                            'order' => 'DESC'
                                        )
                                    ?>
                                    <?php $deposit = new WP_Query( $deposit_args ); ?>
                                    <?php if ( $deposit->have_posts() ) : ?>
                                        <div class="grid3" id="post-<?php the_ID(); ?>">
                                            <?php $deposit_item_number = 0; ?>
                                            <?php while ( $deposit->have_posts() && $deposit_item_number++ < 5 ) : $deposit->the_post(); ?>
                                                <figure class="effect-ruby effect-ruby-3">
                                                    <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a> 
                                                    <figcaption>
                                                        <h2><?php echo get_post_meta( get_the_ID(), 'offer', true ); ?></h2>
                                                        <div>
                                                            <a class="btn btn-light btn-visit" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                                            <a class="btn btn-light btn-terms" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            <?php endwhile; ?>
                                            <?php wp_reset_postdata(); ?>
                                        </div>
                                    <?php else : ?>
                                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                                    <?php endif; ?>
                                    <div class="entry-content"> 
                                        <p class="mt-5"><?php the_content(); ?></p> 
                                    </div>
                                    <?php
                                        $random_args = array(
                                            'category_name' => 'casino, bonuses'
                                        )
                                    ?>
                                    <?php $random = new WP_Query( $random_args ); ?>
                                    <?php if ( $random->have_posts() ) : ?>
                                        <div class="entry-content d-flex"> 
                                            <div class="row pg-empty-placeholder">
                                                <?php $random_item_number = 0; ?>
                                                <?php while ( $random->have_posts() && $random_item_number++ < 3 ) : $random->the_post(); ?>
                                                    <div class="bonus-column col-sm-4 col-4 pl-2 d-flex flex-column col-md-4"> 
                                                        <figure class="effect-ruby effect-ruby-1">
                                                            <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a>
                                                            <figcaption>
                                                                <h2 class=""><?php echo get_post_meta( get_the_ID(), 'offer', true ); ?></h2>
                                                                <div>
                                                                    <a class="btn btn-light btn-visit btn-sm" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                                                    <a class="btn btn-light btn-sm btn-terms" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                                                </div>
                                                            </figcaption>                                                                             
                                                        </figure>                                                                         
                                                    </div>
                                                <?php endwhile; ?>
                                                <?php wp_reset_postdata(); ?>
                                            </div>                                                             
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