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
	<section class="hero">
		<div class="hero__container">

			<div class="hero__content">
				<div class="hero__over-text">
					<div class="hero__intro">
						<div class="hero__intro-single">
							<i class="fa fa-phone fa-spin"></i><h2>Title</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="hero__intro-single">
							<i class="fa fa-circle-o-notch fa-spin"></i><h2>Title</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="hero__intro-single">
							<i class="fa fa-circle-o-notch fa-spin"></i><h2>Title</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>		
				</div>
			</div>
		</div>	
	</section>
	<section class="featured-products">
		<div class="featrued-products__container">
			<ul class="products">
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
	<section class="shop-by-category">
		<div class="shop-by-category__container">
			<h2>Shop by Category</h2>
			<div class="shop-by-category__all">
				<a href="facebook.com" class="shop-by-category__single" style="background: url('<?php echo site_url(); ?>/wp-content/themes/newtheme/assets/images/bg.jpg') no-repeat center center; background-size: cover;">
					<div class="overlay"></div>
					<h4>Product Name</h4>
				</a>
				<a href="facebook.com" class="shop-by-category__single" style="background: url('<?php echo site_url(); ?>/wp-content/themes/newtheme/assets/images/bg.jpg') no-repeat center center; background-size: cover;">
					<div class="overlay"></div>
					<h4>Product Name</h4>
				</a>
				<a href="facebook.com" class="shop-by-category__single" style="background: url('<?php echo site_url(); ?>/wp-content/themes/newtheme/assets/images/bg.jpg') no-repeat center center; background-size: cover;">
					<div class="overlay"></div>
					<h4>Product Name</h4>
				</a>
				<a href="facebook.com" class="shop-by-category__single" style="background: url('<?php echo site_url(); ?>/wp-content/themes/newtheme/assets/images/bg.jpg') no-repeat center center; background-size: cover;">
					<div class="overlay"></div>
					<h4>Product Name</h4>
				</a>
				<a href="facebook.com" class="shop-by-category__single" style="background: url('<?php echo site_url(); ?>/wp-content/themes/newtheme/assets/images/bg.jpg') no-repeat center center; background-size: cover;">
					<div class="overlay"></div>
					<h4>Product Name</h4>
				</a>
				<a href="facebook.com" class="shop-by-category__single" style="background: url('<?php echo site_url(); ?>/wp-content/themes/newtheme/assets/images/bg.jpg') no-repeat center center; background-size: cover;">
					<div class="overlay"></div>
					<h4>Product Name</h4>
				</a>
			</div>
		</div>
	</section>
	<section class="featured-sellers">
		<div class="featured-sellers__container">
			<h2>Featured Sellers</h2>
			<div class="featured-sellers__all">
				<a href="facebook.com" class="featured-sellers__single" style="background: url('<?php echo site_url(); ?>/wp-content/themes/newtheme/assets/images/bg.jpg') no-repeat center center; background-size: cover;">
					<div class="overlay"></div>
					<h4>Product Name</h4>
				</a>
				<a href="facebook.com" class="featured-sellers__single" style="background: url('<?php echo site_url(); ?>/wp-content/themes/newtheme/assets/images/bg.jpg') no-repeat center center; background-size: cover;">
					<div class="overlay"></div>
					<h4>Product Name</h4>
				</a>
				<a href="facebook.com" class="featured-sellers__single" style="background: url('<?php echo site_url(); ?>/wp-content/themes/newtheme/assets/images/bg.jpg') no-repeat center center; background-size: cover;">
					<div class="overlay"></div>
					<h4>Product Name</h4>
				</a>
			</div>
		</div>
		
	</section>
	
	<section class="another">
		<div class="another__container">
			<p>Kellee</p>
			<p>Kellee</p>
			<p>Kellee</p>
			<p>Kellee</p>
			<p>Kellee</p>
		</div>
	</section>
	<section class="again">
		<div class="another__container">
			<p>Brandon</p>
			<p>Brandon</p>
			<p>Brandon</p>
			<p>Brandon</p>
			<p>Brandon</p>
		</div>
	</section>
</div>
