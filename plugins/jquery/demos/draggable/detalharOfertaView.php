<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Draggable - Handles</title>
	<link rel="stylesheet" href="../../themes/base/jquery.ui.all.css">
	<script src="../../jquery-1.9.1.js"></script>
	<script src="../../ui/jquery.ui.core.js"></script>
	<script src="../../ui/jquery.ui.widget.js"></script>
	<script src="../../ui/jquery.ui.mouse.js"></script>
	<script src="../../ui/jquery.ui.draggable.js"></script>
	<link rel="stylesheet" href="../demos.css">
	<style>
	#draggable, #draggable2 { width: 800px; height: 600px; padding: 0.5em; float: left; margin: 0 10px 10px 0; }
	#draggable p { cursor: move; }
	</style>
	<script>
	$(function() {
		$( "#draggable" ).draggable({ handle: "p" });
		$( "#draggable2" ).draggable({ cancel: "p.ui-widget-header" });
		$( "div, p" ).disableSelection();
	});
	</script>
</head>
<body>

<div id="draggable" class="ui-widget-content">
	<p class="ui-widget-header">I can be dragged only by this handle</p>
</div>

<!--<div id="draggable2" class="ui-widget-content">
	<p>You can drag me around&hellip;</p>
	<p class="ui-widget-header">&hellip;but you can't drag me by this handle.</p>
</div>-->

<div class="demo-description">
<p>Copyright©Dicli</p>
</div>
</body>
</html>
