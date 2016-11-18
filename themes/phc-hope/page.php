<div class="pagebanner ">

	<div class=" uk-container uk-container-center uk-text-center">
		<div class="uk-grid uk-grid-width-medium-1-2">
			<div class="pagebanner-text">Case study</div>
			<div class="pagebanner-img">

			<?php 
			$banner_ID = (int) get_post_meta( get_the_ID(), 'banner_image', true );
			if( $banner_ID ) {
			    $banner_img =  wp_get_attachment_image( $banner_ID, 'full' ) ;
			     echo $banner_img;
			  }
			
			?>
			</div>
		</div>
	</div>
</div>

 <div class="breadcrumbscontainer uk-container uk-container-center">
      <?php
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('
        <p class="breadcrumb">','</p>
        ');
      }
      ?>
      </div>


<?php while (have_posts()) : the_post(); ?>

	<div class=" uk-container uk-container-center">
  
	  <?php get_template_part('templates/page', 'header'); ?>

	  <?php get_template_part('templates/content', 'page'); ?>

<!-- if footer pic & quote -->
		<?php 
			$footerpic_ID = (int) get_post_meta( get_the_ID(), 'footer_image', true );
			if( $footerpic_ID ) {
			    
			    $footer_img =  wp_get_attachment_image( $banner_ID, 'full' ) ;

			     echo '<div class="footerimage">' . $footer_img . '</div>';
			  }
			 
			$quote =  get_post_meta( get_the_ID(), 'footer_quote', true );
			if( $quote ) { 
				echo '<div class="footer-quote"><blockquote>';
				echo $quote;  
				echo '</blockquote>';
				$quote_author =  get_post_meta( get_the_ID(), 'footer_quote', true );
				if( $quote_author ) { 
					echo '<div class="footer-quote-author">';
					echo $quote_author;  
					echo '</div>';
				}
				
			}
		?>

	</div>

<?php endwhile; ?>

