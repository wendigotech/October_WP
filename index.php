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
                            <div class="col-sm-8 col-8 col-md-8"> 
                                <div id="carousel2" class="carousel slide carousel-fade" data-ride="carousel" data-pause="hover">                                      

                                    <div class="carousel-inner" style="height: 30em;"> 
                                        <?php
                                            $deposit_args = array(
                                                'category_name' => 'bonus',
                                                'tag' => 'deposit',
                                                'order' => 'DESC'
                                            )
                                        ?>
                                        <?php $deposit = new WP_Query( $deposit_args ); ?>
                                        <?php if ( $deposit->have_posts() ) : ?>
                                            <div <?php post_class( 'carousel-item active' ); ?> id="post-<?php the_ID(); ?>"> 
                                                <?php $deposit_item_number = 0; ?>
                                                <?php while ( $deposit->have_posts() && $deposit_item_number++ < 1 ) : $deposit->the_post(); ?>
                                                    <figure class="effect-ruby effect-ruby-1" style="height: 30em;">
                                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a>
                                                        <figcaption>
                                                            <h2><?php the_excerpt( ); ?></h2>
                                                            <div>
                                                                <a class="btn btn-light btn-visit" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                                                <a class="btn btn-light" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                                            </div>
                                                        </figcaption>                                                         
                                                    </figure>
                                                <?php endwhile; ?>
                                                <?php wp_reset_postdata(); ?>                                                  
                                            </div>
                                        <?php else : ?>
                                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                                        <?php endif; ?>
                                        <?php
                                            $bonus_args = array(
                                                'category_name' => 'bonus',
                                                'tag' => 'welcome',
                                                'order' => 'DESC'
                                            )
                                        ?>
                                        <?php $bonus = new WP_Query( $bonus_args ); ?>
                                        <?php if ( $bonus->have_posts() ) : ?>
                                            <div <?php post_class( 'carousel-item' ); ?> id="post-<?php the_ID(); ?>"> 
                                                <?php $bonus_item_number = 0; ?>
                                                <?php while ( $bonus->have_posts() && $bonus_item_number++ < 1 ) : $bonus->the_post(); ?>
                                                    <figure class="effect-ruby effect-ruby-1" style="height: 30em;">
                                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a>
                                                        <figcaption>
                                                            <h2><?php the_excerpt( ); ?></h2>
                                                            <div>
                                                                <a class="btn btn-light btn-visit" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                                                <a class="btn btn-light" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
                                                            </div>
                                                        </figcaption>                                                         
                                                    </figure>
                                                <?php endwhile; ?>
                                                <?php wp_reset_postdata(); ?>                                                  
                                            </div>
                                        <?php else : ?>
                                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                                        <?php endif; ?>
                                        <?php
                                            $popular_args = array(
                                                'category_name' => 'bonus',
                                                'tag' => 'popular',
                                                'order' => 'DESC'
                                            )
                                        ?>
                                        <?php $popular = new WP_Query( $popular_args ); ?>
                                        <?php if ( $popular->have_posts() ) : ?>
                                            <div <?php post_class( 'carousel-item' ); ?> id="post-<?php the_ID(); ?>"> 
                                                <?php $popular_item_number = 0; ?>
                                                <?php while ( $popular->have_posts() && $popular_item_number++ < 1 ) : $popular->the_post(); ?>
                                                    <figure class="effect-ruby effect-ruby-1" style="height: 30em;">
                                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a>
                                                        <figcaption>
                                                            <h2><?php the_excerpt( ); ?></h2>
                                                            <div>
                                                                <a class="btn btn-light btn-visit" href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                                                <a class="btn btn-light" href="<?php echo get_post_meta( get_the_ID(), 'link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 't&c', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
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

                                    <div class="col-md-12 carousel-indicators d-flex flex-row align-items-center justify-content-around" style="margin-left: 1px; margin-right: 1px; margin-top: 23px;"> 
                                        <a class="btn active carousel-indicators2" data-target="#carousel2" href="#" data-slide-to="0" data-toggle="button"><?php _e( '1st Deposit Bonus', 'october' ); ?></a>
                                        <a data-target="#carousel2" href="#" data-slide-to="1" class="btn"><?php _e( 'Welcome Bonus', 'october' ); ?></a>
                                        <a data-target="#carousel2" href="#" data-slide-to="2" class="btn carousel2-indicators"><?php _e( 'Popular Bonus', 'october' ); ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $best_offer_args = array(
                                    'category_name' => 'bonus',
                                    'tag' => 'best-offer',
                                    'order' => 'DESC'
                                )
                            ?>
                            <?php $best_offer = new WP_Query( $best_offer_args ); ?>
                            <?php if ( $best_offer->have_posts() ) : ?>
                                <?php $best_offer_item_number = 0; ?>
                                <?php while ( $best_offer->have_posts() && $best_offer_item_number++ < 3 ) : $best_offer->the_post(); ?>
                                    <div <?php post_class( 'bonus-column col-sm-4 col-4 col-md-4 pl-2' ); ?> id="post-<?php the_ID(); ?>">                                          
</div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.', 'october' ); ?></p>
                            <?php endif; ?>
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