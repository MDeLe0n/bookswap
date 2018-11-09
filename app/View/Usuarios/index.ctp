<h2>Lista de Usuarios</h2>
<?php
	echo $this->Html->link('Crear Usuario', array('controller' => 'usuarios', 'action' => 'nuevo'));
?>
<table class="table table-striped table-bordered">
	<tr>
		<td>Nombre</td>
		<td>Correo</td>
		<td>Detalles</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>

	<?php foreach($usuarios as $usuario): ?>
		<tr>
			<td> <?php echo $usuario['Usuario']['nombre']; ?></td>
			<td> <?php echo $usuario['Usuario']['correo']; ?></td>
			<td> <?php echo $this->Html->link('Detalle', array('controller' => 'usuarios', 'action' => 'ver', $usuario['Usuario']['id']), array('class'=>'btn btn-primary btn-sm'));?></td>
			<td> <?php echo $this->Html->link('Editar', array('controller' => 'usuarios', 'action' => 'editar', $usuario['Usuario']['id']), array('class'=>'btn btn-primary btn-sm')); ?></td>
			<td><?php echo $this->Form->postLink('Eliminar', array('action' => 'eliminar', $usuario['Usuario']['id']), array('class'=>'btn btn-danger btn-sm'), array('confirm' => 'Eliminar a '.$usuario['Usuario']['nombre'].'?')); ?> </td>
		</tr>
	<?php endforeach; ?>
</table>