<?php  //Returns Array of Term Names for "my_taxonomy"
$term_list = wp_get_post_terms($post->ID, 'project_type', array("fields" => "slugs"));
$filter= $term_list[0];
?>

<article <?php post_class(); //grid item ?> data-uk-filter="<?php  echo $filter; ?>" >

<div  class="uk-panel">
	<div class="uk-overlay uk-overlay-hover">

		<?php 
			            if ( has_post_thumbnail() ) {
			                the_post_thumbnail();
			            } 
		?>
			
			<figcaption class="uk-overlay-panel uk-overlay-fade uk-overlay-background">
				<?php the_excerpt(); ?>
			</figcaption>
	</div>



	  <header>
	    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    <?php //get_template_part('templates/entry-meta'); ?>
	  </header>

	  <div class="entry-summary">
	  </div>


  </div>
</article>
