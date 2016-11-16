<header class="banner" data-uk-sticky>

<!-- Top Strip with logins -->
      <div class="topbanner uk-clearfix">
       <div class="container uk-container uk-container-center">
          <div class="nav-login uk-navbar-flip">
            <?php
            if (has_nav_menu('top_navigation')) :
              wp_nav_menu(['theme_location' => 'top_navigation', 'menu_class' => 'uk-navbar-nav nav', 'walker' => new Walker_UIKIT()]);
            endif;
            ?>
        </div>
        </div>

      </div>
<!-- End Top Strip -->

   <!-- Offscreen menu --> 
        <div class="uk-offcanvas" id="sidemenu">
          <nav class="uk-offcanvas-bar">
            <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'items_wrap' => '<ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>%3$s</ul>','walker' => new Walker_UIKIT_offCanvas() ]);
            endif;
            ?>
            <?php
            if (has_nav_menu('secondary_navigation')) :
              wp_nav_menu(['theme_location' => 'secondary_navigation', 'items_wrap' => '<ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon secondnav" data-uk-nav>%3$s</ul>','walker' => new Walker_UIKIT_offCanvas() ]);
            endif;
            ?>


          </nav>
      
        </div>
  <!-- END Offscreen menu -->

<!--  Middle Strip with Logo -->
      <div class="midbanner uk-clearfix">
       <div class="container uk-container uk-container-center">
              <div class="uk-navbar-brand">
                <a class="" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            </div>
            <div class="uk-navbar-content">
            Call us on 0845 6000 949
            </div>
            <div class="uk-navbar-flip">
                     <a href="#sidemenu"  class="uk-navbar-toggle" data-uk-offcanvas=""></a>  
                <span>Search</span>
        
            </div>
        </div>

      </div>
     <!-- End Middle Strip--> 

    <!-- Full menu section -->
    <div id="fullmenu">
      <!-- Main Navigation -->
      <nav class="uk-navbar">
         <div class="container uk-container uk-container-center">
 
         
              <div class="nav-primary"">
                  <?php
                  if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'uk-navbar-nav nav uk-flex', 'walker' => new Walker_UIKIT()]);
                  endif;
                  ?>
              </div>


        </div>
      </nav>
      <!-- End Main Navigation -->
 
      <div id="fullmenustrip" class="fullmenustrip uk-hidden">
        <div class="container uk-container uk-container-center">
          Sub Menus Here
        </div>

      </div>
    </div>
  <!-- End Full menu section -->
</header>

