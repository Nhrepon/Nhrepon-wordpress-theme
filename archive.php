<?php get_header(); ?>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-8 bg-light">
				<?php the_archive_title('<h1 class="fs-1 p-2 my-3">', '</h1>'); ?>
				<hr>
				<?php
				if (have_posts()):
					while (have_posts()):
						the_post(); ?>
						<div class="row my-3">
							<div class="col-12 col-sm-12 col-md-5 col-lg-6">
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
							<div class="col-12 col-sm-12 col-md-7 col-lg-6">
								<h1 class="fs-4"><a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a></h1>
								<div class="post-meta">
									<span>Posted at
										<?php echo get_the_modified_time('F j, Y'); ?> on
										<?php the_category(', '); ?> By
										<?php the_author_posts_link(); ?>
									</span>
								</div>
								<div class="post-excerpt d-none d-lg-block">
									<?php echo wp_trim_words(get_the_content(), 20); ?>
								</div>
							</div>
						</div>

					<?php endwhile;
				else:
					echo 'No post found';
				endif;
				?>
				<div class="row">
					<?php the_posts_pagination(array('prev_text'=> __('<<','Nhrepon'),'next_text'=> __('>>','Nhrepon')) ); ?>
				</div>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<!-- Footer section -->
<?php get_footer(); ?>