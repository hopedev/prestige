
<div class="uk-grid uk-grid-width-medium-1-2">
	<div>
		<div class="featured-image">
		<?php the_post_thumbnail("medium"); ?>
		 </div>
		<div class="featured-quote"><blockquote>
		<?php 
			$quote =  get_post_meta( get_the_ID(), 'featured_quote', true );
			if( $quote ) { echo $quote;  }
			?>
			</blockquote>
			<div class="quote-author">
					<?php 
			$quote_author =  get_post_meta( get_the_ID(), 'featured_quote_author', true );
			if( $quote_author ) { echo $quote_author;  }
			?>
			</div>
		 </div>


	 </div>

<div>
	<?php the_content(); ?>
</div>
</div>


<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
