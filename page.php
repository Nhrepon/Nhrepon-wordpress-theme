<?php get_header();?>
	
<div class="container"> 
		<div class="content bg">
			<div class="">
				<?php
				if (have_posts()):
					while ( have_posts() ) : the_post();?>			
					<h1><?php the_title(); ?></h1>			
					<?php
						the_post_thumbnail();
						the_content();
					endwhile;
					else: echo 'There is nothing found';
					endif;
					?>
			</div>	
		</div>
		<?php get_sidebar();?>	

</div>
<!-- Footer section -->		
<?php get_footer();?>