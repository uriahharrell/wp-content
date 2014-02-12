<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <div class="off-canvas-wrap">
      <div class="inner-wrap">
            <!-- Mobile Navigation -->
            <nav class="tab-bar show-for-small-only">
              <section class="left-small">
                <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
              </section>
              <section class="middle tab-bar-section">
                
                <h1 class="title"><?php bloginfo( 'name' ); ?></h1>

              </section>
            </nav>

            <nav class="top-bar" data-topbar>
                <ul class="title-area">
                  <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
                </ul>
                <section class="top-bar-section row">
                  <!-- Left Nav Section, logo image -->
                  <img src="<?php bloginfo('template_directory'); ?>/css/images/header-logo.png" alt="Match">
                  <!-- Right Nav Section -->
                  <div class="hide-for-small nav-box">
                    <?php wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>
                  </div>
                </section>
            </nav>


<!--   <aside class="left-off-canvas-menu">
    <?php foundationPress_mobile_off_canvas(); ?>
  </aside>
  
        <div class="top-bar-container contain-to-grid show-for-medium-up">
            <nav class="top-bar" data-topbar="">
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                    </li>          
                </ul>
                <section class="top-bar-section">
                    <?php foundationPress_top_bar_l(); ?>
                    <?php foundationPress_top_bar_r(); ?>
                </section>
            </nav>
        </div>
 -->
