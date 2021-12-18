<?php

//require '../lib/rb.php';

print_r($_POST);

class AppManterOfertaController {



	function consultarManterMinhaCarteira() {
	
	         
	//R::setup('mysql:host=localhost;dbname=pdm','root',''); //for both mysql or mariaDB
	//$clientes = R::getAll('SELECT * FROM tb_cliente');
	
	$query = "SELECT produto.CD_PRODUTO, produto.NM_PRODUTO, oferta.CD_SITUACAO_OFERTA, oferta.DS_SITUACAO_OFERTA FROM tb_produto produto, tb_situacao_oferta oferta WHERE produto.CD_SITUACAO_OFERTA=oferta.CD_SITUACAO_OFERTA";

	$result = mysql_query($query) or die ("A consulta falhou em consultarManterMinhaCarteira() : " . mysql_error());


	Return $result;

			
              
			  
	}
	



	
	
	

}
