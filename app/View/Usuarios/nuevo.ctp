<h2>Crear Usuario</h2>

<?php
	echo $this->Form->create('Usuario');
	echo $this->Form->input('usuario');
	echo $this->Form->input('nombre');
	echo $this->Form->input('correo');
	echo $this->Form->input('contrasena', array('type' => 'password'));
	echo $this->Form->input('confirmar', array('type' => 'password'));
	echo $this->Form->input('telefono'); 
	echo $this->Form->end('Crear Usuario');
?>
<?php
	echo $this->Html->link('Volver a la lista de usuarios', array('controller' => 'usuarios', 'action' => 'index'), array('class'=>'btn btn-primary btn-sm'));