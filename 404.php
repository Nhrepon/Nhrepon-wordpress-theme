<?php get_header();?>
	
<div class="container"> 
	<div class="content bg">
        <div class="page-body page-404">
            <h1 class="page-title">
				<?php _e( 'Not Found', 'jobnews' ); ?>
			</h1>
            <h2>
				<?php _e( 'It looks like nothing was found at this location. ', 'jobnews' ); ?>
			</h2>
             <p>
				<?php _e( 'Maybe try a search?', 'jobnews' ); ?>
			 </p>
 
                 <?php get_search_form(); ?>
				 <h2><a href="<?php echo home_url(); ?>">Go to Home page...</a></h2>
        </div><!-- .page-wrapper -->
	</div>
	<?php get_sidebar();?>
	
</div>
<!-- Footer section -->		
<?php get_footer();?>