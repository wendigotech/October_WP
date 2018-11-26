<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper mt-5 pt-5 mb-5 pb-5 d-flex"> 
    <div class="container">
        <div class="row">
            <div class="content-area col-12 ml-0 col-lg-11 ml-md-5 col-md-11" id="primary" style="background-color: rgba(226, 226, 235, 0.77); border-radius: 3px;"> 
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
    <div role="complementary" class="col-sm-12 d-none col-8 d-md-inline col-lg-3 mr-3 col-md-3 "> 
        <div class="sidebar">
            <row>
                <?php
                    $big_args = array(
                        'tag' => 'big',
                        'order' => 'DESC'
                    )
                ?>
                <?php $big = new WP_Query( $big_args ); ?>
                <?php if ( $big->have_posts() ) : ?>
                    <?php $big_item_number = 0; ?>
                    <?php while ( $big->have_posts() && $big_item_number++ < 1 ) : $big->the_post(); ?>
                        <figure style="height: 8cm;" <?php post_class( 'effect-ruby effect-ruby-1 ' ); ?> id="post-<?php the_ID(); ?>">
                            <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"> <?php the_post_thumbnail( 'large' ); ?> </a>
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
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                <?php endif; ?>
            </row>
            <div class="row">
                <div class="col-md-12 col-sm-10 col-12 ">
                    <div class="row">
                        <div class="col-md-5"> 
                            <h4 class="text-center"><?php _e( 'Information for you', 'october' ); ?></h4>
                            <?php if ( is_active_sidebar( 'side-links' ) ) : ?>
                                <ul class="list-unstyled text-center">
                                    <?php dynamic_sidebar( 'side-links' ); ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <?php
                            $best_offer_args = array(
                                'tag' => 'best-offer',
                                'order' => 'DESC'
                            )
                        ?>
                        <?php $best_offer = new WP_Query( $best_offer_args ); ?>
                        <?php if ( $best_offer->have_posts() ) : ?>
                            <div <?php post_class( 'col-10 col-md-11 col-lg-7' ); ?> id="post-<?php the_ID(); ?>">
                                <h4><?php _e( 'Best offer', 'october' ); ?></h4> 
                                <?php $best_offer_item_number = 0; ?>
                                <?php while ( $best_offer->have_posts() && $best_offer_item_number++ < 3 ) : $best_offer->the_post(); ?>
                                    <figure class="effect-ruby effect-ruby-1" style="height: 5cm;">
                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"> <?php the_post_thumbnail( 'normal' ); ?> </a> 
                                        <figcaption>
                                            <h3><?php echo get_post_meta( get_the_ID(), 'offer', true ); ?></h3>
                                            <div>
                                                <a class="btn btn-light btn-visit btn-sm" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                                <a class="btn btn-light btn-sm btn-terms" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                        <?php endif; ?>
                    </div>                                     
                </div>
            </div>
        </div>                         
    </div>
</div>                                 

<?php get_footer(); ?>