<?php

//require '../lib/rb.php';
session_start();

class AppConsultarController {



	function consultarMinhaCarteira() {

	
	$query = "SELECT * FROM tb_cliente ";

	$result = mysql_query($query) or die ("A consulta falhou em consultarMinhaCarteira() : " . mysql_error());


	Return $result;

			
              
			  
	}
	
	function detalharOfertaCarteira() {
	

	$query  =  "a.CD_CLIENTE,";
	$query .= "a.NM_CLIENTE,";
	$query .= "a.CD_EMP_DETENTORA,";
	$query .= "a.CD_DEP_DETENTORA,";
	$query .= "DATE_FORMAT(a.dt_cadastramento, '%d/%m/%Y') as 'DATETIME',";
	$query .= "a.CD_TIPO_CLIENTE,";
	$query .= "a.VL_LIMITE_CREDITO_ATUAL,";
	$query .= "a.DT_ULTIMA_IMP_CADASTRAL,";
	$query .= "a.CD_SITUACAO_CLIENTE,";
	$query .= "a.DT_VENCIMENTO_CADASTRO,";
	$query .= "a.DT_VENC_LIMITE_CREDITO,";
	$query .= "a.DT_CLIENTE_DESDE,";
	$query .= "a.CD_EMP_AUTORIZADA,";
	$query .= "a.CD_DEP_AUTORIZADA,";
	$query .= "a.CD_SEGMENTACAO,";
	$query .= "a.DT_SEGMENTACAO,";
	$query .= "a.NR_CARTEIRA,";
	$query .= "a.NR_MATRICULA_GERENTE,";
	$query .= "a.DT_ATUALIZACAO_CADASTRO from tb_cliente as a ";
	$query .= " join tb_interacao b on a.CD_CLIENTE = b.COD_CLIENTE ";
	$query .= " join tb_situacao_oferta c on b.CD_SITUACAO_OFERTA = c.CD_SITUACAO_OFERTA ";
	$query .= " join tb_produto d on b.CD_PRODUTO = d.CD_PRODUTO AND a.CD_CLIENTE = ".$_SESSION["cd_cliente0"];
	//print_r($query);

	$result = mysql_query($query) or die ("A consulta falhou em consultarMinhaCarteira() : " . mysql_error());


	Return $result;

			
              
			  
	}



		function preencheSelectSetor()
		{
		    $select = "SELECT * from tb_situacao_oferta";
		    $sql = mysql_query($select);
		    
		   return $sql;
		}
	
	

}
