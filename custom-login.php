<?php
/**
 * Plugin Name: Custom Login Form
 * Plugin URI: https://www.example.com/
 * Description: A custom login form for WordPress.
 * Version: 1.0
 * Author: Your Name
 * Author URI: https://www.example.com/
**/

function wp_custom_login_form() {
  // Check if the user is already logged in
  if ( is_user_logged_in() ) {
    // If they are, redirect them to the homepage
    wp_redirect( home_url() );
    exit;
  }

  // If they're not logged in, display the login form
  $args = array(
    'echo' => true,
    'redirect' => home_url(),
    'form_id' => 'loginform',
    'label_username' => __( 'Username' ),
    'label_password' => __( 'Password' ),
    'label_remember' => __( 'Remember Me' ),
    'label_log_in' => __( 'Log In' ),
    'id_username' => 'user_login',
    'id_password' => 'user_pass',
    'id_remember' => 'rememberme',
    'id_submit' => 'wp-submit',
    'remember' => true,
    'value_username' => '',
    'value_remember' => false
  );
  wp_login_form( $args );
}

// Add the shortcode to display the login form
add_shortcode( 'wp_custom_login_form', 'wp_custom_login_form' );
