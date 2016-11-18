<footer class="content-info">



	<div class="container">
		 <div class="footerbar uk-grid uk-grid-width-medium-1-2">
		    <div><div class="uk-panel"><div class="icon uk-icon-map-marker"></div><h2>Find Your Local Branch</h2></div></div>
		    <div><div class="uk-panel"><div class="icon uk-icon-volume-control-phone"></div><h2>Call our support team<br />0845 6000 949</h2></div></div>	    
	    </div>


		 <div class="logos uk-grid uk-grid-width-medium-1-2">
			 <div class="">
			Logos
			</div>
			<div class="">
			Follow us on ... Social icons
			</div>
		</div>

		
	    <?php //dynamic_sidebar('sidebar-footer'); 
				if (has_nav_menu('footer_navigation')) :
                    wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'uk-navbar-nav nav','container_class' => 'footermenu uk-clearfix', 'walker' => new Walker_UIKIT()]);
                  endif;
	    ?>
	

	    <div class="copyright">
			address vat number etc etc
			</div>

	  </div> <!-- End container -->
</footer>
