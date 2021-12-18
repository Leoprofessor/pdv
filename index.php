<?Php

session_start();
//$usuario = strtolower(substr($_SERVER["REMOTE_USER"],4,strlen($_SERVER["REMOTE_USER"])-1));


/*if (isset($_POST)) {
	
	//foreach($_POST["NM_CLIENTE"] as $id => $nome) {
    //echo "nota $ => $nome < exibindo com sucesso!<br>";
    //}
    $clienteview = $_POST["CLIENTE"];
    $cliente  = explode("|", $clienteview);
	
	$cd_cliente = $cliente[0]; // código do cliente selecionado para oferta de crédito
	$nm_cliente = $cliente[1]; // nome do cliente selecionado para oferta de crédito
	
					//var_dump($_POST);
					//print_r($_POST["CLIENTE"]);
					}
*/
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Portal de Relacionamento BRB</title>
	<link rel="stylesheet" href="plugins/jquery/themes/base/jquery.ui.all.css">
	<script src="plugins/jquery/jquery-1.9.1.js"></script>
	<script src="plugins/jquery/ui/jquery.ui.position.js"></script>
	<script src="plugins/jquery/ui/jquery.ui.core.js"></script>
	<script src="plugins/jquery/ui/jquery.ui.widget.js"></script>
	<script src="plugins/jquery/ui/jquery.ui.mouse.js"></script>
	<script src="plugins/jquery/ui/jquery.ui.button.js"></script>
	<script src="plugins/jquery/ui/jquery.ui.tabs.js"></script>
	<script src="plugins/jquery/ui/jquery.ui.dialog.js"></script>
	<script src="plugins/jquery/ui/jquery.ui.sortable.js"></script>
	<link rel="stylesheet" href="plugins/jquery/demos/demos.css">
	<!--<script src="plugins/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>-->
    <script src="app/view/pages/js/crud.js"></script>
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
			tabCounter++;
		}

		// addTab button: just opens the dialog
		$( "#add_tab" )
			.button()
			.click(function() {
				dialog.dialog( "open" );
				// $(":hidden").show();   NO DIA QUE PRECISAR DO HIDDEN EM JQUERY TAIS
			});

		// close icon: removing the tab on click
		tabs.delegate( "span.ui-icon-close", "click", function() {
			var panelId = $( this ).closest( "li" ).remove().attr( "aria-controls" );
			$( "#" + panelId ).remove();
			
		});

		tabs.bind( "keyup", function( event ) {
			if ( event.altKey && event.keyCode === $.ui.keyCode.BACKSPACE ) {
				var panelId = tabs.find( ".ui-tabs-active" ).remove().attr( "aria-controls" );
				$( "#" + panelId ).remove();
				
			}
		});
	});
	
	
	</script>
	
	<script>
	$(function() {
		var tabs = $( "#tabs" ).tabs();
		tabs.find( ".ui-tabs-nav" ).sortable({
			axis: "x",
			stop: function() {
				
			}
		});
	});
	</script>
	
	<!--função do troca a troca de abas -->
	<script>
	$(function() {
		var tabs = $( "#tabs" ).tabs();
		tabs.find( ".ui-tabs-nav" ).sortable({
			axis: "x",
			stop: function() {
				
			}
		});
	});
	</script>
	<!-- função da navegação normal  -->
	<script>
	$(function() {
		$( "#tabs" ).tabs({
			beforeLoad: function( event, ui ) {
				ui.jqXHR.error(function() {
					ui.panel.html(
						"KKKKK " +
						"A CULPA NÃO É SUA...FIQUE TRANQUILO" );
				});
			}
		});
	});
	

	</script>

</head>
<body>

<div id="dialog" title="Outra Carteira">
	<form>
		<fieldset class="ui-helper-reset">
			<label for="tab_title">Digite o Nome do Funcionário</label>
			<input type="text" name="tab_title" id="tab_title" value="" class="ui-widget-content ui-corner-all" />
			<label for="tab_content">Digite a Matrícula do Funcionario</label>
			<input type="text" name="tab_content" id="tab_content" class="ui-widget-content ui-corner-all">
		</fieldset>
	</form>
</div>
<br>
<button id="add_tab">Adicionar Outra Carteira</button>
<?Php



print "<form name=\"myWebForm\" action=\"index.php\" method=\"post\">";
//print "<input type=\"hidden\" name=\"orderNumber\" id=\"orderNumber\" value=\"0024\" />";
print "<div id=\"tabs\">";
	print "<ul>";
	print "<li class=\"ui-state-default ui-corner-top ui-tabs-active ui-state-active\" role=\"tab\" tabindex=\"0\" aria-controls=\"tabs-1\" aria-labelledby=\"ui-id-1\" aria-selected=\"true\"><a href=\"#tabs-1\" class=\"ui-tabs-anchor\" role=\"presentation\" tabindex=\"-1\" id=\"ui-id-1\">Portal de Relacionamento BRB</a> <span class=\"ui-icon ui-icon-close\" role=\"presentation\">Remove Tab</span></li></li>";
		print "<li><a href=\"app/View/Pages/minhaCarteiraView.php\">Minha Carteira</a></li>";
			
			//if (isset($_GET["id"]) && ($_SESSION["contador"] < 11)){
			if (isset($_POST["CLIENTE"])){
				
			//pego o post dos clientes	
            $clienteview = $_POST["CLIENTE"];
	        $cliente  = explode("|", $clienteview);
	        //separo código cliente e nome do cliente
	        $cd_cliente = $cliente[0]; // código do cliente selecionado para oferta de crédito
			$nm_cliente = $cliente[1]; 
				
			//inicio o contador de session()
			isset($_SESSION["contador"]) ? (++$_SESSION["contador"]) : ($_SESSION["contador"] = 1);

					
						 
            //coloco o valor da sessão contador no count
			$count = $_SESSION["contador"];
			$valores = array();
            //taca-li pau for
			for ($i=0; $i<$count; $i++)
			{  


					    //1º cliente aberto pelo gerente chamado de cliente 0
						if($_SESSION["contador"] == 1){ 
						$_SESSION["cd_cliente0"] = $cd_cliente;
						$_SESSION["nm_cliente0"] = $nm_cliente;
						
						print "<li><a href=\"app/View/Pages/index".$i.".php\">Cliente ".$_SESSION["nm_cliente".$i.""]."</a><span class=\"ui-icon ui-icon-close\" role=\"presentation\">Remove Tab</span></li>";
						}
						//2º cliente aberto pelo gerente chamado de cliente 1
						if($_SESSION["contador"] == 2){
     					$_SESSION["cd_cliente1"] = $cd_cliente;
						$_SESSION["nm_cliente1"] = $nm_cliente;
						
						print "<li><a href=\"app/View/Pages/index".$i.".php\">Cliente ".$_SESSION["nm_cliente".$i.""]."</a><span class=\"ui-icon ui-icon-close\" role=\"presentation\">Remove Tab</span></li>";
						}
						//3º cliente aberto pelo gerente chamado de cliente 2
						if($_SESSION["contador"] == 3){
						$_SESSION["cd_cliente2"] = $cd_cliente;
						$_SESSION["nm_cliente2"] = $nm_cliente;
						print "<li><a href=\"app/View/Pages/index".$i.".php\">Cliente ".$_SESSION["nm_cliente".$i.""]."</a><span class=\"ui-icon ui-icon-close\" role=\"presentation\">Remove Tab</span></li>";
						}
						//4º cliente aberto pelo gerente chamado de cliente 3
						if($_SESSION["contador"] == 4){
						$_SESSION["cd_cliente3"] = $cd_cliente;
						$_SESSION["nm_cliente3"] = $nm_cliente;
						print "<li><a href=\"app/View/Pages/index".$i.".php\">Cliente ".$_SESSION["nm_cliente".$i.""]."</a><span class=\"ui-icon ui-icon-close\" role=\"presentation\">Remove Tab</span></li>";
						}
						//5º cliente aberto pelo gerente chamado de cliente 4
						if($_SESSION["contador"] == 5){
						$_SESSION["cd_cliente4"] = $cd_cliente;
						$_SESSION["nm_cliente4"] = $nm_cliente;
						print "<li><a href=\"app/View/Pages/index".$i.".php\">Cliente ".$_SESSION["nm_cliente".$i.""]."</a><span class=\"ui-icon ui-icon-close\" role=\"presentation\">Remove Tab</span></li>";
						}
						//6º cliente aberto pelo gerente chamado de cliente 5
						if($_SESSION["contador"] == 6){
						$_SESSION["cd_cliente5"] = $cd_cliente;
						$_SESSION["nm_cliente5"] = $nm_cliente;
						print "<li><a href=\"app/View/Pages/index".$i.".php\">Cliente ".$_SESSION["nm_cliente".$i.""]."</a><span class=\"ui-icon ui-icon-close\" role=\"presentation\">Remove Tab</span></li>";
						}
						//7º cliente aberto pelo gerente chamado de cliente 6
						if($_SESSION["contador"] == 7){
						$_SESSION["cd_cliente6"] = $cd_cliente;
						$_SESSION["nm_cliente6"] = $nm_cliente;
						print "<li><a href=\"app/View/Pages/index".$i.".php\">Cliente ".$_SESSION["nm_cliente".$i.""]."</a><span class=\"ui-icon ui-icon-close\" role=\"presentation\">Remove Tab</span></li>";
						}
						//8º cliente aberto pelo gerente chamado de cliente 7
						if($_SESSION["contador"] == 8){
						$_SESSION["cd_cliente7"] = $cd_cliente;
						$_SESSION["nm_cliente7"] = $nm_cliente;
						print "<li><a href=\"app/View/Pages/index".$i.".php\">Cliente ".$_SESSION["nm_cliente".$i.""]."</a><span class=\"ui-icon ui-icon-close\" role=\"presentation\">Remove Tab</span></li>";
						}
						//9º cliente aberto pelo gerente chamado de cliente 8
						if($_SESSION["contador"] == 9){
						$_SESSION["cd_cliente8"] = $cd_cliente;
						$_SESSION["nm_cliente8"] = $nm_cliente;
						print "<li><a href=\"app/View/Pages/index".$i.".php\">Cliente ".$_SESSION["nm_cliente".$i.""]."</a><span class=\"ui-icon ui-icon-close\" role=\"presentation\">Remove Tab</span></li>";
						}
						//10º cliente aberto pelo gerente chamado de cliente 9
						if($_SESSION["contador"] == 10){
						$_SESSION["cd_cliente9"] = $cd_cliente;
						$_SESSION["nm_cliente9"] = $nm_cliente;
						print "<li><a href=\"app/View/Pages/index".$i.".php\">Cliente ".$_SESSION["nm_cliente".$i.""]."</a><span class=\"ui-icon ui-icon-close\" role=\"presentation\">Remove Tab</span></li>";
						}
						
						//11º cliente aberto pelo gerente chamado de cliente 10
						if($_SESSION["contador"] == 11){
						$_SESSION["cd_cliente10"] = $cd_cliente;
						$_SESSION["nm_cliente10"] = $nm_cliente;
						print "<li><a href=\"app/View/Pages/index".$i.".php\">Cliente ".$_SESSION["nm_cliente".$i.""]."</a><span class=\"ui-icon ui-icon-close\" role=\"presentation\">Remove Tab</span></li>";
						}
						
			}
			
			}else{
			
			
			//se não tem nenhum cliente aberto apago tudo. tenho que melhorar isso aqui. ta GO HORSE
			session_destroy();
			
			}
		
				
   print "</ul>";
	print "<div id=\"tabs-1\">";
		print "<p align=\"left\">Bem vindo Fulano de Tal</p>";
		print "<p><img src=\"app/view/imagens/jpg.jpg\" alt=\"Smiley face\" height=\"400\" width=\"700\"></p>";
	
	print "</div>";
	
print "</div>";

print "</form>";
?>
<div class="demo-description">
<p><a href="index.php" style="text-decoration:none">Copyright©Sucli</a></p>
</div>
</body>
</html>
</html>
