<div class="footer-wrapper">
	<div class="container">
	<!-- Footer section -->
		<div class="footer-top-random-post bg">
			<ol>
				<?php
				$randompost = new wp_Query(array(
				'post_type' => 'post',
				'posts_per_page' => '12',
				'orderby' => 'rand',
				'order' => 'ASC'));
				if(have_posts()):
				while ($randompost-> have_posts()) :$randompost-> the_post(); ?>
				
					<li>
						<a href="<?php the_permalink();?>">
							<div class="footer-top-random-post-img">
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail();
									} else { ?>
									<img src="<?php 	
										echo get_template_directory_uri(); ?>/assets/images/thumbnail.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
								<?php } ?>
							</div>
							<div class="footer-top-random-post-content">
								<h4 class="title"><?php the_title();?></h4>
							</div>	
						</a>
					</li>
				
				<?php
				endwhile;
				endif;
				?>
			</ol>	
		</div>



	<!-- Footer top section -->
		<div class="footer-top bg">
			<?php if (is_active_sidebar('nhrepon-footer-1')){
				dynamic_sidebar('nhrepon-footer-1');
			}
			?>


		</div>
	<!-- Footer bottom section -->	
		<div class="footer bg" id="page">
			<div class="footer-left">
				<div class="copyright-area">
					Copyright &copy; <?php echo date('Y'); ?>  <a href="<?php echo get_home_url(); ?>"><?php  bloginfo('name'); ?></a>
				</div>
			</div>
			<div class="footer-right">
			<?php $args = array ('theme_location' => 'footer_menu'); wp_nav_menu($args);?>
			</div>
		</div>
	
	
	
	</div>
</div>

<?php wp_footer(); ?>	
</body>
</html>
