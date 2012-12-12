<! DOCTYPE html>
<html>
	<head>
		<?php get_header() ?>
	</head>
	<body>
		<div id="wrapper">
			<header>
				<h1><?php bloginfo('name') ?></h1>
			</header>
			<nav id="primary-nav">
				<?php get_template_part('nav') // includes nav.php ?>
			</nav>
			<div  id="main">
				<?php 
				/**
				 * Check to see if the current request...
				 * is_catergory()
				 * is_front_page()
				 * is_home
				 * is_404()
				 * is_archive
				 * is_page()
				 * is_single() --> e.g. a single post
				 * is_tag()
				 * is_search() --> a page display search results
				 */
				if (is_front_page()) {
					
					// Include filr named content-home.php
					get_template_part('content','home');
				} elseif (is_page() || is_single()) {
					
					//Include file name content-single.php
					get_template_part('content','single');
				}
				?>
			</div>
			<footer>
				<?php get_footer() ?>
			</footer>
		</div>
	
	</body>
</html>