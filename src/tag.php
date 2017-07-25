<?php get_header(); ?>

<div class="container main" role="main" aria-label="Content">
  <!-- section -->
  <section class="col-sm-9">

    <div class="row">

			<h1><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

      </div>

    </section>
    <!-- /section -->

    <?php get_sidebar(); ?>

  </div>

<?php get_footer(); ?>

