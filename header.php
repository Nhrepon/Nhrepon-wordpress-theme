<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	
	<title><?php if (function_exists('is_tag') && is_tag()) { echo 'Tag Archive for "'.$tag.'" - '; } 
	//elseif (is_archive()) { wp_title(''); echo ' Archive - '; } 
	//elseif (is_search()) { echo 'Search for "'.wp_specialchars($s).'" - '; } 
	elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } 
	elseif (is_404()) { echo 'Not Found - '; } 
	if (is_home()) { bloginfo('name'); echo ' - '; bloginfo('description'); } 
	else { bloginfo('name'); } ?></title>
	
	
<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>
<div class="header-wrapper">
	<div class="container">
		<!-- Header section -->        
		<div class="header bg">
			<div class="logo"><a href="<?php echo get_home_url(); ?>"><?php  bloginfo('name'); ?></a></div>
		</div>		
	</div>
</div>