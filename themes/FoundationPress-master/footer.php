  <footer class="wrap">
    <div class="row">
      <!-- footer logo -->
      <img class="small-centered medium-uncentered medium-3 large-3 columns" src="<?php bloginfo('template_directory'); ?>/css/images/footer-logo.png" alt="MatchFC: Match Fixture Connection">

      <!-- Container for footer navigation -->
      <div class="small-12 medium-6 large-5 large-offset-1 columns">

        <!-- Left Navigation Column -->
        <ul class="small-6 medium-6 large-5 columns">
          <li><a href="#">FAQ</a></li>
          <li><a href="#">HOW IT WORKS</a></li>
          <li><a href="<?php echo( bp_loggedin_user_domain() ); ?>/messages">MESSAGES</a></li>
        </ul>

        <!-- Right navigation column (Same as header navigation)-->
        <?php
          if ( is_user_logged_in() ) {
               wp_nav_menu( array( 'theme_location' => 'logged-in' ) );
          } else {
               wp_nav_menu( array( 'theme_location' => 'visitor' ) );
          }
        ?>

      </div>
      
      <!-- Contact button -->
      <div class="small-12 medium-3 large-3 columns">
        <a class="contact-btn">CONTACT US</a>
      </div>
      
      <a class="exit-off-canvas"></a>

    </div>
  </footer>

<!-- Close div.off-canvas-wrap and div.inner-wrap from header -->
</div>
</div>

<?php wp_footer(); ?>

</body>
</html>