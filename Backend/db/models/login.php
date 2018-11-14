<?php

/*
  * File : Connection.php
  * Autor: Ezequiel E. Vera
  * Date : 2018/11/13 - 15:48
  * Description: ...
  * Modify: 2018/11/13 - 16:36
*/

  class Login {

    private $log_state;
    private $log_username;
    private $log_password;

    public function __construct ( $data ) {
      $this->log_state = 0;
      $this->log_username = $data['username'];
      $this->log_password = $data['password'];
    }

    public function login ( $data ) {
      
    }

    public function state () {
      return $this->log_state;
    }

    private function check_username ( $name ) {
      if ( count($name) > 0) {
        $regex = '/[a-zA-Z0-9_-]/m';

        preg_match_all($regex, $name, $matches, PREG_SET_ORDER, 0);

        if ( count($matches) == count($name) ) {
          return true;
        }
        else {
          return 'ERROR: 0101';
        }
      }
      else {
        return 'ERROR: 0100';
      }
    }

    private function check_password ( $pass ) {
      if ( count($pass) > 0 ) {
        if ( count($pass) > 8 ) {
          return true;
        }
        else {
          return 'ERROR: 0103';
        }
      }
      else {
        return 'ERROR: 0102';
      }
    }


  }

/*
  * ERRORs: (code)
    * 0100: Username empty
    * 0101: Username invalid characters
    * 0102: Password empty
    * 0103: Password lower 8 characters
    * 010:
    * 010:
    * 010:
*/
?>
