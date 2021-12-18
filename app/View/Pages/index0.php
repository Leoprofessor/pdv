<?Php
error_reporting(0);
session_start();
require '../../Model/conecta.php';
require '../../Controller/AppConsultarController.php';
require '../../Controller/AppManterOfertaController.php';

print_r($_SESSION["cd_cliente0"]);

?>

<html>
<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	    <meta charset="utf-8">
   <!--<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />-->
    <link   href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#ajax_form').submit(function(){
			var dados = jQuery( this ).serialize();
 
			jQuery.ajax({
				type: "POST",
				url: "app/View/Pages/Index0.php",
				data: dados,
				success: function( data )
				{
					alert( data );
				}
			});
			
			return false;
		});
	});
	</script>
</head>
<body>
<form method="post" action="" id="ajax_form">
   <table width="100%" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nome Produto</th>
                         
						  <th>Ação</th>
                        </tr>
                      </thead>
                      <tbody>

<?Php
                        // Criando um Objeto DAO para manter
					    $objdados = new AppConsultarController();
						// Salvando um novo teste
						$dados = $objdados->detalharOfertaCarteira();
                      //$dados = AppConsultarController::consultarMinhaCarteira();
                      
					
						$objdadosstoferta = new AppConsultarController();
						// Salvando um novo teste
						$dadosstoferta = $objdadosstoferta->preencheSelectSetor();
                      //$dados = AppConsultarController::consultarMinhaCarteira();
                      
                      if(($dados != "") || ($dadosstoferta != "")){
					  
					   
					  	echo("chegou");
					 

          
           $rows=mysql_num_rows($dados);
           
           while($s = mysql_fetch_array($dados)) {
           	
           	//$select = "SELECT * from tb_situacao_oferta where ";
            //$sql = mysql_query($select);
          
  echo '<form method="post" action="" id="ajax_form">';
  

					    
						        echo '<tr>';
                              
                                echo '<td>'. $s['NM_PRODUTO'] . '</td>';
								
								
								//$row = mysql_fetch_row($dadosstoferta);

//echo $row[1];                 
                                echo '<td>';
								while($row = mysql_fetch_array($dadosstoferta)) {
								echo '<input type="radio" name="st_oferta" value="'.$row[1].'">'.$row[0].'';
								}
								echo '</td>';
								//echo '<input type="radio" name="st_oferta" value="'.$row[1].'">Efetivo com sucesso';
								//echo '<input type="radio" name="st_oferta" value="'.$row[1].'">Efetivo sem sucesso';
								//echo '<input type="radio" name="st_oferta" value="'.$row[1].'">Agendado';
								//echo '<input type="radio" name="st_oferta" value="'.$row[1].'">Não efetivo';
								
								
                                //echo '<td><button type="submit" class="btn btn-primary" name="enviar" id="submit_form" value="'.$s['CD_PRODUTO']."|".$s['NM_CLIENTE'].'"  class="input-submit">Enviar</button></TD>';
							    
								echo '<td><label><input type="submit" name="enviar" value="Enviar" /></label></td>';
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

<?Php
/*

                        // Criando um Objeto DAO
					    $objdados = new AppManterOfertaController();
						// Salvando um novo teste
						$dados = $objdados->consultarManterMinhaCarteira();
                        
                      
					
						
                      
                      if($dados != ""){
					  	
					 
          //$clientes = R::getAll('SELECT * FROM tb_cliente');
          
           $rows=mysql_num_rows($dados);
           while($s = mysql_fetch_array($dados)) {
print "	<form method=\"post\" action=\"\" id=\"ajax_form\">";
print "		<label><input type=\"hidden\" name=\"id\" value=\"\" /></label>";
print "		<label>Nome: <input type=\"text\" name=\"nome\" value=\"\" /></label>";
print "		<label>Email: <input type=\"text\" name=\"email\" value=\"\" /></label>";
print "		<label>Telefone: <input type=\"text\" name=\"telefone\" value=\"\" /></label>";
 
print "		<label><input type=\"submit\" name=\"enviar\" value=\"Enviar\" /></label>";
print "	</form>";
*/
?>
</body>
</html>