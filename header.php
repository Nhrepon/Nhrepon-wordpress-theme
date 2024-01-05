<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords"
		content="Kegel Exercise Tips - Kegel Exercises Benefits - Kegel Exercises for men - Kegel Exercises for women - Pelvic Floor Exercises">
	<meta name="subject" content="Exercise Tips">
	<meta name="copyright" content="Kegel Exercise Tips">



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="header-wrapper container-fluid">
		<nav class="navbar navbar-expand-md navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand col-sm-6 fs-2 text-success fw-bold" href="<?php echo get_home_url(); ?>">
					<?php bloginfo('name'); ?>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse col-sm-6" id="navbarNavDropdown">

					<?php $args = array(
						'theme_location' => 'header_menu',
						'menu_class' => 'navbar-nav',
					
					);
					wp_nav_menu($args); ?>
				</div>
			</div>
		</nav>
	</div>