<?php
/**
 * Template Name: News
 */

global $post_type;
$post_type = 'post';
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'news-events' );

			endif; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
