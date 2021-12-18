<!doctype html>
<html>
<head>
	
	<title>Portal de Relacionamento BRB</title>
	<script src="jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="crud.js"></script>
<style>
body{width:100%;}
.message-box{margin-bottom:20px;border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
.btnEditAction{background-color:#2FC332;border:0;padding:2px 10px;color:#FFF;}
.btnDeleteAction{background-color:#D60202;border:0;padding:2px 10px;color:#FFF;margin-bottom:15px;}
#btnAddAction{background-color:#09F;border:0;padding:5px 10px;color:#FFF;}
</style>
</head>
<body>
<?php
error_reporting(0);
require_once("dbcontroller.php");
$db_handle = new DBController();
$tb_produtos = $db_handle->runQuery("SELECT produto.CD_PRODUTO, produto.NM_PRODUTO, oferta.CD_SITUACAO_OFERTA, oferta.DS_SITUACAO_OFERTA FROM tb_produto produto, tb_situacao_oferta oferta WHERE produto.CD_SITUACAO_OFERTA=oferta.CD_SITUACAO_OFERTA");
?>


<div class="form_style">
<div id="tb_produto-list-box">
<?php
if(!empty($tb_produtos)) {
foreach($tb_produtos as $k=>$v) {
?>
<div class="message-box" id="message_<?php echo $tb_produtos[$k]["CD_PRODUTO"];?>">
<div>
<button class="btnEditAction" name="edit" onClick="showEditBox(<?php echo $tb_produtos[$k]["CD_PRODUTO"]; ?>)">Edit</button>
<button class="btnDeleteAction" name="delete" onClick="callCrudAction('delete',<?php echo $tb_produtos[$k]["CD_PRODUTO"]; ?>)">Delete</button>
</div>

<?php echo $tb_produtos[$k]["NM_PRODUTO"]; ?>
<div class="message-content"><?php echo $tb_produtos[$k]["DS_SITUACAO_OFERTA"]; ?></div>

</div>
</div>
</div>
<?php
}
} ?>
</div>

<div id="frmAdd"><textarea name="txtmessage" id="txtmessage" cols="80" rows="5"></textarea>
<p><button id="btnAddAction" name="submit" onClick="callCrudAction('add','')">Add</button></p>
</div>
<img src="LoaderIcon.gif" id="loaderIcon" style="display:none" />
</div>