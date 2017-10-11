<?php
/**
 * Template Name: Home
 *
 * @package newtheme
 *
**/

get_header();

?>



<!-- REPLACE START -->
<div class="home-page">

	<section class="hero">
		<div class="hero__container">
			<div class="hero__text">
				<h2>This is Stained Glass</h2>
				<p>Stain Stain Stain</p>
					<!-- <div class="button__container";> -->
						<a class="button" href="<?php echo site_url( '/shop/' ) ?>">Shop Now</a>
					<!-- </div> -->
			</div>
		</div>
	</section>
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
<!-- REPLACE END -->

<?php 
get_footer(); 
?>