<?php

/*
  * File : Connection.php
  * Autor: Ezequiel E. Vera
  * Date : 2018/11/13 - 15:48
  * Description: ...
  * Modify: 2018/11/13 - 16:36
*/

class Connection {
  
  private $con_db_server;
  private $con_db_name;
  private $con_user_name;
  private $con_user_password;
  private $connection;

  public function __construct() {

  }

  public function setInfo ( $info ) {
    $this->set_svName( $info['server'] );
    $this->set_dbName( $info['db_name'] );
    $this->set_usName( $info['user_name'] );
    $this->set_usPass( $info['user_password'] );
  }

  public function connect () {
    $svName = $this->con_db_server;
    $dbName = $this->con_db_name;
    $usName = $this->con_user_name;
    $usPass = $this->con_user_password;

    $this->connection = new mysqli( $svName, $dbName, $usName, $usPass );
  }

  public function close () {
    $this->connection->close();
  }

  public function getConnection () {
    return $this->connection;
  }

  private function set_svName ( $info ) {
    $this->con_db_server = $info;
  }
  private function set_dbName ( $info ) {
    $this->con_db_name = $info;
  }
  private function set_usName ( $info ) {
    $this->con_user_name = $info;
  }
  private function set_usPass ( $info ) {
    $this->con_user_password = $info;
  }
  private function set_connection ( $info ) {
    $this->connection = $info;
  }

}


?>
