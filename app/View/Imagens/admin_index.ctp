<div class="imagens index">
	<h2>Imagens</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('imagem'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('albun_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($imagens as $imagen): ?>
	<tr>
		<td><?php echo h($imagen['Imagen']['id']); ?>&nbsp;</td>
		<td><?php echo h($imagen['Imagen']['url']); ?>&nbsp;</td>
		<td><?php echo h($imagen['Imagen']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($imagen['Imagen']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($imagen['Imagen']['albun_id']); ?>&nbsp;</td>
		<td><?php echo h($imagen['Imagen']['created']); ?>&nbsp;</td>
		<td><?php echo h($imagen['Imagen']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('Editar', array('action' => 'editar', $imagen['Imagen']['id'])); ?>
			<?php echo $this->Form->postLink('Delete', array('action' => 'remover', $imagen['Imagen']['id']), null, __('Tem certeza que quer remover # %s?', $imagen['Imagen']['titulo'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'novo')); ?></li>
	</ul>
</div>