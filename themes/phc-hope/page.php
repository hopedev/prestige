   <?php 
   

   if (is_front_page() || is_page('the-team')){ ?>

   <div class="hometopsection ">
	   	<div class="uk-grid uk-grid-collapse uk-grid-width-1-1 uk-grid-width-medium-1-2">
		   	<div class="leftslider">
			   <?php // Left side slider, top on mob
			   	$slideshow_name =  'main_slider_l';
				include(locate_template('templates/partial-header-flexslider.php')); 
			   ?> 
		   </div>

			<div  class="rightslider">
			   <?php // Right side slider, bottom on mob
			   	$slideshow_name =  'main_slider_r';
				include(locate_template('templates/partial-header-flexslider.php')); 		   
			   ?> 
		   </div>		   	
		</div> <!-- close grid -->

		<div class="uk-nbfc uk-container-center slidetest uk-vertical-align-middle">
			<div class="slideup uk-panel uk-panel-box  uk-container-center" style="z-index:100; min-height: 40px; width:100px;">Slide up</div>
			<div class="slidedown uk-panel uk-panel-box  uk-container-center" style="z-index:100; min-height: 40px; width:100px;">Slide Down</div>
		</div>

   </div> <!-- end hometopsection -->
	<?php } ?>



<?php while (have_posts()) : the_post(); ?>

	<div class=" uk-container uk-container-center uk-text-center">
  
	  <?php get_template_part('templates/page', 'header'); ?>

	  <?php get_template_part('templates/content', 'page'); ?>

	</div>

<?php endwhile; ?>


<?php if (is_front_page()){ ?>

   <div class="">
	   
		   	<div >

		   <?php // Left side slider, top on mob
		   	$slideshow_name =  'comm_slider';
			include(locate_template('templates/partial-slideshow.php')); 
		   ?> 

		   </div>

			<div >
		   <?php // Right side slider, bottom on mob
		   	$slideshow_name =  'residential_projects_slider';
			include(locate_template('templates/partial-slideshow.php')); 
		   
		   ?> 
			
		   </div>
	

   </div>
	<?php 

	}else if(is_page('the-team')) {
					include(locate_template('templates/partial-team.php')); 
	}

