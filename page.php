<?php get_header(); ?>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-8 bg-light">
				<?php
				if (have_posts()):
					while (have_posts()):
						the_post(); ?>
						<h1 class="fs-1 p-3 my-4 fw-bold">
							<?php the_title(); ?>
						</h1>
						<hr>
						<div class="content-body">
							<?php
							the_post_thumbnail();
							the_content();
					endwhile;
				else:
					echo 'There is nothing found';
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
<!-- Footer section -->
<?php get_footer(); ?>