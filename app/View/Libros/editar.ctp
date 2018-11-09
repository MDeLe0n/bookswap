<h2>Editar Libro</h2>

<?php echo $this->Form->create('Libro'); ?>
<?php echo $this->Form->input('precio'); ?>
<?php echo $this->Form->input('imagen'); ?>
<?php echo $this->Form->end('Editar Libro'); ?>

<?php
	echo $this->Html->link('Volver a la lista de libros', array('controller' => 'libros', 'action' => 'index'));