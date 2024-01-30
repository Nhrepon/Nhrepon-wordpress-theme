<?php get_header(); ?>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-8 bg-light">
				<div <?php //post_class(); ?>>
					<?php
					if (have_posts()):
						while (have_posts()):
							the_post(); ?>
							<h1 class="single-post-title">
								<?php the_title(); ?>
							</h1>
							<div class="single-post-meta">
								<span>Updated on
									<?php the_category(', '); ?> at
									<?php echo get_the_modified_time('F j, Y'); ?> By
									<?php the_author_posts_link(); ?>
								</span>
							</div>
							<div class="single-post-thumbnail">
								<?php if (has_post_thumbnail()) {
									the_post_thumbnail();
								} else { ?>
									<img src="<?php
									echo get_template_directory_uri(); ?>/assets/images/thumbnail.jpg" alt="<?php the_title(); ?>" />
								<?php } ?>
							</div>

							<div class="single-post-content">
								<?php the_content(); ?>
							</div>
							<div class="row post-navigation">
								<?php
								the_post_navigation(array(
									'next_text' => '<span class="meta-nav next" aria-hidden="true">' . __('', 'Nhrepon') . '</span> ' .
										'<span class="screen-reader-text">' . __('Next post:', 'Nhrepon') . '</span>' .
										'<span class="post-title">%title </span>',

									'prev_text' => '<span class="meta-nav previous" aria-hidden="true">' . __('', 'Nhrepon') . '</span>' .
										'<span class="screen-reader-text">' . __('Previous post:', 'Nhrepon') . '</span>' .
										'<span class="post-title">%title</span>', ));
								?>
							</div>

							<div class="row p-2">
								<div class="card my-5 text-center">
									<img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" class="card-img usr-img" alt="..." >
									<div class="card-body">
										<h4 class="card-title"><?php echo the_author_meta( 'display_name' ); ?></h4>
										<p class="card-text"><?php echo the_author_meta( 'description' ); ?></p>
										
									</div>
								</div>
							</div>

							<div class="comment-area">
								<?php if (comments_open() || get_comments_number()):
									comments_template();
								endif;
								?>
							</div>
							<?php
							// End the loop.
						endwhile;
					endif;
					?>
				</div>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>