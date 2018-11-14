<!doctype html> 
<html <?php language_attributes(); ?>> 
    <head>          
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <meta name="mobile-web-app-capable" content="yes"> 
        <meta name="apple-mobile-web-app-capable" content="yes"> 
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>"> 
        <link rel="profile" href="http://gmpg.org/xfn/11"> 
        <meta name="description" content="<?php bloginfo( 'description' ); ?>"> 
        <meta name="author" content="The Pinegrow Team">          
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">                                     
        <?php wp_head(); ?>
    </head>     
    <body style="margin-top: -65px; padding-top: 65px;" class="<?php echo implode(' ', get_body_class()); ?>"> 
        <div class="hfeed site" id="page"> 
            <div id="container">
                <canvas id="canvas"></canvas>
                <script>
/**
 * Canvas Experiment
 * Based on https://tympanus.net/Development/AnimatedHeaderBackgrounds/index.html
 * Deps: GreenSocks TweenLite
 */

/**
 * Constructor
 */
function Animate(canvas, options) {
  this.canvas = canvas;
  this.options = defaults(options || {}, this.options);
  this.init();
}

/**
 * Default options
 */
Animate.prototype.options = {
  density: 10, // Affects how many poitns are created
  speed: 10, // Time in seconds to shift points
  sync: false, // Should points move in sync
  distance: 100, // Distance to move points
  lineColor: '255, 255, 255',
  circleColor: '255, 255, 255',
  radius: 10,
  lineWidth: 1,
  lines: 3,  // Number of closest lines to draw
  updateClosest : false, // Update closet points each loop
  mouse: true, // Link to mouse or random

};

/**
 * Setup everything
 */
Animate.prototype.init = function(){
  this.width = window.innerWidth;
  this.height = window.innerHeight;
  this.target = {
    position: {
      x: this.width / 2,
      y: this.height / 2
    }
  };

  // Setup canvas
  this.canvas.width = this.width;
  this.canvas.height = this.height;

  this.ctx = canvas.getContext('2d');

  window.addEventListener('resize', this.resize.bind(this));

  if(this.options.mouse === true && !('ontouchstart' in window) ) {
     window.addEventListener('mousemove', this.mousemove.bind(this));
  }

  this.points = [];
  for(var x = 0; x < this.width; x = x + this.width / this.options.density) {
    for(var y = 0; y < this.height; y = y + this.height/ this.options.density) {
      var point = new Point({
        x: x + Math.random() * this.width/ this.options.density,
        y: y + Math.random() * this.height/this.options.density
      }, this.ctx, this.points.length + 1, this.options);
      this.points.push(point);
    }
  }

  // Setup Circles
  for(var i in this.points) {
    this.points[i].circle = new Circle(this.points[i], this.ctx, this.options);
  }

  this.findClosest(); // Points

  this.animate(); // Start the loop

  this.shiftPoints(); // Start the tween loop

  if(this.options.mouse === false) {
    this.moveTarget(); // Start the random target loop
  }

};

/*
 * Cycles through each Point and finds its neighbors
 */
Animate.prototype.findClosest = function() {
  for(var i = 0; i < this.points.length; i++) {
    // Save the point
    var point = this.points[i];
    // Reset
    point.closest = [];
    // Cycle through the others
    for(var j = 0; j < this.points.length; j++) {
      // Point to test
      var testPoint = this.points[j];
      if(point.id !== testPoint.id) {
        var placed = false, k;
        for (k = 0; k < this.options.lines; k ++) {
          if(!placed) {
            if(typeof point.closest[k] === 'undefined') {
              point.closest[k] = testPoint;
              placed = true;
            }
          }
        }

        for(k = 0; k < this.options.lines; k++){
          if(!placed) {
            if(point.distanceTo(testPoint) < point.distanceTo(point.closest[k])) {
              point.closest[k] = testPoint;
              placed = true;
            }
          }
        }
      }
    }
  }
};

/**
 * Animation Loop
 */
Animate.prototype.animate = function() {
  var i;
  // Should we recalucate closest?
  if(this.options.updateClosest) {
    this.findClosest();
  }

  // Calculate Opacity
  for(i in this.points) {
    if(this.points[i].distanceTo(this.target, true) < 5000) {
       this.points[i].opacity = 0.4;
       this.points[i].circle.opacity = 0.6;
    } else if (this.points[i].distanceTo(this.target, true) < 10000) {
       this.points[i].opacity = 0.2;
       this.points[i].circle.opacity = 0.3;
    } else if (this.points[i].distanceTo(this.target, true) < 30000) {
       this.points[i].opacity = 0.1;
       this.points[i].circle.opacity = 0.2;
    } else {
       this.points[i].opacity = 0.05;
       this.points[i].circle.opacity = 0.05;
    }
  }
   // Clear
  this.ctx.clearRect(0, 0, this.width, this.height);
  for(i in this.points) {

    this.points[i].drawLines();
    this.points[i].circle.draw();
  }
 // Loop
 window.requestAnimationFrame(this.animate.bind(this));
};

/**
 * Starts each point in tween loop
 */
Animate.prototype.shiftPoints = function() {
  for(var i in this.points) {
    this.points[i].shift();
  }
};


/**
 * Make sure the canvas is the right size
 */
Animate.prototype.resize = function() {
  this.width = window.innerWidth;
  this.height = window.innerHeight;
  this.canvas.width = this.width;
  this.canvas.height = this.height;
};

/**
 * Mouse Move Event - Moves the target with the mouse
 * @param    event   {Object}   Mouse event
 */
Animate.prototype.mousemove = function(event) {
  if(event.pageX || event.pageY) {
    this.target.position.x = event.pageX;
    this.target.position.y = event.pageY;
  } else if(event.clientX || event.clientY) {
    this.target.position.x = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
    this.target.position.y = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
  }
};

/**
 * Randomly move the target
 */
Animate.prototype.moveTarget = function() {
  var _this = this;
  TweenLite.to(this.target.position, 2, {
    x : (Math.random() * (this.width - 200)) + 100,
    y : (Math.random() * (this.height - 200)) + 100,
    ease: Expo.easeInOut,
    onComplete: function() {
      _this.moveTarget();
    }
  });
};

/**
 * Point Constructor
 * @param    position   {Object}     set of x and u coords
 * @param    ctx        {Object}     Canvas context to draw on
 * @param    options    {Object}     options passed from main function
 */
function Point(position, ctx, id, options) {
  this.options = options || {};
  this.id = id;
  this.ctx = ctx;
  this.position = position || {x: 0, y: 0};
  this.origin = {
    x: this.position.x,
    y: this.position.y
  };
  this.opacity = 0;
  this.closest = [];
}

/**
 * Caluclates the distance to another point
 * @param    point    {Object}    Another Point
 * @param    abs      {Boolean}   Return the absolute value or not
 * @returns  {Number}
 */
Point.prototype.distanceTo = function(point, abs) {
  abs = abs || false;
  var distance = Math.pow(this.position.x - point.position.x, 2) + Math.pow(this.position.y - point.position.y, 2);
  return abs ? Math.abs(distance) : distance;
};

/**
 *  Draws lines to the closet points
 */
Point.prototype.drawLines = function() {
  for(var i in this.closest) {
    if(this.opacity  > 0) {
      this.ctx.beginPath();
      this.ctx.moveTo(this.position.x, this.position.y);
       var test = i + 1;
      if(!this.closest[test]) {
        test = 0;
      }
      this.ctx.lineCap = 'round';
      this.ctx.strokeStyle = 'rgba(' + this.options.lineColor + ', ' + this.opacity + ')';
       this.ctx.lineWidth = this.options.lineWidth;


      this.ctx.lineTo(this.closest[i].position.x, this.closest[i].position.y);

      this.ctx.stroke();
    }
  }
};

/**
 * Tween loop to move each point around it's origin
 */
Point.prototype.shift = function() {
  var _this = this,
       speed = this.options.speed;

  // Random the time a little
  if(this.options.sync !== true) {
    speed -= this.options.speed * Math.random();
  }
  TweenLite.to(this.position, speed, {
    x : (this.origin.x - (this.options.distance/2) + Math.random() * this.options.distance),
    y : (this.origin.y - (this.options.distance/2) + Math.random() * this.options.distance),
    ease: Expo.easeInOut,
    onComplete: function() {
      _this.shift();
    }
  });
};

/**
 * Circle Constructor
 * @param    point   {Object}    Point object
 * @param    ctx     {Object}    Context to draw on
 * @param    options {Object}    options passed from main function
 */
function Circle(point, ctx, options) {
  this.options = options || {};
  this.point = point || null;
  this.radius = this.options.radius || null;
  this.color = this.options.color || null;
  this.opacity = 0;
  this.ctx = ctx;
}


/**
 * Draws Circle to context
 */
Circle.prototype.draw = function() {
  if(this.opacity > 0) {
    this.ctx.beginPath();
    this.ctx.arc(this.point.position.x, this.point.position.y, this.options.radius, 0, 2 * Math.PI, false);
    this.ctx.fillStyle = 'rgba(' + this.options.circleColor + ', ' + this.opacity + ')';
    this.ctx.fill();
  }
};

// Get the balls rolling
new Animate(document.getElementById('canvas'));


/**
 * Utility Function to set default options
 * @param    object    {object}
 * @param    src  {object}
 */
function defaults(object, src) {
  for(var i in src) {
    if(typeof object[i] === 'undefined') {
      object[i] = src[i];
    }
  }
  return object;
}
</script>
            </div>
            <header> 
                <div itemscope="" itemtype="http://schema.org/WebSite" id="wrapper-navbar"> 
                    <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'october' ); ?></a> 
                    <nav class="navbar navbar-expand-md flex-column fixed-top navbar-light">
                        <?php if ( ! has_custom_logo() ) : ?>
                            <div class="navbar-brand mb-0 pb-md-0 position-md-absolute align-self-center"> 
                                <a rel="home" class="navbar-brand pb-md-0 align-self-center" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> 
                            </div>
                        <?php else : ?>
                            <?php the_custom_logo(); ?>
                        <?php endif; ?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-md-center w-100" id="navbarNav">
                            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                <?php wp_nav_menu( array(
                                        'menu' => 'primary',
                                        'menu_class' => 'navbar-nav text-center text-sm-center float-sm-right float-right pr-sm-5 mr-sm-5 mr-2 pr-2 pr-md-0 mr-md-0',
                                        'container' => '',
                                        'depth' => '2',
                                        'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                        'walker' => new wp_bootstrap4_navwalker()
                                ) ); ?>
                            <?php endif; ?>
                        </div>
                    </nav>                     
                </div>                 
                <div> 
                    <div class="jumbotron">
                        <div class="container mt-5">
                            <div id="carousel1" class="carousel slide" data-ride="carousel" data-pause="hover"> 
                                <div class="carousel-inner"> 
                                    <div class="carousel-item active">
                                        <?php
                                            $best_bonus_args = array(
                                                'category_name' => 'casino',
                                                'tag' => 'best-bonus',
                                                'order' => 'DESC'
                                            )
                                        ?>
                                        <?php $best_bonus = new WP_Query( $best_bonus_args ); ?>
                                        <?php if ( $best_bonus->have_posts() ) : ?>
                                            <div <?php post_class( 'grid' ); ?> id="post-<?php the_ID(); ?>">
                                                <?php $best_bonus_item_number = 0; ?>
                                                <?php while ( $best_bonus->have_posts() && $best_bonus_item_number++ < 4 ) : $best_bonus->the_post(); ?>
                                                    <figure class="effect-ruby effect-ruby-1">
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
                                    <div class="carousel-item">
                                        <?php
                                            $best_casino_args = array(
                                                'category_name' => 'casino',
                                                'tag' => 'best-casino',
                                                'order' => 'DESC'
                                            )
                                        ?>
                                        <?php $best_casino = new WP_Query( $best_casino_args ); ?>
                                        <?php if ( $best_casino->have_posts() ) : ?>
                                            <div <?php post_class( 'grid' ); ?> id="post-<?php the_ID(); ?>">
                                                <?php $best_casino_item_number = 0; ?>
                                                <?php while ( $best_casino->have_posts() && $best_casino_item_number++ < 4 ) : $best_casino->the_post(); ?>
                                                    <figure class="effect-ruby effect-ruby-2">
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
                                    <div class="carousel-item">
                                        <?php
                                            $new_casino_args = array(
                                                'category_name' => 'casino',
                                                'tag' => 'new-casino',
                                                'order' => 'DESC'
                                            )
                                        ?>
                                        <?php $new_casino = new WP_Query( $new_casino_args ); ?>
                                        <?php if ( $new_casino->have_posts() ) : ?>
                                            <div <?php post_class( 'grid' ); ?> id="post-<?php the_ID(); ?>">
                                                <?php $new_casino_item_number = 0; ?>
                                                <?php while ( $new_casino->have_posts() && $new_casino_item_number++ < 4 ) : $new_casino->the_post(); ?>
                                                    <figure class="effect-ruby effect-ruby-1">
                                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'normal' ); ?> </a> 
                                                        <figcaption>
                                                            <h2><?php the_excerpt( ); ?></h2>
                                                            <div>
                                                                <a class="btn btn-light btn-visit" href="<?php echo get_post_meta( get_the_ID(), 'Link1', true ); ?>"><?php _e( 'Visit Casino', 'october' ); ?></a>
                                                                <a class="btn btn-light" href="<?php echo get_post_meta( get_the_ID(), 'Link2', true ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_post_meta( get_the_ID(), 'T&C\'s', true ); ?>"><?php _e( 'T&amp;C\'s Apply', 'october' ); ?></a>
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
                                    <div class="carousel-item">
                                        <?php
                                            $most_visited_args = array(
                                                'category_name' => 'casino',
                                                'tag' => 'most-visited',
                                                'order' => 'DESC'
                                            )
                                        ?>
                                        <?php $most_visited = new WP_Query( $most_visited_args ); ?>
                                        <?php if ( $most_visited->have_posts() ) : ?>
                                            <div <?php post_class( 'grid' ); ?> id="post-<?php the_ID(); ?>">
                                                <?php $most_visited_item_number = 0; ?>
                                                <?php while ( $most_visited->have_posts() && $most_visited_item_number++ < 4 ) : $most_visited->the_post(); ?>
                                                    <figure class="effect-ruby effect-ruby-1">
                                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link1', true ); ?>" style="position: relative; overflow: hidden;"> <?php the_post_thumbnail( 'thumbnail' ); ?> </a> 
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
                                </div>                                 
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 carousel-indicators d-flex flex-row align-items-center justify-content-around mt-5" style="margin-left: 1px; margin-right: 1px; margin-top: 23px;"> 
                                        <a class="btn active" data-target="#carousel1" href="#" data-slide-to="0" data-toggle="button"><?php _e( 'Best bonus', 'october' ); ?></a>
                                        <a data-target="#carousel1" href="#" data-slide-to="1" class="btn"><?php _e( 'Best casino', 'october' ); ?></a>
                                        <a data-target="#carousel1" href="#" data-slide-to="2" class="btn"><?php _e( 'New casino', 'october' ); ?></a>
                                        <a data-target="#carousel1" href="#" data-slide-to="3" class="btn"><?php _e( 'Most visited', 'october' ); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>                         
                    </div>                     
                </div>                 
            </header>
            <div>