<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package newtheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div>
		<div class="entry-content">
			<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'newtheme' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div>	
</article><!-- #post-## -->
