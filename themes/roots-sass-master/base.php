<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>
  
  <?php
    if(is_front_page()):
  ?>
  <div class="feature">
    <video autoplay="" loop="loop" poster="<?php echo bloginfo('stylesheet_directory'); ?>/assets/img/video.jpg" muted>
      <!--<source src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/img/envysion.mp4" type="video/mp4">-->
      <source src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/img/citadel-low-size.ogv" type="video/ogg">
      <source src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/img/citadel-low-size.mp4" type="video/mp4">
      <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/img/video.jpg" width="100%" height="100%" alt="">
    </video>
    <div class="jumbotron">
      
      <div class="container">
        <h1>DESIGN INSIGHT TO<br>PRODUCT INNOVATION</h1>
        <p>Structural Mechanics FEA and Design Optimization Consulting.</p>
        <a href="#" class="btn btn-primary">How Can We Help?</a>
      </div>
    </div>
  </div>
  
  <div class="feature_block_white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="feature_blurb">
            <h3><a href="<?php echo get_permalink(46);?>">Structural Mechanics FEA</a></h3>
            <a class="pull-left" href="<?php echo get_permalink(46);?>">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ortho-icon.png">
            </a>
            <p>Applying Finite Element Analysis (FEA) to provide clients with answers to product performance questions and insight into product behavior.</p>
            <p><a href="<?php echo get_permalink(46);?>">The Citadel approach to FEA...</a></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="feature_blurb">
            <h3><a href="<?php echo get_permalink(46);?>?activetab=2">Design Optimization</a></h3>
            <a class="pull-left" href="<?php echo get_permalink(46);?>?activetab=2">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/gears-icon.png">
            </a>
            <p>Leveraging decades of Product Development expertise to provide Design Guidance and Optimization.</p>
            <p><a href="<?php echo get_permalink(46);?>?activetab=2">What makes Citadel different...</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="feature_block_gray">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2><strong>Build your product design on a firm foundation:</strong><br>Call for a consultation on your design challenge.</h2>
          <a href="#" class="btn btn-primary">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
  <div class="feature_block_dark">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <h2>Structural Mechanics FEA<br>&amp; Design Optimization.</h2>
          <p>Citadel Structural Mechanics speaks both languages: Analysis and Design.</p>
          <a href="#" class="btn btn-primary">Work with Citadel</a>
        </div>
      </div>
    </div>
  </div>
  <?php    
    endif;
  ?>
  <?php if(!is_front_page()): ?>
  <?php $imgs = get_field('header_images'); ?>
  <?php if(have_rows('header_images')): ?>
    <div class="image_header">
      <div class="container">
        <ul class="list-unstyled">
    <?php if(sizeof($imgs) == 1): ?>
      <?php
        while( have_rows('header_images') ): the_row();
          $image = get_sub_field('image');
          echo "<li><img src='".$image['url']."'></li>";
        endwhile;
      ?>
    <?php else: ?>
      <?php
        while( have_rows('header_images') ): the_row();
          $image = get_sub_field('image');
          echo "<li><img src='".$image['url']."'></li>";
        endwhile;
      ?>
      <script>
        $(function(){
          var $lis = $(".image_header ul li");
          function fademein(lis){
            $(lis).css('opacity',1).prev().css('opacity',0);
          }
          $.each($lis, function(index, lis){
            var delay = (index)*3000;
            setTimeout(function(){
              fademein(lis);}
            , delay);
          });
        });
      </script>
    <?php endif; ?>
        </ul>
      </div>
    </div>
  <?php endif; ?>
  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->
  <?php endif; ?>

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
