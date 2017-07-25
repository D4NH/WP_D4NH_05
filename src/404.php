<?php get_header(); ?>

  <div class="container main" role="main" aria-label="Content">
    <!-- section -->
    <section class="col-sm-9">

      <div class="row">

        <!-- article -->
        <article id="post-404">

          <h2><?php _e( 'Pagina niet gevonden', 'html5blank' ); ?></h2>
          <span class="line"></span>
          <h3>
            <a href="<?php echo home_url(); ?>"><?php _e( 'Terug naar home', 'html5blank' ); ?></a>
          </h3>

        </article>
        <!-- /article -->

      </div>

    </section>
    <!-- /section -->

    <?php get_sidebar(); ?>

  </div>

<?php get_footer(); ?>
