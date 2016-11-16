
<div class="page-content uk-grid uk-grid-width-medium-1-2 uk-grid-large">
	<div>
		<div class="featured-image">
		<?php the_post_thumbnail("medium"); ?>
		 </div>
		
		<?php 
			$quote =  get_post_meta( get_the_ID(), 'featured_quote', true );
			if( $quote ) { 
				echo '<div class="featured-quote"><blockquote>';
				echo $quote;  
				echo '</blockquote>';
				$quote_author =  get_post_meta( get_the_ID(), 'featured_quote_author', true );
				if( $quote_author ) { 
					echo '<div class="quote-author">';
					echo $quote_author;  
					echo '</div>';
				}
				
			}
		?>

			

			
		 </div>


	 </div>

	<div class="post-content">
		<?php the_content(); ?>
	</div>
</div>


<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
