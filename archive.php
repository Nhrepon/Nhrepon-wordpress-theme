<?php get_header();?>
	
<div class="container"> 
	<div class="content bg">
		<div class="page-body">
			<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
			<?php 
					if(have_posts()):
					while (have_posts()) : the_post(); ?>
			<div class="post"> 
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
				<div class="post-content">
					<h1 class="post-title"><a href="<?php the_permalink();?>">	<?php the_title(); ?></a></h1>
					<div class="post-meta">
						<span>Posted at <?php echo get_the_modified_time('F j, Y'); ?> on <?php the_category(', ');?> By <?php the_author_posts_link();?></span>
					</div>
					<div class="post-excerpt"><?php echo wp_trim_words(get_the_content(),20);?> </div>
				</div>
					

			</div>
			<?php endwhile;
					else: echo 'No post found';
					endif;
					?>
				
		
		<?php the_posts_pagination();?>
			</div>
	</div>

		<?php get_sidebar();?>	

</div>
<!-- Footer section -->		
<?php get_footer();?>