<figure>
  <a href="<?= bloginfo('url')  ?> "><img src="<?= get_template_directory_uri().'/assets/images/brand.png' ?>" alt=""></a>
</figure>
<span class="btn-menu"><i class="fa fa-bars"></i></span>

<?php wp_nav_menu(
  array(
    'theme_location' => 'nav-header',
    'menu_class' => 'link-effect ',
    'container' => 'nav',
    'container_class' => 'navigation-list',
    'link_before' => '<i class="icon fa fa-long-arrow-right fa-fw"></i>'
  )
); ?>
