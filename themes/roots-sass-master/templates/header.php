<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
  	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a href="<?php echo get_permalink(39); ?>" class="pull-right btn btn-primary hidden-xs">How Can We Help?</a>
    <a href="tel:5742653128" id="phone_button" class="pull-right btn btn-primary visible-xs"><i class="fa fa-phone"></i></a>
    <div class="navbar-header">
      
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/citadel-logo.png" title="<?php bloginfo('name'); ?>">
      </a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
