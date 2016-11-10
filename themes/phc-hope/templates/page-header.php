<?php // THis is template for all posts and pages (ie. not just Pages)

use Roots\Sage\Titles; 


if (is_post_type_archive('project')){
	echo '<div class="filters uk-container uk-container-center"><h2>Filters</h2>';
?>


	<div class="uk-width-medium-1-4 uk-sticky-placeholder">
        <div class="uk-panel uk-panel-box uk-active" data-uk-sticky="{boundary:true, animation: 'uk-animation-slide-top', media: 640}">
            <h3 class="uk-panel-header" >Project Type</h3>
            <ul id="project_type_filters" class="uk-nav uk-nav-side">
                <li class="uk-active" data-uk-filter=""><a href="#">All</a></li>
                <li class="" data-uk-filter="residential"><a href="#">Residential</a></li>
                <li class="" data-uk-filter="commercial"><a href="#">Commercial</a></li>
            </ul>
        </div>
    </div>
</div> <!-- close filters -->

<?php
}
?>


<div class="page-header uk-text-center">
  <h1><?= Titles\title(); ?></h1>
</div>
