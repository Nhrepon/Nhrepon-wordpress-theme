<?php get_header();?>
<div class="container">
	<div class="content bg">
		<div class="page-body">
			<?php if ( have_posts() ) { ?>
			<h1 class="page-title">
				<?php
				printf(
					/* translators: %s: Search term. */
					esc_html__( 'You were searching for "%s"', 'jobnews' ),
					'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
				);
				?>
			</h1>
			<p>
				<?php
				printf(
					esc_html(
						_n(
							'%d result matched with your search.',
							'%d result matched with your search.',
							(int) $wp_query->found_posts,
							'jobnews'
						)
					),
					(int) $wp_query->found_posts
				);
				?>
			</p>
	<?php
	// Start the Loop.
	while (have_posts()) : the_post(); ?>
			<div class="post">	
				<div class="post-image">
					<a href="<?php the_permalink();?>">
					<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
							} else { ?>
							<img src="<?php 	
								echo get_template_directory_uri(); ?>/assets/images/thumbnail.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
					<?php } ?>
					</a>
				</div>
				<div class="post-content">
					<h1 class="post-title"><a href="<?php the_permalink();?>">	<?php the_title(); ?></a></h1>
					<div class="post-meta">
					<span>Posted at <?php echo get_the_modified_time('F j, Y'); ?> on <?php the_category(', ');?> By <?php the_author_posts_link();?></span>
					</div>
					<div class="post-excerpt"><?php echo wp_trim_words(get_the_content(),20);?> </div>
					<a class="continue-reading" href="<?php the_permalink();?>">
						Continue Reading...
					</a>
				</div>
					

			</div>
			<?php endwhile;
				the_posts_navigation();
			} else {
				echo ' <h1 class="nothing-found">Nothing found! </h1>
				Please go to home page Or try a search with right keywords.';
				}
			?>
	</div>
	</div>
	<?php get_sidebar(); ?>	
</div>
<?php get_footer();?>