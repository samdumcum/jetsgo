<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package travel agency
 */
?>

<div id="imageslider"></div>
<div id="populardestination">
  <div id="popde"> <h2>Popular Destinations</h2></div>
  <div id="popde1">
  	<img src="3-baggage.gif" alt="luggage">
  </div>
  <div id="popde2">
  	<img src="1-spoon and fork.gif" alt="Eat">
  </div>
  <div id="popde3">
  	<img src="4-martini.gif" alt="Drink">
  </div>
  
  <div id="popde4">
  	<img src="2-shades.gif" alt="Enjoy">
  </div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'travel-agency' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'travel-agency' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->