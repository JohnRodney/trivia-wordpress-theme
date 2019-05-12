<?php get_header() ?>
<div class="row">
  <div class="col s1"></div>
  <div class="col s10">
    <h3>
      <?php
        printf( __( 'Search Results for: %s' ), '<span class="blue-text text-darken-2">' . get_search_query() . '</span>');
      ?>
    </h3>
  </div>
  <div class="col s1"></div>
</div>

  <?php
    global $query_string;
    wp_parse_str( $query_string, $search_query );
    $the_query = new WP_Query( $search_query );
    if ( $the_query->have_posts() ) {
      ?>
      <div class="row">
      <div class="col s1"></div>
      <div class="col s10">
        <div class="collection">
        <?php
        while ( $the_query->have_posts() ) {
          $the_query->the_post();
          ?>
            <a class="collection-item blue-text text-darken-2" href="<?php the_permalink(); ?>">
              <?php echo get_the_title(); ?>
            </a>
          <?php
        }
        /* Restore original Post Data */
        ?></div></div><div class="col s1"></div></div><?php
      wp_reset_postdata();
    } else {
  ?>
      <div class="row">
        <div class="col s1"></div>
          <div class="col s10">
            <h2>We are good at trivia but apparently you have stumped us this time. (no results)</h2>
          </div>
        <div class="col s1"></div>
      </div>
    <?php
    }
  ?>
<?php get_footer() ?>
