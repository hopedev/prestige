<?php
// Get all the People posts, display in a grid

// $args = array(
//     'posts_per_page'   => 5,
//     'offset'           => 0,
//     'category'         => '',
//     'category_name'    => '',
//     'orderby'          => 'date',
//     'order'            => 'DESC',
//     'include'          => '',
//     'exclude'          => '',
//     'meta_key'         => '',
//     'meta_value'       => '',
//     'post_type'        => 'post',
//     'post_mime_type'   => '',
//     'post_parent'      => '',
//     'author'       => '',
//     'author_name'      => '',
//     'post_status'      => 'publish',
//     'suppress_filters' => true 
?>

<div class=" uk-container uk-container-center">
<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3 data-uk-grid-margin" data-uk-grid-margin>

<?php
$args = array( 'posts_per_page' => -1, 'order'=> 'ASC', 'orderby' => 'title', 'post_type'  => 'person',);
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
    <div>
        <div  class="uk-panel">
            
            <?php 

            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } 

            the_title(); ?>   
            <?php //the_excerpt(); ?>
        </div>
    </div>
<?php
endforeach; 
wp_reset_postdata();

?>


</div></div> <!-- close grid container -->