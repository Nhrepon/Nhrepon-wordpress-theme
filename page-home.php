<?php get_header(); ?>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<!-- Feature section -->
			<div class="feature bg">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature.jpg" alt="">
				<div class="img-text">
					<h2>Kegel Exercise Tips</h2>
					<button>Explore now</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="container my-3">
		<div class="row bg">
			<div class="col-sm-12 col-md-12 col-lg-9">
				<div id="carouselExampleCaptions" class="carousel slide py-2" data-bs-ride="carousel">
					<div class="carousel-inner">
						<?php
						$nhrepon = new wp_Query(array(
							'post_type' => 'post',
							'posts_per_page' => '3',
							'orderby' => 'rand',
							'order' => 'DESC',
							'category_name' => ''));
						if ($nhrepon->have_posts()):
							while ($nhrepon->have_posts()):
								?>
								<div class="carousel-item">
									<?php $nhrepon->the_post();

									if (has_post_thumbnail()) {
										the_post_thumbnail();
									} else { ?>

										<img src="<?php
										echo get_template_directory_uri(); ?>/assets/images/thumbnail.jpg" alt="<?php the_title(); ?>"
											title="<?php the_title(); ?>">
									<?php } ?>
									<div class="carousel-caption d-none d-md-block">
										<h3 class="bg-dark p-3" style="opacity:75%;">
											<a class="text-white" href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</h3>
									</div>
								</div>

							<?php endwhile;
						else:
							echo 'No post found';
						endif;
						?>
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
			<div class="col-sm-12 col-md-12 col-lg-3">
				<div class="row">
					<?php
					$nhrepon = new wp_Query(array(
						'post_type' => 'post',
						'posts_per_page' => '2',
						'orderby' => 'date',
						'order' => 'DESC',
						'category_name' => ''));
					if ($nhrepon->have_posts()):
						while ($nhrepon->have_posts()):
							$nhrepon->the_post(); ?>
							<div class="col-6 col-md-6 col-lg-12 my-5 my-lg-0 py-2 bg-light">
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

								<h2 class="fs-6">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h2>
							</div>
						<?php endwhile;
					else:
						echo 'No post found';
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid">
	<div class="container my-3">
		<div class="row">
			<?php
			$nhrepon = new wp_Query(array(
				'post_type' => 'post',
				'posts_per_page' => '6',
				'orderby' => 'rand',
				'order' => 'DESC',
				'category_name' => ''));
			if ($nhrepon->have_posts()):
				while ($nhrepon->have_posts()):
					$nhrepon->the_post(); ?>
					<div class="col-6 col-sm-4 gap-3 bg-light py-3">
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

						<h2 class="fs-5">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>
					</div>
				<?php endwhile;
			else:
				echo 'No post found';
			endif;
			?>

		</div>
	</div>
</div>




<!-- Footer section -->
<?php get_footer(); ?>