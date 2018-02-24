<html>
	<head>

	<!--
	__             _   ___      __      __
   / /_  __  __   / | / (_)____/ /__   / /   ___  ___
  / __ \/ / / /  /  |/ / / ___/ //_/  / /   / _ \/ _ \
 / /_/ / /_/ /  / /|  / / /__/ ,<    / /___/  __/  __/
/_.___/\__, /  /_/ |_/_/\___/_/|_|  /_____/\___/\___/
      /____/
      blog
-->
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title><?php wp_title(); ?> 💯</title>
	    <meta name="description" content="Personal Website">
	    <meta name="author" content="Nick Lee">
      <?php wp_head(); ?>
	    <!-- <link rel="stylesheet" href="./style.css">
	    <link rel="stylesheet" href="./css/grid.css"> -->
	</head>

	<body <?php body_class()?>>
		<div class="container">
			<header >
				<div class='layer'>
					<div class='navigation' id='navy'>

						<?php
							$defaults = array(
								'container' => false,
								'theme_location' => 'primary-menu',
								'menu_class' => 'no-bullet'
							);
							wp_nav_menu($defaults);
						?>
          				<a id="hamburger-menu">&#9776;</a>
					</div>
					<div class='branding'>
						<h1>Nick Lee</h1>
						<hr>
						<h2>Fullstack Developer</h2>
					</div>
				</div>
				<div class='border'></div>
			</header>
