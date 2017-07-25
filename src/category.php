<?php get_header(); ?>

	<div class="container main" role="main" aria-label="Content">
      <!-- section -->
      <section class="col-sm-9">

        <div class="row">

			<h1><?php _e( 'Category: ', 'html5blank' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

          </div>

        </section>
        <!-- /section -->

        <?php get_sidebar(); ?>

      </div>

<?php get_footer(); ?>
