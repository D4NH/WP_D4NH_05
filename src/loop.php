<h2>Laatste trips</h2>
<span class="line"></span>
<div class="row">
  <?php
    // The Query
    $the_query = new WP_Query( array( 'post_type' => 'page', 'post_parent' => 1392, 'posts_per_page' => 3 ) );

    // The Loop
    if ( $the_query->have_posts() ) {
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $category = get_the_category(); ?>

        <article class="col-sm-12">

        <div class="panel row">
          <div class="panel__img col-sm-6">
            <div class="category category--blog">
                <a href="/blog/travel/">
                  Travel
                </a>
            </div>
            <a href="<?php echo get_permalink(); ?>">
              <?php if ( has_post_thumbnail() ) {
                 the_post_thumbnail( 'custom-size', array( 'class' => 'afbeelding img-responsive' ) );
               } ?>
            </a>
          </div>
          <div class="panel__content panel__content--no-padding col-sm-6">
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

     <?php }
    } else {
      // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();

  ?>
  <div class="col-sm-12">
    <p>
      <a href="/blog/travel/">Toon alle trips</a>
    </p>
  </div>
</div>

<h2>Laatste recepten</h2>
<span class="line"></span>
<div class="row">
  <?php
    // The Query
    $the_query = new WP_Query( array( 'category_name' => 'recepten', 'posts_per_page' => 3 ) );

    // The Loop
    if ( $the_query->have_posts() ) {
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $category = get_the_category(); ?>

        <article class="col-sm-12">

        <div class="panel row">
          <div class="panel__img col-sm-6">
            <div class="category category--blog">
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
          <div class="panel__content panel__content--no-padding col-sm-6">
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

     <?php }
    } else {
      // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();

  ?>
  <div class="col-sm-12">
    <p>
      <a href="/blog/recepten/">Toon alle gerechten</a>
    </p>
  </div>
</div>