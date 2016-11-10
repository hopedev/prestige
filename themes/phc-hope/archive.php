<?php get_template_part('templates/page', 'header'); ?>

<div class="filters uk-container uk-container-center">

	<?php if (is_post_type_archive('project')) {  ?>

	<div class="uk-grid uk-grid-width-1-1 uk-grid-width-small-1-2 uk-grid-width-medium-1-3  uk-grid-width-large-1-4 uk-grid-width-xlarge-1-5"  data-uk-grid="{controls: '#project_type_filters'}">


	<?php } else { ?>
		<div class="thecontent">

	<?php } ?>



	<?php if (!have_posts()) : ?>
	  <div class="alert alert-warning">
	    <?php _e('Sorry, no results were found.', 'sage'); ?>
	  </div>
	  <?php get_search_form(); ?>
	<?php endif; ?>

	<?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>

	</div>
</div>