<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <div class="container main" role="main" aria-label="Content">

    <?php
      $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
      $img = $img[0];
    ?>

    <div class="fullscreen background" style="background-image:url('<?php echo $img ?>');">
      <div class="content-a">
          <div class="content-b">
              <h1><?php the_title(); ?></h1>
              <h2><?php the_date(); ?> <?php the_time(); ?> door <?php the_author(); ?></h2>
          </div>
      </div>
    </div>

    <div class="row">

      <section class="col-sm-12">

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="post__container">

            <div class="navigationarrow clearfix">
              <?php if ( is_category('gadgets') || is_category('japan2014') ){ ?>
              <div class="pull-left"><?php previous_post_link('&laquo; %link','%title',FALSE,'') ?></div>
              <div class="pull-right next-post"><?php next_post_link('%link &raquo;','%title',FALSE,'') ?></div>
              <?php } else { ?>
              <div class="pull-left"><?php previous_post_link('&laquo; %link','%title','TRUE','') ?></div>
              <div class="pull-right next-post"><?php next_post_link('%link &raquo;','%title','TRUE','') ?></div>
              <?php } ?>
            </div>

            <div class="post__header clearfix">

              <!-- post details -->
              <!-- <small class="author pull-left"><i class="fa fa-user"></i><?php _e( ' ', 'html5blank' ); ?> <?php the_author(); ?></small>
              <small class="date pull-right">
                <i class="fa fa-clock-o"></i>
                <time datetime="<?php the_time('d-m-Y'); ?> <?php the_time('H:i'); ?>">
                  <?php the_date(); ?> <?php the_time(); ?>
                </time>
              </small> -->
              <!-- /post details -->

            </div>

            <div class="post__content">
              <?php the_content(); // Dynamic Content ?>
              <?php // the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
              <!-- <p><?php // _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p> -->
              <?php edit_post_link(); // Always handy to have Edit Post Links available ?>

              <div class="post__content-nav">
                <p>
                  Gecategoriseerd in: <a href="/blog/<?php echo sanitize_title(get_the_category( $id )[0]->name); ?>"><?php echo get_the_category( $id )[0]->name; ?></a>
                </p>
                <!-- <p>
                  <?php // _e( 'Geschreven door ', 'html5blank' ); the_author(); ?>
                </p> -->
              </div>
            </div>

            <div class="navigationarrow clearfix">
              <?php if ( is_category('gadgets') || is_category('japan2014') ){ ?>
              <div class="pull-left"><?php previous_post_link('&laquo; %link','%title',FALSE,'') ?></div>
              <div class="pull-right next-post"><?php next_post_link('%link &raquo;','%title',FALSE,'') ?></div>
              <?php } else { ?>
              <div class="pull-left"><?php previous_post_link('&laquo; %link','%title','TRUE','') ?></div>
              <div class="pull-right next-post"><?php next_post_link('%link &raquo;','%title','TRUE','') ?></div>
              <?php } ?>
            </div>

          </div>

          <br/><br/><br/>

          <div class="post__comments">

            <?php comments_template(); ?>

          </div>

        </article>
        <!-- /article -->

      </section>

      <?php // get_sidebar(); ?>

    </div>

  </div>

  <?php endwhile; ?>

  <?php else: ?>

    <div class="container main" role="main" aria-label="Content">

      <div class="row">

        <section class="col-sm-8">

            <!-- article -->
            <article>

              <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

            </article>
            <!-- /article -->

        </section>

        <?php get_sidebar(); ?>

      </div>

    </div>

  <?php endif; ?>

<?php get_footer(); ?>
