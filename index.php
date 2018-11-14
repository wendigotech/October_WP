<?php
get_header(); ?>

                <div class="wrapper" id="index-wrapper"> 
                    <div class="mt-5 mb-5 container" id="content" tabindex="-1"> 
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
                                                <div class="px-3 col-md-6 col-sm-6 col-6">
                                                    <div class="card-block px-3 ">
                                                        <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                                                        <p><?php the_content(); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                                <div class="container col-lg-6 col-md-6">
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
                                            <div class="px-3 col-md-6 col-sm-6 col-6">
                                                <div class="card-block px-3 ">
                                                    <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                                                    <p><?php the_content(); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container col-lg-6 col-md-6">
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
                                            <div class="px-3 col-md-6 col-sm-6 col-6">
                                                <div class="card-block px-3 ">
                                                    <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                                                    <p><?php the_content(); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container col-lg-6 col-md-6">
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
                                            <div class="px-3 col-md-6 col-sm-6 col-6">
                                                <div class="card-block px-3 ">
                                                    <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                                                    <p><?php the_content(); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mt-5 mb-5 container" id="content" tabindex="-1"> 
                        <div class="row"> 
                            <div class="col-md-12">
                                <h3 class="p-2"><?php _e( 'Payment methods', 'october' ); ?></h3> 
                            </div>
                        </div>                         
                        <?php
                            $payment_args = array(
                                'category_name' => 'payment'
                            )
                        ?>
                        <?php $payment = new WP_Query( $payment_args ); ?>
                        <?php if ( $payment->have_posts() ) : ?>
                            <div <?php post_class( 'row' ); ?> id="post-<?php the_ID(); ?>">
                                <?php $payment_item_number = 0; ?>
                                <?php while ( $payment->have_posts() && $payment_item_number++ < 4 ) : $payment->the_post(); ?>
                                    <div class="container py-3 col-lg-3 col-md-3">
                                        <div class="card card-transparent">
                                            <div class="row d-flex d-sm-flex flex-sm-row d-md-flex flex-md-column flex-row">
                                                <div class="col-md-12 col-sm-6 col-6">
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
                                                <div class="px-3 col-md-12 col-sm-6 col-6">
                                                    <div class="card-block px-3">
                                                        <?php the_content(); ?>
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
                    </div>
                    <div class="container mt-5 mb-5" id="content" tabindex="-1"> 
                        <div class="row"> 
                            <div class="col-md-8 col-8">
                                <h3><?php _e( 'Bonuses', 'october' ); ?></h3> 
                            </div>
                            <div class="col-md-4 d-inline-flex justify-content-center align-items-end col-4">
                                <h4 class="text-center"><?php _e( 'Best offer', 'october' ); ?></h4>
                            </div>
                        </div>                         
                        <div class="row no-gutters" style="  ;">
                            <div class="col-md-8 col-sm-8 col-8" style="height: 32em;"> 
                                <div id="carousel2" class="carousel slide carousel-fade mt-5" data-ride="carousel" style="height: 29em; width: 90%;"> 
                                    <div class="carousel-inner" style="height: 100%;"> 
                                        <div class="carousel-item active" style="height: 100%;"> 
                                            <figure class="effect-ruby effect-ruby-1" style="height: 100%;">
                                                <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a>
                                                <figcaption>
                                                    <h2><?php the_excerpt( ); ?></h2>
                                                    <div>
                                                        <a class="btn btn-light btn-visit" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                                        <a class="btn btn-light" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                                    </div>
                                                </figcaption>                                                 
                                            </figure>
                                        </div>                                         
                                        <div class="carousel-item" style="height: 100%;"> 
</div>                                         
                                        <div class="carousel-item" style="height: 100%;"> 
</div>                                         
                                    </div>                                     
                                    <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev"> <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'october' ); ?></span> </a> 
                                    <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next"> <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'october' ); ?></span> </a>
                                    <div class="col-md-12 carousel-indicators d-flex flex-row align-items-center justify-content-around mt-5" style="margin-left: 1px; margin-right: 1px; margin-top: 23px;"> 
                                        <a class="btn active" data-target="#carousel2" href="#" data-slide-to="0" data-toggle="button"><?php _e( 'Best bonus', 'october' ); ?></a>
                                        <a data-target="#carousel2" href="#" data-slide-to="1" class="btn"><?php _e( 'Best casino', 'october' ); ?></a>
                                        <a data-target="#carousel2" href="#" data-slide-to="2" class="btn"><?php _e( 'New casino', 'october' ); ?></a>
                                    </div>                                     
                                </div>
                            </div>
                            <div class="bonus-column col-sm-4 col-4 col-md-4">                                  
</div>
                        </div>
                    </div>
                    <div class="container mt-5 mb-5" id="content" tabindex="-1"> 
                        <div class="row"> 
                            <div class="col-md-12">
                                <h3 class="text-center"><?php _e( 'About us', 'october' ); ?></h3> 
                            </div>
                        </div>                         
                        <div class="row">
                            <div class="container py-3 col-lg-10 col-md-10">
                                <p><?php _e( 'ParagraphLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est. Aenean elementum, erat at aliquet hendrerit, elit nisl posuere tortor, id suscipit diam dui sed nisi. Morbi sollicitudin massa vel tortor consequat, eget semper nisl fringilla. Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. Pellentesque fermentum nisl purus, et iaculis lectus pharetra sit amet.', 'october' ); ?></p>
                            </div>
                        </div>
                    </div>                     
                </div>                                 

<?php get_footer(); ?>