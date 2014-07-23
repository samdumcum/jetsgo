<?php
/*
Template Name: Wide Page
*/
?>

<?php get_header(); ?>

-->Write awesome travel Info Here<--
<p>Hey JetsGo Theme User,</p>
<p>This is a WIDE page with NO side-bar.</p>
<p> But it will still feature the header and footer!</p>
<p> #TravelOn</p>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
