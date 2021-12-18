<?php


require '../../Model/conecta.php';

require '../../Controller/AppConsultarController.php';
/*
// this file is called 'dm-oracle.php'
require_once('../../Model/conexao.class.php');
 
// loading the xml containing connection information
$xml = simple_xml_loadfile('../../Model/oracle.xml');
 
$oracle = new conexao();
$oracle->username = $xml->username;
$oracle->password = $xml->password;
$oracle->database = $xml->database;
 
if (!$oracle->conectar()){
  echo "ORACLE> Erro na conexão com o banco de dados.";
  exit;
}
*/
/**
 *
 *
 * bootstrap(tm) : Rapid Development Framework 
 * Copyright (c) ;
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) BRB, Inc. (http://www.brb.com.br
 * @link          Project Portal de Relacionamento BRB
 * @package       app
 * @since         BOOTSTRAP(tm) version 2.3.2
 * @license       http://getbootstrap.com/2.3.2/ 
 */

 
 //colocar na hora do agendamento http://localhost/pdm/plugins/jquery/demos/dialog/modal-form.html
 /*no agendamento ele pode priorizar http://localhost/pdm/plugins/jquery/demos/sortable/placeholder.html
 http://localhost/pdm/plugins/jquery/demos/sortable/connect-lists.html
 http://localhost/pdm/plugins/jquery/demos/sortable/empty-lists.html
 http://localhost/pdm/plugins/jquery/demos/sortable/display-grid.html
 http://localhost/pdm/plugins/jquery/demos/sortable/portlets.html "esse é massa ...com porschiiiiiti"
 
 esse é pra moeda http://localhost/pdm/plugins/jquery/demos/spinner/currency.html
 
 
 passo a passo http://localhost/pdm/plugins/jquery/demos/tabs/sortable.html
 http://localhost/pdm/plugins/jquery/demos/tabs/ajax.html
 
 */
 
  //echo "louvado seja Deus!";
 
//print_r($_POST);





?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   <!--<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />-->
    <link   href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	
	
	    <title>Portal de Metas BRB</title>
	    <link rel="stylesheet" href="plugins/jquery/themes/base/jquery.ui.all.css">
		<link rel="stylesheet" href="plugins/jquery/demos/demos.css">
		<script src="plugins/jquery/jquery-1.9.1.js"></script>
		<script src="plugins/jquery/ui/jquery.ui.core.js"></script>
		<script src="plugins/jquery/ui/jquery.ui.widget.js"></script>
		<script src="plugins/jquery/ui/jquery.ui.mouse.js"></script>
		<script src="plugins/jquery/ui/jquery.ui.resizable.js"></script>
		<script src="plugins/jquery/ui/jquery.ui.accordion.js"></script>

		
  
		<script>
	$(function() {
		$( "#accordion" ).accordion({
			heightStyle: "fill"
		});
	});
	$(function() {
		$( "#accordion-resizer" ).resizable({
			minHeight: 400,
			minWidth: 300,
			resize: function() {
				$( "#accordion" ).accordion( "refresh" );
			}
		});
	});
	</script>
	
	<!--função do form-->
		<script>
		$(document).ready(function() {    
		$('#submit_form').hover(function() {
			$('#hidden_field').attr('value') = 'abcd';
		});
		});
		
		
		</script>
	
	<style>
	#accordion-resizer {
		padding: 2px;
		width: 100%;
		height: 420px;
	}
	</style>
	
		
	
	
</head>
 
<body>




<div id="accordion-resizer" class="ui-widget-content">

<?Php //sleep(5);  ?>
	<div id="accordion">
		<h3><b>Minha Agenda</b></h3>
		<div>
			<p>Não existem registros no momento.</p>
		</div>
		<h3><b>Alertas</b></h3>
		<div>
			<p>Não existem registros no momento.</p>
		</div>
		<h3><b>Relacionamento</b></h3>
		<div>
			<p>Não existem registros no momento.</p>
		
		</div>
		<h3><b>Ações Comerciais</b></h3>
		<div>
			
           <!-- <div class="row">
                <h3>PHP CRUD Grid</h3>
            </div>-->
            
                <p>
                    <!--<a href="app/View/Pages/create.php" class="btn btn-success">Create</a>-->
                </p>
               <!-- <form enctype="multipart/form-data" method="post" action="/pdm/index.php"> -->
                
                <table width="100%" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nome Cliente</th>
                          <th>Segmento</th>
                          <th>Tipo Cliente</th>
                          <th>Carteira</th>
						  <th>Produto</th>
						  <th>Detalhar</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      
                      // Criando um Objeto DAO
					    $objdados = new AppConsultarController();
						// Salvando um novo teste
						$dados = $objdados->consultarMinhaCarteira();
                      //$dados = AppConsultarController::consultarMinhaCarteira();
                      
					
						
                      
                      if($dados != ""){
					  	
					 
          //$clientes = R::getAll('SELECT * FROM tb_cliente');
          
           $rows=mysql_num_rows($dados);
           while($s = mysql_fetch_array($dados)) {
          
           echo '<form method="post" name="submit_form" action="/pdm/index.php">';
  

					    
						        echo '<tr>';
                              
                                echo '<td>'. $s['NM_CLIENTE'] . '</td>';
                                echo '<td>'. $s['CD_SEGMENTACAO'] . '</td>';
                                echo '<td>'. $s['CD_TIPO_CLIENTE'] . '</td>';
								echo '<td>'. $s['CD_SEGMENTACAO'] . '</td>';
								echo '<td>'. $s['CD_SITUACAO_CLIENTE'] . '</td>';
							    echo '<td><button type="submit" class="btn btn-primary" name="CLIENTE" id="submit_form" value="'.$s['CD_CLIENTE']."|".$s['NM_CLIENTE'].'"  class="input-submit">Oferta</button>';
							    //<button type="submit" class="btn btn-primary" name="CLIENTE" id="submit_form" value="'.$s['CD_CLIENTE']."|".$s['NM_CLIENTE'].'"  class="input-submit">Cliente</button></td>';
								
                                echo '</tr>';
															
						
					   
					   }
						   
	

				}	else {
						echo '404 thing goes here';
						exit;
						}   
						
					
						
					//echo json_encode(array('result'=>'hello world'));
						
						
                      ?>
                      </tbody>
                </table>
                
    
</form>
            
                
                
        </div>
    <!-- /container -->
	


    
  </body>
</html>

