<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post() ?>
	<h2><?php the_title() ?></h2>
		<div class="meta">
				<i class="icon-user"></i><span class="author"> <?php the_author()?></span>
				<i class=" icon-time"></i><span class="date"> <?php the_time(get_option('date_format')); ?></span>
				<i class="icon-comment"></i><span class="num-comments"> <?php comments_number('no comments','one comment','% comments'); ?></span>
			</div>
		<div class="story-content">
			<?php the_content() ?>
		</div>
		<?php comments_template() ?>
	<?php endwhile ?>
<?php endif ?>