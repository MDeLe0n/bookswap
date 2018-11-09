<h2>Detalles del Libro: <?php echo $libro['Libro']['titulo']; ?></h2>

<p><strong>Editorial: </strong><?php echo $libro['Libro']['editorial']; ?> </p>
<p><strong>Estado: </strong><?php echo $libro['Libro']['estado']; ?> </p>
<p><strong>Sipnosis: </strong><?php echo $libro['Libro']['sipnosis']; ?> </p>
<p><strong>Imagen: </strong><?php echo $libro['Libro']['imagen']; ?> </p>
<p><strong>Publicado: </strong><?php echo $this->Time->format('d-m-Y ; h:i A', $libro['Libro']['created']); ?> </p>

<?php
	echo $this->Html->link('Volver a la lista de libros', array('controller' => 'libros', 'action' => 'index'), array('class'=>'btn btn-primary btn-sm'));