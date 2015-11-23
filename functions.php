<?php
  /**
  * Proper way to enqueue styles
  */
  function enqueue_styles(){
    // CSS
    wp_enqueue_style( 'theme_styles',get_template_directory_uri() . '/assets/css/styles.css');
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
  }

  add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

  /**
  * Proper way to enqueue scripts
  */
  function enqueue_scripts() {
    // JS
    wp_enqueue_script('jquery-v2','https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',"", "", true);
    wp_enqueue_script( 'animation', get_template_directory_uri() . '/assets/js/min/animation.js', array('jquery-v2'),'', true );
    wp_enqueue_script( 'appjs', get_template_directory_uri() . '/assets/js/min/app.js', array('animation'),'', true );
    wp_register_script( 'api-maps','https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array('jquery-v2'),'', true );
    wp_register_script( 'google-maps', get_template_directory_uri() . '/assets/js/map.js', array('jquery-v2'),'', true );
    wp_register_script('home_script', get_template_directory_uri(). '/assets/js/home.js', array('appjs'),'', true);

    if (is_home()) {
      wp_enqueue_script('home_script');
    }
    else if (is_page(2)) {
      wp_enqueue_script('api-maps');
      wp_enqueue_script('google-maps');
    }
  }

  add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

  /**
  * Register my Menus
  */
  function register_my_menus(){
    register_nav_menus(
      array(
        'nav-header'=>__('Menu del Encabezado'),
        'nav-other' =>__('Menu de otras paginas')
      )
    );
  }

  add_action('init', 'register_my_menus');

  /**
  * Suport for images
  */
	function custom_theme_setup(){
		add_theme_support('post-thumbnails');
		// format to declarate = ($name , $width , $heigh, $crop(boolean))
		add_image_size('full-thumbnails',1200,800,true);
		add_theme_support( 'custom-header');
	}
	add_action('after_setup_theme','custom_theme_setup');

/**
* Add support colors
*/
$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

/**
* Add support for logo
*/

//* Cambia el logotipo de la página inicio de sesión de WordPress (usar imagen de 80x80px)
function mi_logo_personalizado() { ?>
    <style type="text/css">
        body.login div#login h1 a {
      background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/my-logo.png);
      background-size :170px;
      height          :300px;
      width           :170px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'mi_logo_personalizado' );

// Personaliza el enlace y título de la imagen de inicio de sesión de WordPress
function mi_logo_personalizado_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'mi_logo_personalizado_url' );

function mi_logo_personalizado_url_titulo() {
    return 'Bratya Azanza: Consultoria y Proyectos';
}
add_filter( 'login_headertitle', 'mi_logo_personalizado_url_titulo' );
