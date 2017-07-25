<?php get_header(); ?>

  <div class="container main" role="main" aria-label="Content">

    <div class="fullscreen background" style="background-image:url('https://www.danhnguyen.nl/wp-content/uploads/2H0QPGDVGZ.jpg');">
      <div class="content-a">
          <div class="content-b">
              <h1>Blog</h1>
              <h2>Lekker eten en leuke reizen</h2>
          </div>
      </div>
    </div>

    <div class="row">

      <!-- section -->
      <section class="col-sm-9">

        <?php get_template_part('loop'); ?>

        <?php // get_template_part('pagination'); ?>

      </section>
      <!-- /section -->

      <?php get_sidebar(); ?>

    </div>

  </div>

<?php get_footer(); ?>
