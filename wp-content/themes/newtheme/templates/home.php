<?php
/**
 * Template Name: Home
 *
 * @package newtheme
 *
**/

get_header();

?>

<div class="home-page">
	<section class="products">
		<div class="products__container">
			<ul class="products__list">
				<?php 
				$args = array( 'post_type' => 'product', 'posts_per_page' => 12 ); 
				$loop = new WP_Query( $args ); 
				if ( $loop->have_posts() ) { 
					while ( $loop->have_posts() ) : 
						$loop->the_post(); wc_get_template_part( 'content', 'product' ); 
					endwhile; 
				} else { echo __( 'No products found' ); 
				} 
				wp_reset_postdata(); 
				?>
					
			</ul><!--/.products-->
		</div>
	</section>
</div>


<?php 
get_footer(); 
?>