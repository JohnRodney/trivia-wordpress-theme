
    <?php 
    /* Template Name: Base Template */
    get_header(); ?>

    <div class="row">
      <div class="col s1">
      </div>
      <div class="col s10">
        <div class="wrap">
          <h2><?php echo the_title() ?></h2>
          <?php 
            if( get_option( 'page' ) ) {
              echo apply_filters( 'the_content', get_post( get_option( 'page' ) )->post_content );
            }
          ?>

        </div>
      </div>
      <div class='col s1'>
      </div>
<?php get_footer() ?>