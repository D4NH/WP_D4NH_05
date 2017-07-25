<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
    <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

  </head>
  <body <?php body_class(); ?>>

    <!-- wrapper -->
    <div class="wrapper">

      <!-- header -->
      <header class="header clear" role="banner">

          <!-- nav -->
          <nav class="navbar navbar-default">
            <div class="container">
              <div class="row">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i><br/>
                    <small>Menu</small>
                  </button>
                  <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img class="nav-profile-img" src="<?php echo get_bloginfo('template_directory'); ?>/img/profile.png" alt="Danh Nguyen">
                    <span class="nav-profile-text">
                      Danh Nguyen<br/>
                      <small>Front-end Developer</small>
                    </span>
                  </a>
                </div>
                <div id="navbar" class="navbar-right navbar-collapse collapse">
                  <?php html5blank_nav(); ?>
                </div><!--/.nav-collapse -->
              </div>
            </div><!--/.container -->
          </nav>
          <!-- /nav -->

      </header>
      <!-- /header -->
