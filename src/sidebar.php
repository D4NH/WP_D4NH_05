<!-- sidebar -->
<aside class="sidebar" role="complementary">

  <div class="col-sm-3">
    <h2>Over mij</h2>
    <span class="line"></span>
    <p>Hallo! Mijn naam is Danh Nguyen en dit is mijn portfolio. Ik hou me graag bezig met het omzetten van grafische ontwerpen naar volledig functionele websites welke geschikt zijn voor mobiele en desktop apparaten. Bekijk mijn projecten of lees meer over mijn reizen en mezelf.</p>
    <a class="read-more" href="/over-mij/">Lees meer <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

    <br/>
    <br/>

    <h2>Zoeken</h2>
    <span class="line"></span>
    <?php get_template_part('searchform'); ?>

    <br/>
    <br/>

    <?php if (!is_home()) { ?>

    <div class="hidden-xs">
    <h2>Laatste berichten</h2>
    <span class="line"></span>
    <ul class="recent-posts">
      <?php
        // The Query
        $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) );

        // The Loop
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $category = get_the_category(); ?>

            <li class="row">
              <div class="panel">
                <div class="panel__img col-sm-5">
                  <a href="<?php echo get_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) {
                       the_post_thumbnail( 'custom-size', array( 'class' => 'afbeelding img-responsive' ) );
                     } ?>
                  </a>
                </div>
                <div class="panel__content col-sm-7">
                  <h3 class="subtitle ellipsis"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                  <div class="author-date">
                    Door <?php the_author(); ?>
                  </div>
                </div>

              </div>
            </li>

         <?php }
        } else { ?>
          <li>Geen berichten gevonden.</li>
        <?php }
        /* Restore original Post Data */
        wp_reset_postdata();

      ?>
    </ul>

    <br/>
    <br/>
    </div>
    <?php } ?>

    <h2>Categorieen</h2>
    <span class="line"></span>
    <ul>
      <li><a href="/blog/recepten/">Recepten</a></li>
      <li><a href="/blog/travel/">Travel</a></li>
      <li><a href="/projecten/">Web Development</a></li>
    </ul>
  </div>

</aside>
<!-- /sidebar -->
