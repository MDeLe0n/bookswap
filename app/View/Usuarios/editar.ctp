<h2>Editar Usuario</h2>

<?php echo $this->Form->create('Usuario'); ?>
<?php echo $this->Form->input('usuario'); ?>
<?php echo $this->Form->input('correo'); ?>
<?php echo $this->Form->input('contrasena'); ?>
<?php echo $this->Form->input('telefono'); ?>
<?php echo $this->Form->end('Editar Usuario'); ?>

<?php
	echo $this->Html->link('Volver a la lista de usuarios', array('controller' => 'usuarios', 'action' => 'index'));