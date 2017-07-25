<?php get_header(); ?>

  <div class="container main" role="main" aria-label="Content">

    <?php
      $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
      $img = $img[0];
    ?>

    <div class="fullscreen background" style="background-image:url('<?php echo $img ?>');">
      <div class="content-a">
          <div class="content-b">
              <h1><?php the_title(); ?></h1>
              <h2>
                <?php if ( is_page( 'over-mij' ) ) { ?>
                  Wie ben ik?
                <?php } elseif ( is_page( 'projecten' ) ) { ?>
                  Web development
                <?php } else { ?>
                  <?php echo date("M, Y", strtotime(get_post()->post_date)); ?>
                <?php } ?>
              </h2>
          </div>
      </div>
    </div>

    <div class="row">

      <!-- section -->
      <section class="col-sm-12">

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php the_content(); ?>

          <?php if ( is_page( 'over-mij' ) ) { ?>

            <div class="row">
              <div class="col-sm-12">
                <h2>That's me!</h2>
                <span class="line"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <img class="afbeelding shadow img-responsive" src="https://www.danhnguyen.nl/wp-content/uploads/DSC07798-1024x575.jpg" alt="Danh Nguyen">
              </div>
              <div class="col-sm-6">
                <img class="afbeelding shadow img-responsive" src="https://www.danhnguyen.nl/wp-content/uploads/DSC06918-1024x575.jpg" alt="Danh Nguyen">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <h2>Expertise</h2>
                <span class="line"></span>
                <?php echo types_render_field("expertise", array("output"=>"html")); ?>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <h2>Technieken</h2>
                <span class="line"></span>
                <?php echo types_render_field("technieken", array("output"=>"html")); ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h2>Werkervaring</h2>
                <span class="line"></span>
                <?php echo types_render_field("werkervaring", array("output"=>"html")); ?>
              </div>
              <div class="col-md-6">
                <h2>Opleidingen</h2>
                <span class="line"></span>
                <?php echo types_render_field("opleidingen", array("output"=>"html")); ?>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <h2>Contact</h2>
                <span class="line"></span>
                <?php echo types_render_field("contact", array("output"=>"html")); ?>
              </div>
            </div>

          <?php } elseif ( !is_page('over-mij') || !is_page('projecten') )  { ?>

            <span class="line"></span>
            <div class="row">
              <?php
                // The Query
                $the_query = new WP_Query( array( 'post_type' => 'post', 'category_name' => $pagename, 'posts_per_page' => -1, 'order' => 'ASC') );

                // The Loop
                if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $category = get_the_category(); ?>

                      <article class="col-sm-4">
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
                            <?php html5wp_excerpt('html5wp_custom_post'); ?>
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

                 <?php }
                } else {
                  // no posts found
                  echo '<article class="col-sm-12"><p>Geen berichten gevonden</p></article>';
                }
                /* Restore original Post Data */
                wp_reset_postdata();

              ?>
            </div>

          <?php } ?>

          <?php // comments_template( '', true ); // Remove if you don't want comments ?>

          <br class="clear">

          <?php edit_post_link(); ?>

        </article>
        <!-- /article -->

      <?php endwhile; ?>

      <?php else: ?>

        <!-- article -->
        <article>

          <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

        </article>
        <!-- /article -->

      <?php endif; ?>

      </section>
      <!-- /section -->
    </div>

  </div>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
