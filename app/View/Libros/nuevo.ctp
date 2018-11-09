<h2>Crear Libro</h2>

<?php
	echo $this->Form->create('Libro');
	echo $this->Form->input('titulo');
	echo $this->Form->input('autor');
	echo $this->Form->input('editorial');
	echo $this->Form->input('precio');
	/*echo $this->Html->script('ckeditor/ckeditor');
	echo $this->Form->textarea('content', array('class' => 'ckeditor'));*/
	echo $this->Form->input('sipnosis');
	echo $this->Form->input('categoria');
	echo $this->Form->input('estado');
	echo $this->Form->input('imagen');
	echo $this->Form->end('Crear Libro');
?>
<?php
	echo $this->Html->link('Volver a la lista de libros', array('controller' => 'libros', 'action' => 'index'));