<?php /* Template Name: Home Page Template */ get_header(); ?>

  <div class="container main" role="main" aria-label="Content">

    <?php
      $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
      $img = $img[0];
    ?>

    <div class="fullscreen background" style="background-image:url('<?php echo $img ?>');">
      <div class="content-a">
          <div class="content-b">
              <h1>Danh Nguyen</h1>
              <h2>Front-End Developer</h2>
          </div>
      </div>
    </div>

    <div class="row">

      <section class="col-sm-12">
            <!-- Recente berichten -->
            <h2>Laatste berichten</h2>
            <span class="line"></span>
            <div class="row">
              <?php
                // The Query
                $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 4 ) );

                // The Loop
                if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $category = get_the_category(); ?>

                      <article class="col-sm-3">
                        <div class="panel">
                          <div class="panel__img">
                            <div class="category">
                              <a href="/blog/<?php echo sanitize_title($category[0]->cat_name); ?>/">
                                <?php echo $category[0]->cat_name; ?>
                              </a>
                            </div>
                            <a href="<?php echo get_permalink(); ?>">
                              <?php if ( has_post_thumbnail() ) {
                                 the_post_thumbnail( 'custom-size', array( 'class' => 'afbeelding img-responsive' ) );
                               } ?>
                            </a>
                          </div>
                          <div class="panel__content clearfix">
                            <h2 class="subtitle ellipsis"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                            <?php html5wp_excerpt('html5wp_home'); ?>
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
                }
                /* Restore original Post Data */
                wp_reset_postdata();

              ?>
            </div>
      </section>

      <?php // get_sidebar(); ?>

    </div>

    <div class="row">

    <section class="col-sm-12 panel--bg">

      <!-- Recente werk -->
      <h2>Recente projecten</h2>
      <span class="line"></span>
      <div class="row">
        <article class="col-sm-4">
          <div class="panel">
            <div class="panel__img">
              <div class="category">
                <span>
                  VueJS
                </span>
              </div>
              <a href="https://mijn.overheid.nl/" target="_blank">
                <img class="afbeelding img-responsive" src="https://www.danhnguyen.nl/wp-content/themes/D4NH_V04/assets/img/webdesign/mijnoverheid.jpg" alt="MijnOverheid">
              </a>
            </div>
            <div class="panel__content clearfix">
              <h2 class="subtitle ellipsis"><a href="https://mijn.overheid.nl/" target="_blank">MijnOverheid</a></h2>
              <div class="author-date">
                Door <?php the_author(); ?>
                <span class="line"></span>
                Web development
              </div>
            </div>
          </div>
        </article>
        <article class="col-sm-4">
          <div class="panel">
            <div class="panel__img">
              <div class="category">
                <span>
                  AngularJS
                </span>
              </div>
              <a href="https://www.monuta.nl/verzekeringsmodule/" target="_blank">
                <img class="afbeelding img-responsive" src="https://www.danhnguyen.nl/wp-content/themes/D4NH_V04/assets/img/webdesign/monuta.jpg" alt="Monuta Verzekeringsmodule">
              </a>
            </div>
            <div class="panel__content clearfix">
              <h2 class="subtitle ellipsis"><a href="https://www.monuta.nl/verzekeringsmodule/" target="_blank">Monuta Verzekeringsmodule</a></h2>
              <div class="author-date">
                Door <?php the_author(); ?>
                <span class="line"></span>
                Web development
              </div>
            </div>
          </div>
        </article>
        <article class="col-sm-4">
          <div class="panel">
            <div class="panel__img">
              <div class="category">
                <span>
                  Wordpress
                </span>
              </div>
              <a href="https://amsterdam.luminis.eu" target="_blank">
                <img class="afbeelding img-responsive" src="https://www.danhnguyen.nl/wp-content/themes/D4NH_V04/assets/img/webdesign/luminisamsterdam.jpg" alt="Luminis Amsterdam">
              </a>
            </div>
            <div class="panel__content clearfix">
              <h2 class="subtitle ellipsis"><a href="https://amsterdam.luminis.eu" target="_blank">Luminis Amsterdam</a></h2>
              <div class="author-date">
                Door <?php the_author(); ?>
                <span class="line"></span>
                Web development
              </div>
            </div>
          </div>
        </article>
      </div>

    </section>

    </div>

  </div>
  <!-- /container -->

<?php get_footer(); ?>
