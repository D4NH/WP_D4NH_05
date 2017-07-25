<?php /* Template Name: Web Template */ get_header(); ?>

  <div class="container main" role="main" aria-label="Content">

    <?php
      $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
      $img = $img[0];
    ?>

    <div class="fullscreen background" style="background-image:url('<?php echo $img ?>');">
      <div class="content-a">
          <div class="content-b">
              <h1>Projecten</h1>
              <h2>Web Development</h2>
          </div>
      </div>
    </div>

    <div class="row">

      <section class="col-sm-9">

        <div class="row">
          <div class="col-sm-12">

            <h2>Recente projecten</h2>
            <span class="line"></span>

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

              <!-- article -->
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_content(); ?>

                <?php edit_post_link(); ?>

                <br class="clear">

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

            <div class="row">
              <article class="col-sm-6">
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
              <article class="col-sm-6">
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
              <article class="col-sm-6">
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
              <article class="col-sm-6">
                <div class="panel">
                  <div class="panel__img">
                    <div class="category">
                      <span>
                        Wordpress
                      </span>
                    </div>
                    <a href="https://devcon.luminis.eu" target="_blank">
                      <img class="afbeelding img-responsive" src="https://www.danhnguyen.nl/wp-content/themes/D4NH_V04/assets/img/webdesign/devcon.jpg" alt="Luminis DevCon">
                    </a>
                  </div>
                  <div class="panel__content clearfix">
                    <h2 class="subtitle ellipsis"><a href="https://devcon.luminis.eu" target="_blank">Luminis DevCon</a></h2>
                    <div class="author-date">
                      Door <?php the_author(); ?>
                      <span class="line"></span>
                      Web development
                    </div>
                  </div>
                </div>
              </article>
              <article class="col-sm-6">
                <div class="panel">
                  <div class="panel__img">
                    <div class="category">
                      <span>
                        Wordpress
                      </span>
                    </div>
                    <a href="http://www.proudteachers.nl" target="_blank">
                      <img class="afbeelding img-responsive" src="https://www.danhnguyen.nl/wp-content/themes/D4NH_V04/assets/img/webdesign/proudteachers.jpg" alt="Proud Teachers">
                    </a>
                  </div>
                  <div class="panel__content clearfix">
                    <h2 class="subtitle ellipsis"><a href="http://www.proudteachers.nl" target="_blank">Proud Teachers</a></h2>
                    <div class="author-date">
                      Door <?php the_author(); ?>
                      <span class="line"></span>
                      Web development
                    </div>
                  </div>
                </div>
              </article>
              <article class="col-sm-6">
                <div class="panel">
                  <div class="panel__img">
                    <div class="category">
                      <span>
                        Wordpress
                      </span>
                    </div>
                    <a href="https://academy.luminis.eu/" target="_blank">
                      <img class="afbeelding img-responsive" src="https://www.danhnguyen.nl/wp-content/themes/D4NH_V04/assets/img/webdesign/training.jpg" alt="Luminis Academy">
                    </a>
                  </div>
                  <div class="panel__content clearfix">
                    <h2 class="subtitle ellipsis"><a href="https://academy.luminis.eu/" target="_blank">Luminis Academy</a></h2>
                    <div class="author-date">
                      Door <?php the_author(); ?>
                      <span class="line"></span>
                      Web development
                    </div>
                  </div>
                </div>
              </article>
              <article class="col-sm-6">
                <div class="panel">
                  <div class="panel__img">
                    <div class="category">
                      <span>
                        JQuery
                      </span>
                    </div>
                    <a href="https://acties.essent.nl/bespaarcoach/mediamarkt/index.html" target="_blank">
                      <img class="afbeelding img-responsive" src="https://www.danhnguyen.nl/wp-content/themes/D4NH_V04/assets/img/webdesign/bespaarcoach.jpg" alt="Bespaarcoach">
                    </a>
                  </div>
                  <div class="panel__content clearfix">
                    <h2 class="subtitle ellipsis"><a href="https://acties.essent.nl/bespaarcoach/mediamarkt/index.html" target="_blank">Bespaarcoach</a></h2>
                    <div class="author-date">
                      Door <?php the_author(); ?>
                      <span class="line"></span>
                      Web development
                    </div>
                  </div>
                </div>
              </article>
              <article class="col-sm-6">
                <div class="panel">
                  <div class="panel__img">
                    <div class="category">
                      <span>
                        Mobile First
                      </span>
                    </div>
                    <a href="http://bradfrostweb.com/demo/ish/?url=http%3A%2F%2Fmobiel.essent.nl#s" target="_blank">
                      <img class="afbeelding img-responsive" src="https://www.danhnguyen.nl/wp-content/themes/D4NH_V04/assets/img/webdesign/essentmobiel.jpg" alt="Mobiele versie Essent.nl">
                    </a>
                  </div>
                  <div class="panel__content clearfix">
                    <h2 class="subtitle ellipsis"><a href="http://bradfrostweb.com/demo/ish/?url=http%3A%2F%2Fmobiel.essent.nl#s" target="_blank">Mobiele versie Essent.nl</a></h2>
                    <div class="author-date">
                      Door <?php the_author(); ?>
                      <span class="line"></span>
                      Web development
                    </div>
                  </div>
                </div>
              </article>
              <article class="col-sm-6">
                <div class="panel">
                  <div class="panel__img">
                    <div class="category">
                      <span>
                        JQuery
                      </span>
                    </div>
                    <a href="https://acties.essent.nl/bespaartips/" target="_blank">
                      <img class="afbeelding img-responsive" src="https://www.danhnguyen.nl/wp-content/themes/D4NH_V04/assets/img/webdesign/bespaartips.jpg" alt="Bespaartips van Essent">
                    </a>
                  </div>
                  <div class="panel__content clearfix">
                    <h2 class="subtitle ellipsis"><a href="https://acties.essent.nl/bespaartips/" target="_blank">Bespaartips van Essent</a></h2>
                    <div class="author-date">
                      Door <?php the_author(); ?>
                      <span class="line"></span>
                      Web development
                    </div>
                  </div>
                </div>
              </article>
              <article class="col-sm-6">
                <div class="panel">
                  <div class="panel__img">
                    <div class="category">
                      <span>
                        JQuery
                      </span>
                    </div>
                    <a href="https://www.philips.nl/e/kitchen/home.html" target="_blank">
                      <img class="afbeelding img-responsive" src="https://www.danhnguyen.nl/wp-content/themes/D4NH_V04/assets/img/webdesign/philipskitchen.jpg" alt="MyKitchen Philips">
                    </a>
                  </div>
                  <div class="panel__content clearfix">
                    <h2 class="subtitle ellipsis"><a href="https://www.philips.nl/e/kitchen/home.html" target="_blank">MyKitchen Philips</a></h2>
                    <div class="author-date">
                      Door <?php the_author(); ?>
                      <span class="line"></span>
                      Web development
                    </div>
                  </div>
                </div>
              </article>

          </div>
        </div>

      </section>

      <?php get_sidebar(); ?>

    </div>

  </div>
  <!-- /container -->

<?php get_footer(); ?>
