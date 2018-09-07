<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Talon
 */

get_header(); ?>
<div class="row">
	<?php
	if ( get_theme_mod('fullwidth_single', 0) != 1 ) :
		get_sidebar();
	endif; ?>
	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			// the_post_navigation(); //-- I'm hiding post navigation. Don't want it, don't need it

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->


</div>
<?php get_footer(); ?>
