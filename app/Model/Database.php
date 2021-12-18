<?php

require '../../../lib/rb.php';
R::setup('mysql:host=localhost;dbname=pdm','root',''); //for both mysql or mariaDB
/*
class DATABASE_CONFIG {
 
//postgres
var $default = array(
'driver' => 'postgres',
'persistent' => false,
'host' => 'local_db',
'login' => 'usuario_db',
'password' => 'senha_db',
'database' => 'banco_db',
'prefix' => ''
);
 
//oracle
var $oracle = array(
'driver' => 'oracle',
'persistent' => false,
'login' => 'usuario_db',
'password' => 'senha_db',
'database' => 'local_db:porta_db/banco_db',
'prefix' => ''
);
 
//mysql
var $mysql = array(
'driver' => 'mysql',
'persistent' => true,
'host' => 'local_db',
'login' => 'root',
'password' => '',
'database' => 'pdm',
'prefix' => ''
);
 
//sqlserver
var $sqlserver= array(
'driver' => 'sqlserver',
'persistent' => false,
'host' => 'local_db',
'login' => 'usuario_db',
'password' => 'senha_db',
'database' => 'banco_db',
'prefix' => ''
);
}
*/

?>