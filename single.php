<?php
/* Template Name: Single Page Template */

get_header(); ?>

 
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
 
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
 
				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php get_page_by_title( 'Sample Page' ); ?>
				<?php comments_template( 'comments' ); ?>
 
			<?php endwhile; ?>
 
		</div><!-- #content -->
	</div><!-- #primary -->
 
<?php get_footer() ?>
