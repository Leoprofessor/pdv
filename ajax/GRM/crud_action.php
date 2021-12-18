<?php

error_reporting(0);
require_once("app/Model/dbcontroller.php");
$db_handle = new DBController();

$action = $_POST["action"];

//print_r($_POST["txtmessage"]);
//exit;

if(!empty($action)) {
	switch($action) {
		case "add":
			$result = mysql_query("INSERT INTO tb_situacao_oferta(DS_situacao_oferta) VALUES('".$_POST["txtmessage"]."')");
			if($result){
				  $insert_id = mysql_insert_id();
				  echo '<div class="message-box"  id="message_' . $insert_id . '">
						<div>
						<button class="btnEditAction" name="edit" onClick="showEditBox(' . $insert_id . ')">Edit</button>
<button class="btnDeleteAction" name="delete" onClick="callCrudAction(\'delete\',' . $insert_id . ')">Delete</button>
						</div>
						<div class="message-content">' . $_POST["txtmessage"] . '</div></div>';
			}
			break;
			
		case "edit":
			$result = mysql_query("UPDATE tb_produto set CD_SITUACAO_OFERTA = ".$_POST["message_id2"]." WHERE  CD_PRODUTO=".$_POST["message_id"]);
			//print_r($result);
			if($result){
				  echo $_POST["txtmessage"];
			}
			break;			
		
		case "delete": 
			if(!empty($_POST["message_id"])) {
				mysql_query("DELETE FROM tb_produto WHERE CD_PRODUTO=".$_POST["message_id"]);
			}
			break;
	}
}
?>