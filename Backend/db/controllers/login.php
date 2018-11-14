<?php

  include_once( '../models/login.php' );
  include_once( '../models/login_security.php' );

  $security = new Security ( [ $authentication_key, $timed ] );

  if ( $security->secure() ) {

    $log_username = $_GET('username');
    $log_password = $_GET('password');

    $login = new Login();
    $login->login( [$log_username, $log_password] );

    $log_state = $login->state();

    if ( $log_state ) {
      // return true
    }
    else {
      // return false & error code
    }

  }
  else {
    // return false & error code
  }

?>
