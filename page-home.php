<?php get_header(); ?>

<div class="container">
	<div class="feature bg">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature.jpg" alt="">
		<div class="img-text">
			<h2>Kegel Exercise Tips</h2>
			<button>Explore now</button>
		</div>
	</div>
`	<main id="site-content" role="main">
		<div class="home-content bg"> 
			<?php 
				$nhrepon = new wp_Query(array(
				'post_type' => 'post',
				'posts_per_page' => '15',
				'orderby' => 'rand',
				'order' => 'DESC',
				'category_name' => ''));
					if($nhrepon-> have_posts()):
					while ($nhrepon-> have_posts()) : $nhrepon-> the_post(); ?>
			<div class="home-post"> 
				<div class="post-image">
					<a href="<?php the_permalink();?>">
					<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
							} else { ?>
					
					<img  src="<?php 	
								echo get_template_directory_uri(); ?>/assets/images/thumbnail.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
					<?php } ?>
					</a>
				</div>
				
				<h1 class="home-post-title"><a href="<?php the_permalink();?>">	<?php the_title(); ?></a></h1>
							
					

			</div>
			<?php endwhile;
					else: echo 'No post found';
					endif;
					?>
		</div>
		
	</main>	
</div>


<!-- Footer section -->
<?php get_footer(); ?>