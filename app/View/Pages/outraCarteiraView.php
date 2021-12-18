<?Php

require '../../Model/Database.php';


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Portal de Relacionamento BRB</title>
    <link   href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="plugins/jquery/themes/base/jquery.ui.all.css">
	<script src="plugins/jquery/jquery-1.9.1.js"></script>
	<script src="plugins/jquery/ui/jquery.ui.core.js"></script>
	<script src="plugins/jquery/ui/jquery.ui.widget.js"></script>
	<script src="plugins/jquery/ui/jquery.ui.mouse.js"></script>
	<script src="plugins/jquery/ui/jquery.ui.sortable.js"></script>
	<script src="plugins/jquery/ui/jquery.ui.accordion.js"></script>
	<link rel="stylesheet" href="plugins/jquery/demos/demos.css">
	<style>
	/* IE has layout issues when sorting (see #5413) */
	.group { zoom: 1 }
	</style>
	<script>
	$(function() {
		$( "#accordion1" )
			.accordion({
				header: "> div > h3"
			})
			.sortable({
				axis: "y",
				handle: "h3",
				stop: function( event, ui ) {
					// IE doesn't register the blur when sorting
					// so trigger focusout handlers to remove .ui-state-focus
					ui.item.children( "h3" ).triggerHandler( "focusout" );
				}
			});
	});
	</script>
</head>
<body>

<div id="accordion1">
	<div class="group">
		<h3>Agenda</h3>
		<div>
			<p>Não há registros no momento.</p>
		</div>
	</div>
	<div class="group">
		<h3>Alertas</h3>
		<div>
			<p>Não há registros no momento.</p>
		</div>
	</div>
	<div class="group">
		<h3>Relacionamento</h3>
		<div>
			<p>Não há registros no momento.</p>
			
		</div>
	</div>
	<div class="group">
		<h3>Ações Comerciais</h3>
		<div>
			<table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nome Cliente</th>
                          <th>Segmento</th>
                          <th>Tipo Cliente</th>
                          <th>Carteira</th>
						  <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
          
					    
						$clientes = R::getAll('SELECT * FROM tb_cliente');
					
								
								foreach ($clientes as $row) {
                                echo '<tr>';
                                echo '<td>'. $row['NM_CLIENTE'] . '</a></td>';
                                echo '<td>'. $row['CD_SEGMENTACAO'] . '</td>';
                                echo '<td>'. $row['CD_TIPO_CLIENTE'] . '</td>';
								echo '<td>'. $row['CD_CARTEIRA'] . '</td>';
								echo '<td>'. $row['CD_CARTEIRA'] . '</td>';
                                echo '<td><a class="btn" href="index.php?id='.$row['CD_CLIENTE'].'"><img src="../../View/Pages/Imagens/"></a></td>';
                                echo '</tr>';
					   
					   }
                      ?>
                      </tbody>
                </table></p>
		</div>
	</div>
</div>

<div class="demo-description">
<!--<p>Copyright©Dicli</p>-->
</div>
</body>
</html>
