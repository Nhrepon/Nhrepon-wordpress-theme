<div class="sidebar bg">
		<!-- Nhrepon Side bar 1 -->		
			<?php if ( is_active_sidebar( 'nhrepon-sidebar-1' ) ) { ?>
				<div class="sidebar-section">
					<?php dynamic_sidebar( 'nhrepon-sidebar-1' ); ?>
				</div>
			<?php } ?>
			
	<!-- Random post section -->	
	<div class="random-post sidebar-section">
			<ol>
				<?php
				$randompost = new wp_Query(array(
				'post_type' => 'post',
				'posts_per_page' => '10',
				'orderby' => 'rand',
				'order' => 'ASC'));
				if(have_posts()):
				while ($randompost-> have_posts()) :$randompost-> the_post(); ?>
				
					<li>
						<a href="<?php the_permalink();?>">
							<div class="random-post-img">
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail();
									} else { ?>
									<img src="<?php 	
										echo get_template_directory_uri(); ?>/assets/images/thumbnail.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
								<?php } ?>
							</div>
							<div class="random-post-content">
								<h4 class="title"><?php the_title();?></h4>
								<p class="date"><?php echo get_the_modified_time('F j, Y'); ?></p>
							</div>	
						</a>
					</li>
				
				<?php
				endwhile;
				endif;
				?>
			</ol>	
		</div>
		
	<!-- Nhrepon Side bar 2 -->		
			<?php if ( is_active_sidebar( 'nhrepon-sidebar-2' ) ) { ?>
				<div class="sidebar-section">
			<?php dynamic_sidebar( 'nhrepon-sidebar-2' ); ?>
				</div>
			<?php } ?>
	
	<!-- Nhrepon Side bar 3 -->		
			<?php if ( is_active_sidebar( 'nhrepon-sidebar-3' ) ) { ?>
				<div class="sidebar-section">
			<?php dynamic_sidebar( 'nhrepon-sidebar-3' ); ?>
				</div>
			<?php } ?>
			
	<!-- Nhrepon Side bar 4 -->		
			<?php if ( is_active_sidebar( 'nhrepon-sidebar-4' ) ) { ?>
				<div class="sidebar-section">
			<?php dynamic_sidebar( 'nhrepon-sidebar-4' ); ?>
				</div>
			<?php } ?>
		
</div>