<footer class="content-info" role="contentinfo">
  <div class="footer_head">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-left">
          <a href="<?php echo bloginfo('url'); ?>"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/img/citadel-logo-footer.png"></a>
        </div>
        <div class="col-md-6 text-right footer_phone">
          <h2><a href="tel:5742653128">574-265-3128</a></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>Contact</h4>
        Citadel Structural Mechanics LLC<br>
        1692 S Walnut Dr<br>
        Warsaw, IN 46580<br><br>
        574-265-3128
      </div>
      <div class="col-md-4">
        <h4>Sitemap Menu</h4>
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'list-unstyled'));
        endif;
      ?>
      </div>
      <div class="col-md-4 text-right">
        <h4>Legal</h4>
        Copyright <?php echo date("Y"); ?><br>
        Citadel Structural Mechanics LLC<br>
        All Rights Reserved<br>
        <br>
        <a href="<?php echo get_permalink('privacy-policy'); ?>">Privacy Policy</a>
      </div>
    </div>
  </div>
</footer>
