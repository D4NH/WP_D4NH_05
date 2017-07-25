<?php get_header(); ?>

	<div class="container main" role="main" aria-label="Content">

		<!-- section -->
		<section>

			<h2><?php echo sprintf( __( '%s zoek resultaten voor ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>
      <span class="line"></span>
      <div class="row">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
          <article id="post-<?php the_ID(); ?>" class="col-sm-3">
            <div class="panel">
              <div class="panel__img">
                <!-- <div class="category">
                  <a href="/blog/<?php echo sanitize_title($category[0]->cat_name); ?>/">
                    <?php echo $category[0]->cat_name; ?>
                  </a>
                </div> -->
                <a href="<?php echo get_permalink(); ?>">
                  <?php if ( has_post_thumbnail() ) {
                     the_post_thumbnail( 'custom-size', array( 'class' => 'afbeelding img-responsive' ) );
                   } ?>
                </a>
              </div>
              <div class="panel__content clearfix">
                <h2 class="subtitle ellipsis"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                <?php html5wp_excerpt('html5wp_search'); ?>
                <!-- posted by and date -->
                <div class="author-date">
                  Door <?php the_author(); ?>
                  <span class="line"></span>
                  <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date("M, Y", strtotime(get_post()->post_date)); ?>
                </div>
                <!-- <a class="read-more read-more--latest" href="<?php echo get_permalink(); ?>">Lees meer <i class="fa fa-chevron-right" aria-hidden="true"></i></a> -->
              </div>
            </div>
          </article>
        <!-- /article -->

      <?php endwhile; ?>

      <?php else: ?>

        <!-- article -->
        <article class="col-sm-3">
          <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
        </article>
        <!-- /article -->

      <?php endif; ?>
      </div>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</div>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
