<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title><?php wp_title('|', true, 'right'); ?><?php echo get_bloginfo('name'); ?></title> 

            <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                </a>
        </div>

            <?php
                wp_nav_menu( array(
                    'menu'              => 'main-menu',
                    'theme_location'    => 'main-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
        </div>
    </nav>