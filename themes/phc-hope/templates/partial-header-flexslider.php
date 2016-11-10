<?php

// Set a variable that says what style of slideshow?


// Using ACF but calling with WP get_post_meta so works without ACF plugin

?>
<div class="flexslider">
  <ul class="slides" >


  <?php
      $slideshow = get_post_meta( 20, $slideshow_name , true );
      $partialname = $slideshow_name . "_";

      if( $slideshow ) {
        for( $i = 0; $i < $slideshow; $i++ ) {
          $title  = esc_html( get_post_meta( get_the_ID(), $partialname . $i . '_text', true ) );
          $link = (int) get_post_meta( get_the_ID(), $partialname . $i . '_page_link', true ) ;
          $image = (int) get_post_meta( get_the_ID(), $partialname . $i . '_image', true );
          
          // Thumbnail field returns image ID, so grab image. If none provided, use default image
           $image =   wp_get_attachment_url( $image ) ;
           echo '<li title="' . $title . '" class="tab"> <img src="' .  $image  .  '"  alt="' . $title . '"></li>';
        }

      } 
  ?>

  </ul>
</div>