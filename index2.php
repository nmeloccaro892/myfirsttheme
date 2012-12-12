<! DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>" />
	
		<title><?php bloginfo('name')?></title>
	</head>
	<body>
		<h1><?php bloginfo('name')?></h1>
		<p><?php bloginfo('decription')?></p>
	
		<div class="posts">
		<!-- Method #1 -->
		<?php  if(have_posts()):?>
			<?php while(have_posts()):?>
				<?php the_post()?>
				<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
				<?php the_content()?>
			<?php endwhile ?>
		<?php endif ?>
		</div>
	</body>
</html>