<div class="imagens form">
<?php echo $this->Form->create('Imagen'); ?>
	<fieldset>
		<legend>Editando imagem</legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('url');
		echo $this->Form->input('titulo');
		echo $this->Form->input('descricao');
		echo $this->Form->input('albun_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
