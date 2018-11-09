<h2>Lista de Libros</h2>
<?php
	echo $this->Html->link('Crear Libro', array('controller' => 'libros', 'action' => 'nuevo'));
?>
<table class="table table-striped table-bordered">
	<tr>
		<td>Titulo</td>
		<td>Autor</td>
		<td>Precio</td>
		<td>Detalles</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>

	<?php foreach($libros as $libro): ?>
		<tr>
			<td> <?php echo $libro['Libro']['titulo']; ?></td>
			<td> <?php echo $libro['Libro']['autor']; ?></td>
			<td> <?php echo $libro['Libro']['precio']; ?></td>
			<td> <?php echo $this->Html->link('Detalle', array('controller' => 'libros', 'action' => 'ver', $libro['Libro']['id']), array('class'=>'btn btn-success btn-sm'));?></td>
			<td> <?php echo $this->Html->link('Editar', array('controller' => 'libros', 'action' => 'editar', $libro['Libro']['id']), array('class'=>'btn btn-success btn-sm')); ?></td>
			<td><?php echo $this->Form->postLink('Eliminar', array('action' => 'eliminar', $libro['Libro']['id']), array('class'=>'btn btn-danger btn-sm'), array('confirm' => 'Eliminar a '.$libro['Libro']['titulo'].'?')); ?> </td>
		</tr>
	<?php endforeach; ?>	
</table>