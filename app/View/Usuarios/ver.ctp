<h2>Detalles de: <?php echo $usuario['Usuario']['nombre']; ?></h2>

<p><strong>Nombre de Usuario: </strong><?php echo $usuario['Usuario']['usuario']; ?> </p>
<p><strong>Teléfono: </strong><?php echo $usuario['Usuario']['telefono']; ?> </p>
<p><strong>Usuario desde: </strong><?php echo $usuario['Usuario']['created']; ?> </p>
<?php
	echo $this->Html->link('Volver a la lista de usuarios', array('controller' => 'usuarios', 'action' => 'index'), array('class'=>'btn btn-primary btn-sm'));