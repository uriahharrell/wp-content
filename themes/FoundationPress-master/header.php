<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
  </head>
  <body <?php body_class(); ?>>

    <div class="off-canvas-wrap">
      <div class="inner-wrap">

        <!-- Mobile Navigation -->
        <section class="show-for-small-only menu-icon-box">
          <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
        </section>
        <aside class="left-off-canvas-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>
        </aside>
      
        <!-- Standard Navigation -->
        <nav class="top-bar" data-topbar>
            <section class="top-bar-section row">

              <!-- Left Nav Section, logo image -->
              <img src="<?php bloginfo('template_directory'); ?>/css/images/header-logo.png" alt="Match">

              <!-- Right Nav Section -->
              <div class="hide-for-small nav-box">
                <?php
                  if ( is_user_logged_in() ) {
                       wp_nav_menu( array( 'theme_location' => 'logged-in' ) );
                  } else {
                       wp_nav_menu( array( 'theme_location' => 'visitor' ) );
                  }
                  ?>
              </div>

            </section>
        </nav>



