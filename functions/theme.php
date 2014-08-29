<?php
  // Options Framework (https://github.com/devinsays/options-framework-plugin)
  if ( !function_exists( 'optionsframework_init' ) ) {
    define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/_inc/' );
    require_once dirname( __FILE__ ) . '/_inc/options-framework.php';
  }

  register_nav_menus( array(
    'header' => 'Header nav',
    'footer' => 'Footer nav'
  ));

  function idea_scripts() {
    wp_enqueue_script( "scripts", get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0.0', true );
  }

  add_action( 'wp_enqueue_scripts', 'idea_scripts' );
?>