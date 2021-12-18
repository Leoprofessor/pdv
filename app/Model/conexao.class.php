<?php

// this file called 'conexao.class.php'
class conexao{
  private $username;
  private $password;
  private $database;
 
  public function __set($name, $value){
    $this->$name = $value;
  }
 
  public function __get($name){
    return $this->$name;
  }
 
  public function conectar(){
    // note: ocilogon is an alias for oci_connect() function
    $conexao = oci_connect($this->username, $this->password, $this->database) or die;
    return $conexao;
  }
 
  public function fechar($conn){
    // note: ocilogoff is an alias for oci_close() function
    $close = oci_close($conn) or die;
    return $close;
  }
}
?>