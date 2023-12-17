<?php get_header(); ?>

<div class="container single-post-wraper"> 
	<div class="single-post-body bg" id="content">

		<div <?php //post_class(); ?>>
				<?php
					if (have_posts()):
					while ( have_posts() ) : the_post(); ?>
						<h1 class="single-post-title"><?php the_title(); ?></h1>
						<div class="single-post-meta">
							<span>Updated on <?php the_category(', ');?> at <?php echo get_the_modified_time('F j, Y'); ?> By <?php the_author_posts_link();?></span>
						</div>
						<div class="single-post-thumbnail">
							<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
							} else { ?>
							<img src="<?php 	
							echo get_template_directory_uri(); ?>/assets/images/thumbnail.jpg" alt="<?php the_title(); ?>" />
							<?php }	?>
						</div>
						
						<div class="single-post-content" >
							<?php the_content(); ?>
						</div>
						<div class="post-navigation">
							<?php
								the_post_navigation( array(
							'next_text' => '<span class="meta-nav next" aria-hidden="true">' . __( '', 'Nhrepon' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'Nhrepon' ) . '</span>' .
								'<span class="post-title">%title </span>',
								
							'prev_text' => '<span class="meta-nav previous" aria-hidden="true">' . __( '', 'Nhrepon' ) . '</span>' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'Nhrepon' ) . '</span>' .
								'<span class="post-title">%title</span>',) );
							?>
						</div>

						<div class="comment-area">
							<?php if ( comments_open() || get_comments_number() ) :
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
	
	<?php get_sidebar(); ?>

 </div> 
<?php get_footer(); ?>