<div class="container-fluid">
	<div class="container">
		<div class="row">
			<!-- Footer section -->
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

						<h2 class="fs-5 py-2">
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


<div class="container-fluid">
	<div class="container">
		<div class="row">
			<!-- Footer top section -->
			<div class="footer-top bg-light">
				<?php if (is_active_sidebar('nhrepon-footer-1')) {
					dynamic_sidebar('nhrepon-footer-1');
				}
				?>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid">
	<div class="container">
		<!-- Footer bottom section -->
		<div class="row py-2 align-items-center bg-light" id="page">
			<div class="col-sm-12 col-md-6 justify-content-center">
				<div class="copyright-area text-center">
					Copyright &copy;
					<?php echo date('Y'); ?> <a href="<?php echo get_home_url(); ?>">
						<?php bloginfo('name'); ?>
					</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<?php $args = array('theme_location' => 'footer_menu',
					'menu_class' => 'nav justify-content-center');
				wp_nav_menu($args); ?>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>

</html>