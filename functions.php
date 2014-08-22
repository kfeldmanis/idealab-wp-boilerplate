<?php

  register_nav_menus( array(
    'header' => 'Header nav',
    'footer' => 'Footer nav'
  ));

  function idea_scripts() {
    wp_enqueue_style( 'theme', get_template_directory_uri() . '/assets/css/theme.css', '1.0.0', true );
    wp_enqueue_script( "scripts", get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0.0', true );
  }

  add_action( 'wp_enqueue_scripts', 'idea_scripts' );

  class new_general_setting {

    private $nap1 = "";

    function new_general_setting($nap) {
      $this->nap1 = $nap;
      add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }

    function register_fields() {
      register_setting( 'general', $this->nap1, 'esc_attr' );
      add_settings_field($this->nap1, '<label for='.$this->nap1.'>'.__($this->nap1, $this->nap1 ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }

    function fields_html() {
      $value = get_option( $this->nap1, '' );
      echo '<input type="text" id='.$this->nap1.' name='.$this->nap1.' value="' . $value . '" />';
    }
  }

  // General options
  new new_general_setting("website_author");
  new new_general_setting("twitter_username");
  new new_general_setting("google_id");
  new new_general_setting("google_webmaster");

?>