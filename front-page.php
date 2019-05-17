    <?php get_header() ?>  
    <div class="row">
      <div class="col s1">
      </div>
      <div class="col s10">
        <h2><?php echo the_title() ?></h2>
        <?php 
          if( get_option( 'page_on_front' ) ) {
            echo apply_filters( 'the_content', get_post( get_option( 'page_on_front' ) )->post_content );
          }
        ?>

      </div>
      <div class='col s1'>
      </div>
    </div>
    <?php get_footer() ?>
