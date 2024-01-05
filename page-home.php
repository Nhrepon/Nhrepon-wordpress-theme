<?php get_header(); ?>

<div class="container-fluid"></div>
<div class="containert">
	<div class="row">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
					aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature.jpg" alt="">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Some representative placeholder content for the first slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature.jpg" alt="">
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Some representative placeholder content for the second slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature.jpg" alt="">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Some representative placeholder content for the third slide.</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
</div>
</div>



<div class="container">
	<div class="feature bg">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature.jpg" alt="">
		<div class="img-text">
			<h2>Kegel Exercise Tips</h2>
			<button>Explore now</button>
		</div>
	</div>
	` <main id="site-content" role="main">
		<div class="home-content bg">
			<?php
			$nhrepon = new wp_Query(array(
				'post_type' => 'post',
				'posts_per_page' => '15',
				'orderby' => 'rand',
				'order' => 'DESC',
				'category_name' => ''));
			if ($nhrepon->have_posts()):
				while ($nhrepon->have_posts()):
					$nhrepon->the_post(); ?>
					<div class="home-post">
						<div class="post-image">
							<a href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail()) {
									the_post_thumbnail();
								} else { ?>

									<img src="<?php
									echo get_template_directory_uri(); ?>/assets/images/thumbnail.jpg" alt="<?php the_title(); ?>"
										title="<?php the_title(); ?>">
								<?php } ?>
							</a>
						</div>

						<h2 class="home-post-title"><a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a></h2>



					</div>
				<?php endwhile;
			else:
				echo 'No post found';
			endif;
			?>
		</div>

	</main>
</div>


<!-- Footer section -->
<?php get_footer(); ?>