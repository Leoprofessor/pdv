<?php

//metodo usado a partir do PHP 5.1.2
/*
$conexao = oci_connect('SYSTEM', 'root', 'localhost:1521');

if (!$conexao) {
    $erro = oci_error();
    trigger_error(htmlentities($erro['message'], ENT_QUOTES), E_USER_ERROR);
exit;
}
*/

/*--------segunda tentativa
$user="SYSTEM@LOCALHOST:1521";
$senha="root";
$banco="(DESCRIPTION=
		  (ADDRESS_LIST=
			(ADDRESS=(PROTOCOL=TCP)
			  (HOST=LOCALHOST)(PORT=1521)
			)
		  )
		  (CONNECT_DATA=(SERVICE_NAME=OCI))
	 )"; 

	 
$conexao = oci_connect($user,$senha,$banco) or die ("could not connect:".oci_error);

if ($conexao)


   {
   echo "Conex�o bem sucedida.";
   }
   else
	  {
	  echo "Erro na conex�o com o Oracle.";
	  }
//### FIM - CONECTA AO ORACLE 2 tentativa



//conex�o com oracle
//$conn=OCILogon("SYSTEM","root","tns_oracle");

*/

//DADOS PARA CONEX�O com MYSQL
$servidor   =   "localhost";   //SERVIDOR
$bd         =   "GRM";       //DATABASE
$usuario    =   "root";        //USU�RIO
$senha      =   "";            //SENHA

//CONECTANDO
//global $conn;
global $conn;
$conn    =   @mysql_connect($servidor,$usuario, $senha)
             or die("ERRO NA CONEX�O");

//SELECIONA O DATABASE A SER UTILIZADO
$db      =   @mysql_select_db($bd, $conn)
             or die("ERRO NA SELE��O DO DATABASE");




/*

ini_set('display_errors',true);
error_reporting(E_ALL);

$ora_user = "SYSTEM";
$ora_senha = "root";
$ora_bd = "(DESCRIPTION=
          (ADDRESS_LIST=
            (ADDRESS=(PROTOCOL=TCP)
              (HOST=LOCALHOST)(PORT=1521)
            )
          )
          (CONNECT_DATA=(SERVICE_NAME=ORCL))
     )";
if ($ora_conexao = oci_connect($ora_user,$ora_senha,$ora_bd) )
        echo "Conex�o bem sucedida. Usu�rio conectado: ora_user";
else
        echo "Erro na conex�o com o Oracle.";
*/


?>