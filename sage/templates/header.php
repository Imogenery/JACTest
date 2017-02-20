
<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

    <span class="dropdown">
      <!-- Side navigation toggle button  -->
      <!--<a href="#nav-primary" class="fa fa-bars fa-2x toggle-nav dropdown-toggle" data-toggle="dropdown"></a>-->
      <a class="fa fa-bars fa-2x dropdown-toggle" data-toggle="dropdown"></a>
      <nav class="nav-primary dropdown-menu" id="nav-primary">
        <?php
        if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
      </nav>
    </span>

    
    <!-- Header logo -->
    <img id="logo" src="<?= get_template_directory_uri() . '/dist/images/logo2.jpg'; ?>">

    <!-- Social media and search icons -->
    <span id="search-social-media-icons">
      <span class="fa-stack fa-lg">
        <i class="fa fa-circle-thin fa-stack-2x"></i>
        <i class="fa fa-share-alt fa-stack-1x" id="share-icon"></i>
      </span>
      <span class="fa-stack fa-lg">
        <i class="fa fa-circle-thin fa-stack-2x"></i>
        <i class="fa fa-search fa-stack-1x" id="search-icon"></i>
      </span>
    </span>
  </div>
</header>
