<! DOCTYPE html>
<html>
	<head>
		<?php get_header() ?>
	</head>
	<body>
		<div id="wrapper">
			<header>
				<h1><?php bloginfo('name') ?> <a href="https://www.apple.com"><img src="<?php echo get_template_directory_uri()?>/img/apple_logo.png" alt="apple_logo"></img></a></h1>
			</header>
			<nav id="primary-nav">
				<?php get_template_part('nav') // includes nav.php ?>
			</nav>
			<div  id="main">
				<div class="row-fluid">
					<!-- Main Column -->
					<div class="span9">
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
						} elseif (is_search()) {
							
							// Include file named content-search.php
							get_template_part('content','search');
						} else { //DIsplay Posts!
							
							// Include file named content-blog.php
							get_template_part('content','blog');
						}
						?>
					</div>
					<!-- Right Sidebar -->
					<div class="span3">         
						<?php get_sidebar()?>
					</div>
				</div>
			</div>
			<footer>
				<?php get_footer() ?>
			</footer>
		</div>
	
	</body>
</html>