<div class="imagens form">
<?php echo $this->Form->create('Imagen',array('type'=>'file')); ?>
	<fieldset>
		<legend>Nova imagem</legend>
	<?php
		echo $this->Form->input('url',array('type'=>'file'));
		echo $this->Form->input('titulo');
		echo $this->Form->input('descricao');
		echo $this->Form->input('albun_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>