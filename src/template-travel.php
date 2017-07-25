<?php /* Template Name: Travel Template */ get_header(); ?>

  <div class="container main" role="main" aria-label="Content">

    <?php
      $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
      $img = $img[0];
    ?>

    <div class="fullscreen background" style="background-image:url('<?php echo $img ?>');">
      <div class="content-a">
          <div class="content-b">
              <h1>Reizen</h1>
              <h2>Altijd een leuk moment</h2>
          </div>
      </div>
    </div>

    <div class="row">

      <section class="col-sm-9">

        <div class="row">
          <div class="col-sm-12">

            <!-- Recente berichten -->
            <h2>Laatste trips</h2>
            <span class="line"></span>
            <div class="row">
              <?php
                // The Query
                $the_query = new WP_Query( array( 'post_type' => 'page', 'post_parent' => $post->ID) );

                // The Loop
                if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $category = get_the_category(); ?>

                    <?php if ($the_query->current_post == 0) { ?>

                    <article class="col-sm-12">

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
                        <?php html5wp_excerpt('html5wp_index'); ?>
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

                    <?php } else { ?>

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

                    <?php } ?>

                 <?php }
                } else {
                  // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();

              ?>
            </div>

          </div>
        </div>

      </section>

      <?php get_sidebar(); ?>

    </div>

  </div>
  <!-- /container -->

<?php get_footer(); ?>
