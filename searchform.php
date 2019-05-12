<div class="row">
  <form role="search" method="get" id="searchform"
    class="searchform col s12" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
    <div class="row">
      <div class="col s12"></div>
    </div>
    <div class="row">
      <div class="input-field col s1"></div>
      <div class="input-field col s5">
        <i class="material-icons prefix">search</i>
        <input id="wp-search" type="text" class="validate" value="<?php echo get_search_query(); ?>" name="s">
        <label class="screen-reader-text" for="wp-search"><?php _x( 'Search for:', 'label' ); ?></label>
      </div>
      <div class="input-field col s1">
        <input class="btn blue darken-2" type="submit" id="searchsubmit"
               value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
      </div>
    </div>
  </form>
</div>
