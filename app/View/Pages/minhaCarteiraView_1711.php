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
		$( "#accordion" )
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
	
	<!--posição-->
	
	<script src="plugins/jquery/ui/jquery.ui.position.js"></script>
	<script src="plugins/jquery/ui/jquery.ui.button.js"></script>
	<script src="plugins/jquery/ui/jquery.ui.dialog.js"></script>
	<style>
	#dialog label, #dialog input { display:block; }
	#dialog label { margin-top: 0.5em; }
	#dialog input, #dialog textarea { width: 95%; }
	#tabs { margin-top: 1em; }
	#tabs li .ui-icon-close { float: left; margin: 0.4em 0.2em 0 0; cursor: pointer; }
	#add_tab { cursor: pointer; }
	</style>
	<script>
	$(function() {
		var tabTitle = $( "#tab_title" ),
			tabContent = $( "#tab_content" ),
			tabTemplate = "<li><a href='#{href}'>#{label}</a> <span class='ui-icon ui-icon-close' role='presentation'>Remove Tab</span></li>",
			tabCounter = 2;

		var tabs = $( "#tabs" ).tabs();

		// modal dialog init: custom buttons and a "close" callback reseting the form inside
		var dialog = $( "#dialog" ).dialog({
			autoOpen: false,
			modal: true,
			buttons: {
				Add: function() {
					addTab();
					$( this ).dialog( "close" );
				},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			},
			close: function() {
				form[ 0 ].reset();
			}
		});

		// addTab form: calls addTab function on submit and closes the dialog
		var form = dialog.find( "form" ).submit(function( event ) {
			addTab();
			dialog.dialog( "close" );
			event.preventDefault();
		});

		// actual addTab function: adds new tab using the input from the form above
		function addTab() {
			var label = tabTitle.val() || "Tab " + tabCounter,
				id = "tabs-" + tabCounter,
				li = $( tabTemplate.replace( /#\{href\}/g, "#" + id ).replace( /#\{label\}/g, label ) ),
				tabContentHtml = tabContent.val() || "Tab " + tabCounter + " content.";

			tabs.find( ".ui-tabs-nav" ).append( li );
			tabs.append( "<div id='" + id + "'><p>" + tabContentHtml + "</p></div>" );
			tabs.tabs( "refresh" );
			tabCounter++;
		}

		// addTab button: just opens the dialog
		$( "#add_tab" )
			.button()
			.click(function() {
				dialog.dialog( "open" );
			});

		// close icon: removing the tab on click
		tabs.delegate( "span.ui-icon-close", "click", function() {
			var panelId = $( this ).closest( "li" ).remove().attr( "aria-controls" );
			$( "#" + panelId ).remove();
			tabs.tabs( "refresh" );
		});

		tabs.bind( "keyup", function( event ) {
			if ( event.altKey && event.keyCode === $.ui.keyCode.BACKSPACE ) {
				var panelId = tabs.find( ".ui-tabs-active" ).remove().attr( "aria-controls" );
				$( "#" + panelId ).remove();
				tabs.tabs( "refresh" );
			}
		});
	});
	
	
	</script>
	<!--fim posição-->
</head>
<body>

<div id="accordion-resizer">
	
		<h3>Agenda</h3>
		<div>
			<p>Não há registros no momento.</p>
		</div>
	</div>
	
		<h3>Alertas</h3>
		<div>
			<p>Não há registros no momento.</p>
		</div>
	</div>
	
		<h3>Relacionamento</h3>
		<div>
			<p>Não há registros no momento.</p>
			
		</div>
	</div>
	<div class="group">
		<h3>Ações Comerciais</h3>
		<div>
		<form action="index.php" method="GET">
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
								//print '<button id=\"add_tab\">Adicionar Minha Carteira</button>';
                                echo '<td><a class="btn" href="index.php?id='.$row['CD_CLIENTE'].'"></a></td>';
								echo '<input name="cd_cliente" type="hidden" id="cd_cliente" value="'.$row['CD_CLIENTE'].'">';
                                echo '</tr>';
					   
					   }
					   foreach ($clientes as $row) {
                                echo '<tr>';
                                echo '<td>'. $row['NM_CLIENTE'] . '</a></td>';
                                echo '<td>'. $row['CD_SEGMENTACAO'] . '</td>';
                                echo '<td>'. $row['CD_TIPO_CLIENTE'] . '</td>';
								echo '<td>'. $row['CD_CARTEIRA'] . '</td>';
								echo '<td>'. $row['CD_CARTEIRA'] . '</td>';
								//print '<button id=\"add_tab\">Adicionar Minha Carteira</button>';
                                echo '<td><a class="btn" href="index.php?id='.$row['CD_CLIENTE'].'"></a></td>';
								echo '<input name="cd_cliente" type="hidden" id="cd_cliente" value="'.$row['CD_CLIENTE'].'">';
                                echo '</tr>';
					   
					   }
                      ?>
                      </tbody>
                </table>
				</form></p>
		</div>
	</div>
	
</div>


<div class="demo-description">
<!--<p>Copyright©Dicli</p>-->
</div>
</body>
</html>
